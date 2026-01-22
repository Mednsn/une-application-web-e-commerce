<?php
namespace App\Models\Entity;


class Category
{
    private ?int $id;
    private string $name;
    private string $description;

    public function __construct(string $name , string $description, ?int $id = null)
    {
        $this->name = $name;
        $this->description = $description;
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
       
}
