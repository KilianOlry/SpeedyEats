<?php

class CategoryManager
{

  public function setOne(Category $data, PDO $pdo): void
  {
    $insertCategory = 'INSERT INTO category (name, description, image) VALUES (:name, :description, :image)';
    $statement = $pdo->prepare($insertCategory);
    $statement->execute([
      'name' => $data->getName(),
      'description' => $data->getDescription(),
      'image' => $data->getImage()
    ]);
  }

  public function getAll(PDO $pdo): array
  {
    $getCategorys = 'SELECT * FROM category';
    $statement = $pdo->query($getCategorys);

    return $statement->fetchAll(PDO::FETCH_ASSOC);
  }
}
