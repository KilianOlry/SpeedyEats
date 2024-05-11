<?php

  class ProductManager {

    public function getAll(PDO $pdo): array{
      
      $queryGetAll = 'SELECT * FROM products INNER JOIN category ON category.id = products=category_id';
      $statement = $pdo->query($queryGetAll);
      return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getOne(int $category_id, PDO $pdo): array {
      $queryGetAll = 'SELECT p.*, c.name as category_name FROM products AS p 
                      INNER JOIN category AS c ON c.id = p.category_id 
                      WHERE p.category_id = :category_id';
      
      $statement = $pdo->prepare($queryGetAll);
      $statement->execute([
          ':category_id' => $category_id,
      ]);
      
      return $statement->fetchAll(PDO::FETCH_ASSOC);
  }
}