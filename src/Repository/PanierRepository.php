<?php

namespace App\Repository;

use App\Core\Database;
use App\Models\Entity\Panier;
use App\Models\Entity\User;
use App\Models\viewModel\Paniers;
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
        $sql = " INSERT INTO paniers (user_id ,product_id )VALUES(?,?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$panier->getUser()->getId(), $panier->getProduct()->getId()]);
    }

    public function selectAll()
    {
        $sql = "SELECT * FROM paniers ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, Paniers::class);
        return $stmt->fetchAll();
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM paniers WHERE id = ? ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
    }
}
