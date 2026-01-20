<?php

namespace App\Controllers;

session_start();

use App\Service\UserService;
use App\Models\Entity\User;



class AuthController
{
    private UserService $user_service;

    public function __construct()
    {
        $this->user_service = new UserService();
    }

    public function login()
    {
        require_once __DIR__ . '/../views/auth/login.php';
    }

    public function signeUp()
    {
        require_once __DIR__ . '/../views/auth/signeUp.php';
    }
    public function create()
    {
        if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password'])) {
           $hash_password = password_hash($_POST['password'], PASSWORD_DEFAULT);
           $user = new User($_POST['name'], $_POST['email'], $hash_password, 'Utilisateur');
           $this->user_service->create($user);
           $_SESSION['email'] = $_POST['email'];
           header('location: /article');
           } else {
            header('location: /signeUp');
        }
    }
    public function inscrire()
    {
        $row = $this->user_service->selectUserByEmail($_POST['email']);
        $passwrd = $row->password;

        if ($row && password_verify($_POST['password'], $passwrd)) {
            $_SESSION['email'] = $_POST['email'];
            if ($row->role === "Admin") {
                header('location: /dashboard');
            } else {

                header('location: /article');
            }
        } else {

            header('location: /login');
        }
    }
    public function modifierAccounte()
    {
        $row = $this->user_service->selectUserByEmail($_POST['modified_email']);
        if ($row->role === "Admin") {
            $this->user_service->update($row->id, "Utilisateur");
        } else {
            if ($row->role === "Utilisateur") {
                $this->user_service->update($row->id, "Admin");
            }
        }
        header('location: /dashboard');
    }
    public function deleteAccounte()
    {
        $this->user_service->delete($_POST['supprimer_id']);
        header('location: /dashboard');
    }
    public function destroy()
    {

        session_destroy();
        header('location: /home');
    }
}
