<?php

namespace App\Repository;

use App\Core\Database;
use App\Models\Entity\Role;
use PDO;

class RoleRepository
{
    private PDO $pdo;

    public function __construct()
    {
        $db = new Database();
        $this->pdo = $db->getConnexion();
    }

    public function create(Role $role):int
    {
        $sql = " INSERT INTO roles (name )VALUES(?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$role->getName()]);
        return $this->pdo->lastInsertId();
    }

    public function selectRole($name)
    {
        $sql = "SELECT * FROM roles WHERE name = ? LIMIT 1 ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$name]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, Role::class);
        $row = $stmt->fetch();
        if(!$row){
            return null;
        }else{
            return $row;
        }

    }
    public function selectAll()
    {
        $sql = "SELECT * FROM roles ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, Role::class);
        return $stmt->fetchAll();
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM roles WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
    }
}
