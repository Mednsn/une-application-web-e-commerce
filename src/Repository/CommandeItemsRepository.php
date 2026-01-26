<?php

namespace App\Repository;

use App\Core\Database;
use App\Models\Entity\CommandItems;
use PDO;

class CommandeItemsRepository
{
    private PDO $pdo;

    public function __construct()
    {
        $db = new Database();
        $this->pdo = $db->getConnexion();
    }

    public function create(int $quantity , float $price , int $command_id , int $product_id):int
    {
        $sql = " INSERT INTO commande_items (quantity , price, commande_id , product_id)VALUES(?,?,?,?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$quantity, $price,$command_id,$product_id]);
        return $this->pdo->lastInsertId();
    }

    public function selectAll()
    {
        $sql = "SELECT * FROM commande_items ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, CommandItems::class);
        return $stmt->fetchAll();
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM commande_items WHERE id = ? ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
    }
}
