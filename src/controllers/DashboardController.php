<?php

namespace App\Controllers;

session_start();

class DashboardController
{
    public function index()
    {
        session_start();

        if (!isset($_SESSION['email'])) {
            header("Location: /login");
            exit();
        }


        require_once __DIR__ . '/../views/back/dashboard.php';
    }
}
