<?php

namespace App\Repository;

use App\Core\Database;
use App\Models\Entity\Product;
use App\Models\viewModel\Products;
use PDO;

class ProductRepository
{
    private PDO $pdo;

    public function __construct()
    {
        $db = new Database();
        $this->pdo = $db->getConnexion();
    }

    public function create(Product $product)
    {
        $sql = " INSERT INTO products (name , description , image , status ,category , price , stock)VALUES(?,?,?,?,?,?,?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$product->getName(), $product->getDescription(), $product->getImage(), $product->getStatus(), $product->getCategory()->getId(), $product->getPrice(), $product->getStock()]);
    }

    public function selectAll()
    {
        $sql = "SELECT * FROM products ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, products::class);
        return $stmt->fetchAll();
    }

    public function update(int $id, string $role)
    {
        $sql = "UPDATE products 
                SET  role = ?
                WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$role, $id]);
    }
    public function delete(int $id)
    {
        $sql = "DELETE FROM products WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
    }
}
