<?php
namespace src\Controller;
use Core\Controller;
class UserController extends Controller{
	public function indexAction() {
		echo "yes, it works";
	}
	public function addAction() {
		echo "it works";
	}
	public function loginAction() {
		$param = $this->request->getQueryParams();
		if(!$param)
			$this -> render("login");
		else
		{			
			$register = new Model\UserModel($param);
			if($register -> checkAuth())
				var_dump("oui");
			else
				var_dump("non");
		}
	}
	public function registerAction() {
		$param = $this->request->getQueryParams();
		if(!$param)
			$this -> render("register");
		else
		{
			$register = new Model\UserModel($param);
 			$register->save();
		}
	}
}
?>