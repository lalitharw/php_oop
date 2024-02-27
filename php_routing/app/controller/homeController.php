<?php
namespace App\Controller;
class HomeController{
    public static function home(){
        include_once './app/views/home.php' ;
    }

    public static function about(){
        include_once './app/views/about.php';
    }
}