<?php
namespace App\Models\Jointures;

class Users
{
    public int $id;
    public string $name;
    public string $email;
    public string $password;
    public string $date_creation;
    public int $is_active;
    public int $role_id;
    public string $role;
}