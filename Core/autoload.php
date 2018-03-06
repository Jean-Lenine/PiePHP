<?php
class Autoloader {
    
    // Enregistre l'Autoloader
    static function register(){
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    // Inclue le fichier correspondant à notre classe
    static function autoload($class){
        $path = str_replace('\\', DIRECTORY_SEPARATOR, $class);
        require_once($path . '.php');
    }
    
}
Autoloader::register();