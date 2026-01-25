<?php

namespace App\Repository;

use App\Core\Database;
use App\Models\Entity\Panier;
use App\Models\Jointures\PaniersProduct;
use PDO;

class PanierRepository
{
    private PDO $pdo;

    public function __construct()
    {
        $db = new Database();
        $this->pdo = $db->getConnexion();
    }

    public function create(Panier $panier)
    {
        $sql = " INSERT INTO paniers (user_id ,product_id ,quantity)VALUES(?,?,?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$panier->getUser(), $panier->getProduct(),$panier->getQuantity()]);
    }

    public function selectAllPanierProducts(int $id) 
    {
        $sql = "SELECT name ,description,image ,status ,price ,p.id ,product_id ,quantity
        FROM paniers p
        INNER JOIN products pr ON p.product_id=pr.id
        WHERE p.user_id=?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, PaniersProduct::class);
        return $stmt->fetchAll();
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM paniers WHERE id = ? ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
    }

        public function deleteByUser(int $id)
    {
        $sql = "DELETE FROM paniers WHERE user_id = ? ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
    }
}
