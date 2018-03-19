<?php 

namespace src\Controller;

class AppController extends \Core\Controller{
	
	public function addAction(){
		echo __CLASS__ . " [addAction]" . PHP_EOL;
	}
	
	public function indexAction(){
		echo __CLASS__ . "[indexAction erreur 404]" . PHP_EOL;

	}
}