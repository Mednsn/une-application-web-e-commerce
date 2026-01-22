<?php
namespace App\Models\Entity;

USE DateTime;
USE App\Models\Entity\User;
USE App\Models\Entity\Product;


class Panier
{
    private ?int $id;
    private User $user ;
    private Product $product ;
    private ?DateTime $date_creation;

    public function __construct(User $user , Product $product , ?DateTime $date_creation, ?int $id = null)
    {
        $this->user = $user;
        $this->product = $product;
        $this->date_creation = $date_creation;
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }
    public function getUser(){
        return $this->user;
    }
    public function getProduct(){
        return $this->product;
    }
    
    public function getDateCreation(){
        return $this->date_creation;
    }
   
}
