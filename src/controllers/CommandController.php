<?php

namespace App\Controllers;

use App\Repository\CommandeRepository;
use App\Repository\PanierRepository;
use App\Repository\CommandeItemsRepository;
use App\Models\Entity\Commande;

class CommandController
{
    private CommandeRepository $commande_repository;
    private PanierRepository $panier_repository;
    private CommandeItemsRepository $commande_items_repository;
    public function __construct()
    {
        $this->commande_repository = new CommandeRepository();
        $this->panier_repository = new PanierRepository();
        $this->commande_items_repository = new CommandeItemsRepository();
    }
    public function create()
    {
        $row = $this->panier_repository->selectAllPanierProducts($_SESSION['user_id']);
        if (!$row) {
            header('location: /panier');
        }

        $command = new Commande();
        $command->setTotal_price($_POST['totals']);
        $command->setUser($_SESSION['user_id']);
        $command->setStatus("En Attents");
        $commande_id = $this->commande_repository->create($command);
        foreach ($row as $element) {

            $this->commande_items_repository->create($element->quantity, $element->price,$commande_id , $element->product_id);
        }
            $this->panier_repository->deleteByUser($_SESSION['user_id']);
            header('location: /home');
       
    }
    public function selectCommandById($id)
    {
        return $this->commande_repository->selectCommandById($id);
    }
    public function selectCommandByUser($id)
    {
        return $this->commande_repository->selectCommandByUser($id);
    }
    public function selectCommandWithUser()
    {
        return $this->commande_repository->selectCommandWithUser();
    }

}
