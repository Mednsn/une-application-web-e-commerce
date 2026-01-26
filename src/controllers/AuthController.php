<?php

namespace App\Controllers;

use App\Models\Entity\User;
use App\Models\Entity\Role;
use App\Repository\UserRepository;
use App\Repository\RoleRepository;

class AuthController
{
    private UserRepository $user_repository;

    public function __construct()
    {
        $this->user_repository = new UserRepository();
    }

    public function login()
    {
        require_once __DIR__ . '/../Views/Auth/login.php';
    }

    public function signeUp()
    {
        require_once __DIR__ . '/../Views/Auth/signeUp.php';
    }
    public function create()
    {
        $row = $this->user_repository->selectUserByEmail($_POST['email']);

        if (!$row && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password'])) {
            $hash_password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            
            $user = new User();

            $role = new Role();
            $role->setName('Utilisateur');
            $role_repo = new RoleRepository();
            
            if (!$role_repo->selectRole('Utilisateur')) {
                $last_id = $role_repo->create($role);
                $row = $user->setRole($last_id);
            } else {
                $row = $role_repo->selectRole('Utilisateur');
            }
            $user->setName($_POST['name']);
            $user->setEmail($_POST['email']);
            $user->setPassword($hash_password);
            $user->setRole($row->getId());
            
            $_SESSION['user_id'] = $this->user_repository->create($user);
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['name'] = $_POST['name'];

            header('location: /home');
        } else {
            header('location: /signeUp');
        }
    }
    public function connecxion()
    {
        $row = $this->user_repository->selectUserByEmail($_POST['email']);
        $passwrd = $row->getPassword();

        if ($row && password_verify($_POST['password'], $passwrd)) {
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['user_id'] = $row->getId();
            $_SESSION['name'] = $row->getName();
            if ($row->getRole() === 1) {
                header('location: /dashboard');
            } else {

                header('location: /home');
            }
        } else {

            header('location: /login');
        }
    }
    
    
    public function checkByEmail(string $email)
    {
        return $this->user_repository->selectUserByEmail($email);
    }

    public function destroy()
    {
        session_destroy();
        header('location: /home');
    }
}
