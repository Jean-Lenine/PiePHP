<?php 
namespace src\Model;

class UserModel {
	
	private $mail;
	private $pwd;
	private $bdd;
	
	public function __construct($mail = null, $pwd = null) {
		try {
			$this->bdd = new \PDO('mysql:host=localhost;dbname=PiePHP;charset=utf8', 'root', '');	
		}
		catch (PDOexception $e) {
			die('Erreur : ' . $e->getMessage());
		}
		$this->mail = $mail;
		$this->pwd = $pwd;
	}
	
	public function save() {
		$query = "INSERT INTO users(`email`, `password`)
		VALUES (:email, :password)";
		$exec = $this->bdd->prepare($query);
		
		$exec->bindParam(':email', $this->mail);
		$exec->bindParam(':password', $this->pwd);
		$exec->execute();
	}
	
	public function connect() {
			echo __CLASS__ . " [Vous etes deja connecte]" . PHP_EOL;
	}
	
	public function create() {
		// créer une nouvelle entrée en base avec les champs passés en parametre et retourne son id
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
