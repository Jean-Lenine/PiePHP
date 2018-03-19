<?php

use Core\Router;

// INDEX & 404
Router::connect('/', ['controller' => 'user', 'action' => 'index']);
Router::connect('/404', ['controller' => 'error', 'action' => 'error']);

// USER ROUTES
Router::connect('/user/register', ['controller' => 'user', 'action' => 'register']);
Router::connect('/user/login', ['controller' => 'user', 'action' => 'logIn']);

?>
