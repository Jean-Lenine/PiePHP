<?php
namespace Core;
 class Router {
    private static $url;
    private static $routes;
    public static function connect ($url, $route) {
    self::$routes[$url] = $route;
    }
    public static function get ($url) {
    // retourne un tableau associatif contenant
    // + le controller a instancier
    // + la méthode du controller a appeler
    // + un tableau contenant les paramètres à passer à la méthode du 
    // $url = $_SERVER['REQUEST_URI'];
    return (array_key_exists($url, self::$routes)) ? self::$routes[$url] : self::$routes["/404"];
   }
}
       