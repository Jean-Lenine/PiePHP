<?php
define('BASE_URI', str_replace('\\', '/', substr(__DIR__,strlen($_SERVER['DOCUMENT_ROOT']))));
require_once(implode(DIRECTORY_SEPARATOR, ['Core', 'autoload.php']));
$config = json_decode(file_get_contents("config.json"));
Core\Database::config($config);

echo"<pre>\n"."\n"."\n"."-------------------------"."\n"."\n"."\n</pre>";
$app = new Core\Core();
$app->run();

echo"<pre>\n"."\n"."\n"."-------------------------"."\n"."\n"."\n</pre>";
$app = new src\Controller\UserController();
$app->addAction();

?>
