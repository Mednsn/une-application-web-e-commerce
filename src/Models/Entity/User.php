<?php
namespace App\Models\Entity;

class User
{
    private ?int $id;
    private string $name;
    private string $email;
    private string $password;
    private string $date_creation;
    private bool $is_active;
    private int $role_id;


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
        return $this->role_id;
    }
    public function setRole($role){

        return $this->role_id = $role;
    }
    public function getDateCreation(){
        return $this->date_creation;
    }
      
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    public function setDate_creation($date_creation)
    {
        $this->date_creation = $date_creation;

        return $this;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }


    public function getIs_active()
    {
        return $this->is_active;
    }

    public function setIs_active($is_active)
    {
        $this->is_active = $is_active;

        return $this;
    }
}
