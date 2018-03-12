<?php
use Core\Router;
Router::connect('/', ['controller' => 'user', 'action' => 'index']);
// Router::connect('/404', ['controller' => 'error', 'action' => 'exist']);
Router::connect('/login', ['controller' => 'user', 'action' => 'login']);
Router::connect('/register', ['controller' => 'user', 'action' => 'register']);
?>