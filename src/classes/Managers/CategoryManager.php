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
}
