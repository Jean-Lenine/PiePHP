<?php
namespace Core;

class Autoloader{
	static function register(){
		spl_autoload_register(array(__CLASS__, 'autoload'));
	}

	static function autoload($class){
		$path = str_replace('\\', DIRECTORY_SEPARATOR, $class);
		if(is_file($path.".php")) {
			require_once($path . '.php');
		}
		// else {
			// header('Location: ');
		// }
	}
}

Autoloader::register();
