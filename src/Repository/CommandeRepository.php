<?php

namespace App\Repository;

use App\Core\Database;
use App\Models\Entity\Commande;
use App\Models\Entity\User;
use App\Models\viewModel\Commandes;
use PDO;

class CommandeRepository
{
    private PDO $pdo;

    public function __construct()
    {
        $db = new Database();
        $this->pdo = $db->getConnexion();
    }

    public function create(Commande $command)
    {
        $sql = " INSERT INTO commandes (name , total_price , status , user_id)VALUES(?,?,?,?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$command->getName(), $command->getTotalPrice(), $command->getStatus(), $command->getUser()->getId()]);
    }

    public function selectAll()
    {
        $sql = "SELECT * FROM commandes ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, Commande::class);
        return $stmt->fetchAll();
    }

    public function update(int $id, Commande $command)
    {
        $sql = "UPDATE commandes 
                SET  name = :name,
                     total_price = :t_price,
                     status = :status
                WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id,'name'=>$command->getName(),'t_price'=>$command->getTotalPrice(),'status'=>$command->getStatus()]);
    }
    public function delete(int $id)
    {
        $sql = "DELETE FROM commandes WHERE id = ? ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
    }
}
