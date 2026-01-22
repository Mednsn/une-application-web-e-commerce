<?php

namespace App\Repository;

use App\Core\Database;
use App\Models\Entity\category;
use App\Models\Entity\User;
use App\Models\viewModel\Categories;
use PDO;

class CategoryRepository
{
    private PDO $pdo;

    public function __construct()
    {
        $db = new Database();
        $this->pdo = $db->getConnexion();
    }

    public function create(Category $category)
    {
        $sql = " INSERT INTO categories (name ,description )VALUES(?,?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$category->getName(), $category->getDescription()]);
    }

    public function selectAll()
    {
        $sql = "SELECT * FROM categories ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, Category::class);
        return $stmt->fetchAll();
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM categories WHERE id = ? ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
    }
}
