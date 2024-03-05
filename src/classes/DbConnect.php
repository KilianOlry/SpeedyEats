<?php

class DbConnect
{

  private $pdo;

  public function __construct(
    protected string $dbHost,
    protected string $dbName,
    protected string $dbUser,
    protected string $dbPassword,
  ) {
  }

  public function getPdo()
  {

    if ($this->pdo === null) {
      $this->pdo = new PDO('mysql:host=' . $this->dbHost . ';dbname=' . $this->dbName . ';charset=utf8', $this->dbUser, $this->dbPassword);
    }
    return $this->pdo;
  }
}
