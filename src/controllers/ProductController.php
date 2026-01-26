<?php

namespace App\Controllers;

use App\Models\Entity\Panier;
use App\Models\Jointures\PaniersProduct;
use App\Repository\ProductRepository;
use App\Repository\PanierRepository;

class ProductController
{
    private ProductRepository $product_repository;
    private PanierRepository $panier_repository;
    public function __construct()
    {
        $this->product_repository = new ProductRepository();
        $this->panier_repository = new PanierRepository();
    }
    public function index()
    {

        require_once __DIR__ . '/../views/front/home.php';
    }

    public function selectAllProducts()
    {
        return $this->product_repository->selectAll();
    }
    public function selectById(int $id)
    {
        return $this->product_repository->selectById($id);
    }
    public function addToPanier()
    {
        if(!isset($_SESSION['email'])){
            header('location: /login');
        }
        $panier = new Panier();
        // var_dump($_POST);exit;
        $panier->setUser($_POST['user_id']);
        $panier->setProduct($_POST['product_id']);
        $panier->setQuantity($_POST['quantity']);

        $this->panier_repository->create($panier);
        header('location: /panier');
    }
    public function selectAllPanierProducts()
    {
        if(!isset($_SESSION['email'])){
            header('location: /login');
        }
        $data['products'] = $this->panier_repository->selectAllPanierProducts($_SESSION['user_id']);
        $data['total'] = (float) number_format(array_reduce($data['products'], function ($sum, PaniersProduct $panier) {
            $sum += $panier->price * $panier->quantity;
            return $sum;
        }, 0), 2, '.', '');
        return $data;
    }
    public function deleteInPanier()
    {
        $this->panier_repository->delete($_POST['panier_id']);
        header('location: /panier');
    }

    public function proccesPanier()
    {
        if ($_POST['user_id'] == $_SESSION['user_id']) {
            $this->panier_repository->deleteByUser($_SESSION['user_id']);
            header('location: /home');
        } elseif(!$_SESSION['user_id']) {
            header('location: /login');
        }
    }
    public function selectAllProductWithCategory()
    {
        return $this->product_repository->selectAllProductWithCategory();
    }
}
