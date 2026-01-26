<?php
namespace App\Controllers;


class FrontSwitchController
{
    public function index(){

        require_once __DIR__ . '/../Views/Front/home.php';
      
    }
    public function panier(){

        require_once __DIR__ . '/../Views/Front/panier.php';
      
    }
    public function product(){

        require_once __DIR__ . '/../Views/Front/product.php';
      
    }
    public function profile(){

        require_once __DIR__ . '/../Views/Front/profile.php';
      
    }
}
