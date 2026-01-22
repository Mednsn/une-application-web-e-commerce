<?php
namespace App\Models\Entity;

USE App\Models\Entity\Panier;


class PanierIteme
{
    private ?int $id;
    private int $quantity ;
    private Panier $panier ;

    public function __construct(string $quantity , Panier $panier , ?int $id = null)
    {
        $this->quantity = $quantity;
        $this->panier = $panier;
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }
    public function getQuantity(){
        return $this->quantity;
    }
    public function getPanier(){
        return $this->panier;
    }
    
   
}
