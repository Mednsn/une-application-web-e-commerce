<?php

namespace App\Repository;

use App\Core\Database;
use App\Models\Entity\PanierIteme;
use PDO;

class PanierItemsRepository
{
    private PDO $pdo;

    public function __construct()
    {
        $db = new Database();
        $this->pdo = $db->getConnexion();
    }

    public function create(PanierIteme $panierIteme)
    {
        $sql = " INSERT INTO paniers_items (quatity ,panier_id )VALUES(?,?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$panierIteme->getQuantity(), $panierIteme->getPanier()->getId()]);
    }

    public function selectAll()
    {
        // $sql = "SELECT * FROM paniers_items ";
        // $stmt = $this->pdo->prepare($sql);
        // $stmt->execute();
        // $stmt->setFetchMode(PDO::FETCH_CLASS, Paniers::class);
        // return $stmt->fetchAll();
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM paniers_items WHERE id = ? ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
    }
}
