<?php

namespace App\Controllers;
USE App\Repository\UserRepository;
USE App\Repository\CategoryRepository;
USE App\Repository\CommandeRepository;
USE App\Repository\ProductRepository;

class UserController
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
    public function selectAll()
    {
        return $this->user_repository->selectAll();
        
    }
    public function updateRoleUser()
    {
        // return $this->user_repository->update();
        
    }
    public function deleteUser()
    {
        // return $this->user_repository->delete();
        
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
