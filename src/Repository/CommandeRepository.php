<?php

namespace App\Repository;

use App\Core\Database;
use App\Models\Entity\Commande;
use App\Models\Entity\User;
use App\Models\Jointures\CommandClient;
use App\Models\Jointures\CommandProduct;
use PDO;

class CommandeRepository
{
    private PDO $pdo;

    public function __construct()
    {
        $db = new Database();
        $this->pdo = $db->getConnexion();
    }

    public function create(Commande $command):int
    {
        $sql = " INSERT INTO commandes (total_price , status , user_id)VALUES(?,?,?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$command->getTotalPrice(), $command->getStatus(), $command->getUser()]);
        return $this->pdo->lastInsertId();
    }

    public function selectCommandById(int $id)
    {
        $sql = "SELECT c.id,c.date_creation,c.status,p.name,p.description,p.image,p.price,ci.quantity,floor(ci.quantity*p.price) AS total
        FROM commandes c
        INNER JOIN commande_items ci ON c.id = ci.commande_id
        INNER JOIN products p ON ci.product_id = p.id 
         WHERE c.user_id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, CommandProduct::class);
        return $stmt->fetchAll();
    }
    public function selectCommandByUser(int $id)
    {
        $sql = "SELECT *
        FROM commandes 
         WHERE user_id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, Commande::class);
        return $stmt->fetchAll();
    }
    public function selectCommandWithUser()
    {
        $sql = "SELECT c.*,u.name
        FROM commandes c
        INNER JOIN users u ON u.id = c.user_id 
        ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, CommandClient::class);
        return $stmt->fetchAll();
    }
    public function selectAll()
    {
        $sql = "SELECT *
        FROM commandes";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, Commande::class);
        return $stmt->fetchAll();
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM commandes WHERE id = ? ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
    }
}
