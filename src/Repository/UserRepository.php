<?php

namespace App\Repository;

use App\Core\Database;
use App\Models\Entity\User;
use App\Models\viewModel\Users;
use PDO;

class UserRepository
{
    private PDO $pdo;

    public function __construct()
    {
        $db = new Database();
        $this->pdo = $db->getConnexion();
    }

    public function create(User $user)
    {
        $sql = " INSERT INTO users (name , email , password , role)VALUES(?,?,?,?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$user->getName(), $user->getEmail(), $user->getPassword(), $user->getRole()->getId()]);
    }

    public function selectUserByEmail(string $email)
    {
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$email]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, Users::class);
        return $stmt->fetch();
    }
        public function selectAll()
        {
            $sql = "SELECT * FROM users ";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_CLASS, Users::class);
            return $stmt->fetchAll();
        }

    public function update(int $id, string $role) {
        $sql = "UPDATE users 
                SET  role = ?
                WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$role,$id]);
    }
    public function delete(int $id)
    {
        $sql = "DELETE FROM users WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
    }

}
