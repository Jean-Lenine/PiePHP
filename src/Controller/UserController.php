<?php

namespace src\Controller;
use Model;

class UserController extends \Core\Controller{
	
	public function addAction(){
		echo __CLASS__ . " [addAction]" . PHP_EOL;
	}
	
	public function indexAction(){
		echo __CLASS__ . " [indexAction]" . PHP_EOL;
	}
	
	public function registerAction() {
		if(isset($_POST['register_btn'])) {
			
			// var_dump($this->request->query);
			$register = new \src\Model\UserModel($_POST['register_email'], $_POST['register_pwd']);
			$register->save();
		}
		else {
			// var_dump($this->request->query);
			$this->render("register"); // donne la vue au controller
		}
	}
	
	public function logInAction() {
		if(isset($_POST['login_btn'])) {
			$login = new \src\Model\UserModel($_POST['login_email'], $_POST['login_pwd']);
			$login->connect();
		}
		else {
			$this->render("login"); // donne la vue au controller
		}
	}
	
}
