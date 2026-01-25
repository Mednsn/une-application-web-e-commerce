<?php

namespace App\Models\Jointures;

class Products
{
    public int $id;
    public string $name;
    public string $description;
    public string $image;
    public string $status;
    public string $date_creation;
    public int $category_id;
    public float $price;
    public int $stock;
    public string $category_name;
    public string $category_description;


}