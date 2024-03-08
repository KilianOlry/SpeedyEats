<?php

  class UserManager{

    public function setOne(User $data, PDO $pdo): int
    {
      $insertUser = 'INSERT INTO users (name, email, password) VALUES (:name, :email, :password)';
      $query =  $pdo->prepare($insertUser);
      $query->execute([
        'name' => $data->getName(),
        'email' => $data->getEmail(),
        'password' => $data->getPassword(),
      ]
      );
      $data->setId($pdo->lastInsertId());
      return $pdo->lastInsertId();
    }
  }