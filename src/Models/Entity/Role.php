<?php
namespace App\Models\Entity;


class Role
{
    private ?int $id;
    private string $name;

    
    public function getId(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }
    public function setId($id){
         $this->id = $id;
         return $this;
    }
    public function setName($name){
         $this->name = $name;
         return $this;
    }
    
}
