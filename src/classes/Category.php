<?php

class Category
{
  private int $id;
  private string $name;
  private string $description;
  private string $image;
  private string $createdAt;

  public function __construct(array $props)
  {
    $this->hydrate($props);
  }

  public function hydrate(array $props)
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
  public function setname($name): void
  {
    $this->name = $name;
  }

  public function getDescription(): string
  {
    return $this->description;
  }
  public function setDescription($description): void
  {
    $this->description = $description;
  }

  public function getImage(): string
  {
    return $this->image;
  }
  public function setImage($image): void
  {
    $this->image = $image;
  }
  public function getCreatedAt(): string
  {
    return $this->createdAt;
  }
  public function setCreatedAt($createdAt): void
  {
    $this->createdAt = $createdAt;
  }
}
