<?php

namespace App\Models\Entity;

use App\Models\Entity\Category;


class Product
{
    private ?int $id;
    private string $name;
    private string $description;
    private string $image;
    private string $status;
    private string $date_creation;
    private int $category_id;
    private float $price;
    private int $stock;


    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function getImage()
    {
        return $this->image;
    }
    public function getStatus()
    {
        return $this->status;
    }
    public function getDateCreation()
    {
        return $this->date_creation;
    }
    public function getCategory_id()
    {
        return $this->category_id;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function getStock()
    {
        return $this->stock;
    }


    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    public function setDate_creation($date_creation)
    {
        $this->date_creation = $date_creation;

        return $this;
    }

    public function setCategory_id($category_id)
    {
        $this->category_id = $category_id;

        return $this;
    }

    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }


    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }
}
