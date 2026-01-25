<?php
namespace App\Models\Entity;



class Panier
{
    private ?int $id;
    private int $user_id ;
    private int $product_id ;
    private int $quantity ;
    private ?string $date_creation;

   
    public function getId(){
        return $this->id;
    }
    public function getUser(){
        return $this->user_id;
    }
    public function getProduct(){
        return $this->product_id;
    }
    
    public function getDateCreation(){
        return $this->date_creation;
    }
   
 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
 
    public function setUser($user_id)
    {
        $this->user_id = $user_id;

        return $this;
    }


    public function setProduct($product_id)
    {
        $this->product_id = $product_id;

        return $this;
    }


    public function setDate_creation($date_creation)
    {
        $this->date_creation = $date_creation;

        return $this;
    }

   
    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }
}
