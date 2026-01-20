<?php
namespace App\Models\Entity;

class User
{
    private ?int $id;
    private string $name;
    private string $email;
    private string $password;
    private string $role;

    public function __construct(string $name , string $email , string $password , string $role, ?int $id = null)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
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
}
