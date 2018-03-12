<?php
namespace Core;
class Database{
	public static $bdd;
	public static function config($config) {
		try
		{
			self::$bdd =  new \PDO('mysql:host='.$config->HOST.';dbname='.$config->DBNAME.';charset=utf8', $config->USERNAME, $config->PASSWORD);
		}
		catch (Exception $e)
		{
		    die('Erreur : ' . $e->getMessage());
		}
	}
	public static function getDB() {
		return self::$bdd;
	}
}
?>