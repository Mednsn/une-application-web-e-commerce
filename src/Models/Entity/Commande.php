<?php
namespace App\Models\Entity;

USE DATETIME;
USE App\Models\Entity\Role;


class Commande
{
    private ?int $id;
    private string $name;
    private ?DATETIME $date_creation;
    private float $total_price;
    private string $status;
    private User $user;

    public function __construct(string $name , string $status , float $total_price, User $user, ?DateTime $date_creation, ?int $id = null)
    {
        $this->name = $name;
        $this->status = $status;
        $this->total_price = $total_price;
        $this->date_creation = $date_creation;
        $this->user = $user;
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }
    public function getStatus(){
        return $this->status;
    }
    public function getTotalPrice(){
        return $this->total_price;
    }
    public function getUser(){
        return $this->user;
    }
    public function getDateCreation(){
        return $this->date_creation;
    }
   
}
