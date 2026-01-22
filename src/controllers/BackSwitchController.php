<?php
namespace App\Controllers;


class BackSwitchController
{
    public function index(){

        require_once __DIR__ . '/../views/Back/dashboard.php';
      
    }
    public function commandes(){

        require_once __DIR__ . '/../views/Back/commandes.php';
      
    }
    public function products(){

        require_once __DIR__ . '/../views/Back/products.php';
      
    }
    public function users(){

        require_once __DIR__ . '/../views/ack/users.php';
      
    }
}
