<?php
namespace App\Models\Entity;

USE DateTime;


class Role
{
    private ?int $id;
    private string $name;

    public function __construct(string $name , ?int $id = null)
    {
        $this->name = $name;
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }
    
}
