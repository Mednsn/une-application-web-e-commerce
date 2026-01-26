<?php
namespace App\Models\Entity;


class Commande
{
    private ?int $id;
    private ?string $date_creation;
    private float $total_price;
    private string $status;
    private int $user_id;

    
    public function getId(){
        return $this->id;
    }
    public function getStatus(){
        return $this->status;
    }
    public function getTotalPrice(){
        return $this->total_price;
    }
    public function getUser(){
        return $this->user_id;
    }
    public function getDateCreation(){
        return $this->date_creation;
    }
   

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function setDate_creation($date_creation)
    {
        $this->date_creation = $date_creation;

        return $this;
    }

    
    public function setTotal_price($total_price)
    {
        $this->total_price = $total_price;

        return $this;
    }

    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
   }
    public function setUser($user_id)
    {
        $this->user_id = $user_id;

        return $this;
    }
}
