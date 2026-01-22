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

    public function create(Role $role)
    {
        $sql = " INSERT INTO roles (name )VALUES(?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$role->getName()]);
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
