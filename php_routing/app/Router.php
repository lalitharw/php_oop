<?php

namespace App;

use App\Controller\HomeController;
class Router{
    public static function route(){
        $route = $_SERVER['REQUEST_URI'];
        switch($route){
            case "/":
            case "":
                HomeController::home();
                break;
            case "/about":
                HomeController::about();
                break;
            default:
                include_once "./app/views/404.php";
        }
    }
}