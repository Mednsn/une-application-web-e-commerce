<?php
namespace App\Models\Entity;


class CommandItems
{
    private ?int $id;
    private float $price;
    private int $quantity;
    private int $commande_id;
    private int $product_id;

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getPrice()
    {
        return $this->price;
    }
    public function setPrice($price)
    {
        $this->price = $price;

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

    public function getCommande_id()
    {
        return $this->commande_id;
    }
    public function setCommande_id($commande_id)
    {
        $this->commande_id = $commande_id;

        return $this;
    }

    public function getProduct_id()
    {
        return $this->product_id;
    }
    public function setProduct_id($product_id)
    {
        $this->product_id = $product_id;

        return $this;
    }
}