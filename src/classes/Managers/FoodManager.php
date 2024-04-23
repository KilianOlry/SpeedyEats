<?php

class FoodManager
{

  public function setOne(Food $data, PDO $pdo): void
  {
    $insertFood = 'INSERT INTO foods (name, lipid, glucid, protein, weight, image) VALUES (:name, :lipid, :glucid, :protein, :weight, :image)';
    $statement = $pdo->prepare($insertFood);
    $statement->execute([
      'name' => $data->getName(),
      'lipid' => $data->getLipid(),
      'glucid' => $data->getGlucid(),
      'protein' => $data->getProtein(),
      'weight' => $data->getWeigth(),
      'image' => $data->getImage()
    ]);
  }

  public function getAll(PDO $pdo): array
  {
    $getFoods = 'SELECT * FROM foods';
    $statement = $pdo->query($getFoods);

    return $statement->fetchAll(PDO::FETCH_ASSOC);
  }

  public function getOne(PDO $pdo, int $id)
  {
    $getFood = 'SELECT * FROM foods WHERE id = :id';
    $statement = $pdo->prepare($getFood);
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

  public function deleteOne(PDO $pdo, $id)
  {
    $statement = $pdo->prepare('DELETE FROM category WHERE id = :id');
    $statement->execute([
      'id' => $id,
    ]);
    return true;
  }
}
