<?php

class Product
{

  private int $id;
  private string $name;
  private string $description;
  private float $price;
  private float $buying_price;
  private int $category_id;

  public function __construct(array $props)
  {
    $this->hydrate($props);
  }

  public function hydrate($props)
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

  public function getDescription(): string
  {
    return $this->description;;
  }
  public function setDescription($description): void
  {
    $this->description = $description;
  }

  public function getPrice(): float
  {
    return $this->price;
  }
  public function setPrice($price): void
  {
    $this->price = $price;
  }

  public function getBuying_Price(): float
  {
    return $this->buying_price;
  }
  public function setBuying_Price($buying_price): void
  {
    $this->buying_price = $buying_price;
  }

  public function getCategory_Id(): int
  {
    return $this->category_id;
  }
  public function setCategory_Id($category_id): void
  {
    $this->category_id = $category_id;
  }
}
