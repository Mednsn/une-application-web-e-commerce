<?php

namespace App\Repository;

use App\Core\Database;
use App\Models\Entity\User;
use App\Models\Jointures\Users;
use App\Repository\RoleRepository;
use PDO;

class UserRepository
{
    private PDO $pdo;

    public function __construct()
    {
        $db = new Database();
        $this->pdo = $db->getConnexion();
    }

    public function create(User $user):int
    {    
        $sql = " INSERT INTO users (name , email , password , role_id)VALUES(?,?,?,?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$user->getName(), $user->getEmail(), $user->getPassword(),$user->getRole()]);
        return  $this->pdo->lastInsertId(); 
    }

    public function selectUserByEmail(string $email)
    {
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$email]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, User::class);
        return $stmt->fetch();
    }
    public function selectAll()
    {
        $sql = "SELECT u.* ,r.name AS role
        FROM users u
        INNER JOIN roles r ON u.role_id=r.id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, Users::class);
        return $stmt->fetchAll();
    }
     public function selectInfosUserById(int $id)
    {
        $sql = "SELECT u.* ,r.name AS role
        FROM users u
        INNER JOIN roles r ON u.role_id=r.id
        WHERE u.id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, Users::class);
        return $stmt->fetch();
    }

    public function update(int $id,  $role)
    {
        $sql = "UPDATE users 
                SET  role_id = ?
                WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$role, $id]);
    }
    public function delete(int $id)
    {
        $sql = "DELETE FROM users WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
    }
}
