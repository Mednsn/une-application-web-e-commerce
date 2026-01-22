<?php
namespace App\Models\Entity;

USE DateTime;
USE App\Models\Entity\Role;


class User
{
    private ?int $id;
    private string $name;
    private string $email;
    private string $password;
    private ?DateTime $date_creation;
    private Role $role;

    public function __construct(string $name , string $email , string $password , Role $role, ?DateTime $date_creation, ?int $id = null)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->date_creation = $date_creation;
        $this->role = $role;
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPassword(){
        return $this->password;
    }
    public function getRole(){
        return $this->role;
    }
    public function getDateCreation(){
        return $this->date_creation;
    }
   
}
