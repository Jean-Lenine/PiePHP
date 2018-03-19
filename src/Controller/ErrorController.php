<?php

namespace src\Controller;
use Model;
class ErrorController extends \Core\Controller{
public function errorAction(){
    $this->render("404");
}
}
?>