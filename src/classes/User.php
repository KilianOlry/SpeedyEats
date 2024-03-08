<?php

class User
{
  private int $id;
  private string $name;
  private string $email;
  private string $password;

  public function __construct(array $props)
  {
    $this->hydrate($props);
  }

  public function hydrate(array $props): void
  {
    if (is_array($props) && count($props)) {
      foreach ($props as $key => $value) {
        $method = 'set' . ucfirst($key);
        if (method_exists($this, $method)) {
          $this->$method($value);
        }
      }
    }
  }

  public function getId(): int
  {
    return $this->id;
  }
  public function setId($id): void
  {
    $this->id = $id;
  }
  public function getName(): string
  {
    return $this->name;
  }
  public function setName($name): void
  {
    $this->name = $name;
  }
  public function getEmail(): string
  {
    return $this->email;
  }
  public function setEmail($email): void
  {
    $this->email = $email;
  }
  public function getPassword(): string
  {
    return $this->password;
  }
  public function setPassword($password): void
  {
    $this->password = $password;
  }
}
