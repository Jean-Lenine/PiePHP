<?php 
namespace src\Model;
use \Core\ORM;
class UserModel {
	private $params;
	public function __construct($params) {
		// try {
		// 	$this->bdd = new \PDO('mysql:host=localhost;dbname=PiePHP;charset=utf8', 'root', '');	
		// }
		// catch (PDOexception $e) {
		// 	die('Erreur : ' . $e->getMessage());
		// }
		$this->params = $params;
	}
	
	public function connect() {
			echo __CLASS__ . " [Vous etes deja connecte]" . PHP_EOL;
	}
	
	public function create() {
		// créer une nouvelle entrée en base avec les champs passés en parametre et retourne son id
		$new = new ORM();
        // $new->create('users', $this->params); // OK
        // $new->read('users', INT); // OK
        // $new->update('users', 1, array('email' => 'quentin@gmai.com', 'password' => 'sucepute')); //OK
        // $new->delete('users', INT	); // OK
        $new->find('users', array('WHERE' => '1', 'ORDER BY' => 'id ASC', 'LIMIT' => '')); // OK
	}
	
	public function read() {
		// recupere une entrée en base suivant l'id de l'user
	}
	
	public function update() {
		// met a jour les champs d'une entrée en base suivant l'id de l'user
	}
	
	public function delete() {
		// supprimer une entrée en base suivant l'id de l'user
	}
	
	public function read_all(){
		// récupère toutes les entrée de la table user
	}
}
