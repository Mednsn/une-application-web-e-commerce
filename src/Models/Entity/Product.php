<?php
namespace App\Models\Entity;

USE DateTime;
USE App\Models\Entity\Category;


class Product
{
    private ?int $id;
    private string $name;
    private string $description;
    private string $image;
    private string $status;
    private ?DateTime $date_creation;
    private Category $category;
    private float $price;
    private int $stock;

    public function __construct(string $name , string $description , string $image , string $status, Category $category, float $price, int $stock , ?DATETIME $date_creation, ?int $id = null)
    {
        $this->name = $name;
        $this->description = $description;
        $this->image = $image;
        $this->status = $status;
        $this->date_creation = $date_creation;
        $this->category = $category;
        $this->price = $price;
        $this->stock = $stock;
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }
    public function getDescription(){
        return $this->description;
    }
    public function getImage(){
        return $this->image;
    }
    public function getStatus(){
        return $this->status;
    }
    public function getDateCreation(){
        return $this->date_creation;
    }
    public function getCategory(){
        return $this->category;
    }
    public function getPrice(){
        return $this->price;
    }
     public function getStock(){
        return $this->stock;
    }
   
}
