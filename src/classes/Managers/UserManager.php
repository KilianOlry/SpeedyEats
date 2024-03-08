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

    public function getByMail(string $email, PDO $pdo): array
    {
      $selectByEmail = 'SELECT * FROM users WHERE email = :email';
      $query = $pdo->prepare($selectByEmail);
      $query->execute([
        'email' => $email,
      ]);
      $data = $query->fetchAll();
      return $data;
    } 
  }