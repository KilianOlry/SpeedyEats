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

  public function getOne(PDO $pdo, int $id)
  {
    $getCategory = 'SELECT * FROM category WHERE id = :id';
    $statement = $pdo->prepare($getCategory);
    $statement->execute([
      'id' => $id
    ]);
    $data = $statement->fetch(PDO::FETCH_ASSOC);
    return $data;
  }

  public function updateOne(PDO $pdo, Category $data)
  {
    $updateCategory = 'UPDATE category SET name = :name, description = :description, image = :image WHERE id = :id';

    $statement = $pdo->prepare($updateCategory);
    $statement->execute([
      'id' => $data->getId(),
      'name' => $data->getName(),
      'description' => $data->getDescription(),
      'image' => $data->getImage(),
    ]);
  }
}
