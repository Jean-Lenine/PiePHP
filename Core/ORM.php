<?php
namespace Core;

class ORM{
	private $bdd;
	
	public function __construct(){
		try {
			$this->bdd = new \PDO('mysql:host=localhost;dbname=PiePHP;charset=utf8', 'root', '');	
		}
		catch (PDOexception $e) {
			die('Erreur : ' . $e->getMessage());
		}
	}
	
	// retourne un id
	public function create($table, $fields) {
		$i = 0;

		$insert = "(";
		$values = "(";
		while($i < (count($fields) - 1)){
			++$i;
			$insert .= "`".key($fields)."`";
			$values .= ":".key($fields)."";
			next($fields);

			if($i != (count($fields) -1)){
				$insert .= ", ";
				$values .= ", ";
			}
		}
		$insert .= ")";
		$values .= ")";

		$query = "INSERT INTO " . $table . " " . $insert . " 
		VALUES " . $values . ";";

		$exec = $this->bdd->prepare($query);

		reset($fields);

		$i = 0;	
		$bind = [];
		while($i < (count($fields) - 1)) {
			++$i;
			$bind[key($fields)] = current($fields);
			next($fields);
		}

		if($exec->execute($bind)){
			return $this->bdd->lastInsertId();
		}
		else {
			return false;
		}
        // var_dump($this->params);
	}
	// retourne un tableau
	public function read($table, $id) {
		$select = "WHERE id = :id";
		$query = "SELECT * FROM " . $table . " " . $select . "";
		$exec = $this->bdd->prepare($query);
		if($exec->execute(array('id' => $id))) {
			if($row = $exec->fetch()){
                // var_dump($row);
				return $row;
			}
			else {
				return false;
			}
		}
	}
	
	// retourne un booléen
	public function update($table, $id, $fields) {
		$where = "WHERE id = :id";
		$set = '';
		$i = 0;
		while($i < (count($fields))) {
			++$i;
			$set .= key($fields) ." = '". current($fields) . "'";
			next($fields);
			
			if($i != (count($fields))){
                var_dump($fields);
				$set .= ", ";
			}
		}
		$query = "UPDATE ".$table." SET ".$set. " ". $where;
		
		$exec = $this->bdd->prepare($query);
		if($exec->execute(array('id' => $id))) {
			return true;
		}
		else {
			return false;
		}
	}
	
	// retourne un booléen
	public function delete($table, $id) {
		$query = "DELETE FROM ".$table . " WHERE id = :id";
		$exec = $this->bdd->prepare($query);

		if($exec->execute(array('id' => $id))){
			return true;
		}
		else {
			return false;
		}
	}
	
	// retourne un tableau d'enregistrements
	public function find($table, $params = array(
		'WHERE' => '1', 'ORDER BY' => 'id ASC', 'LIMIT' => '')) {
			
		$select = "SELECT * FROM ".$table." ";
		foreach ($params as $key => $value) {
			if($value != ""){
				$select .= $key." ".$value." ";
			}
		}
		if($reponse = $this->bdd->query($select)){	
			return $reponse->fetchAll();
		}
		else {
			return false;
		}
	}
}