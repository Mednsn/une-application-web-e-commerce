<?php

namespace App\Controllers;

use App\Repository\UserRepository;
use App\Repository\CategoryRepository;
use App\Repository\CommandeRepository;
use App\Repository\ProductRepository;

class DashboardController
{

    private UserRepository $user_repository;
    private CategoryRepository $category_repository;
    private CommandeRepository $commande_repository;
    private ProductRepository $product_repository;

    public function __construct()
    {
        $this->category_repository = new CategoryRepository();
        $this->commande_repository = new CommandeRepository();
        $this->user_repository = new UserRepository();
        $this->product_repository = new ProductRepository();
    }
    public function index()
    {
        session_start();

        if (!isset($_SESSION['email'])) {
            header("Location: /login");
            exit();
        }


        require_once __DIR__ . '/../views/back/dashboard.php';
    }
    public function selectAll()
    {
        return $this->user_repository->selectAll();
    }
    public function updateRoleUser()
    {
        $row = $this->user_repository->selectUserByEmail($_POST['modified_email']);
        $row1 = $this->user_repository->selectInfosUserById($row->getId());
        if ($row1->role === "Admin") {
            $this->user_repository->update($row1->id, 5);
        } else {
            if ($row1->role === "Utilisateur") {
                $this->user_repository->update($row1->id, 1);
            }
        }
        header('location: /dashboard');
    }
    public function deleteUser()
    {
        $this->user_repository->delete($_POST['supprimer_id']);
        header('location: /dashboard');
    }
    public function deleteCommand()
    {
        // return $this->commande_repository->delete();


    }
    public function deleteProduct()
    {
        // return $this->product_repository->delete();

    }
    public function addProduct()
    {
        // return $this->product_repository->create();

    }
    public function updateProduct()
    {
        // return $this->product_repository->update();

    }
    public function addCategory()
    {
        // return $this->category_repository->create();

    }
    public function deleteCategory()
    {
        // return $this->category_repository->delete();

    }
}
