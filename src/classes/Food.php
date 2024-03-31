<?php

class Food
{

  private int $id;
  private string $name;
  private float $lipid;
  private float $glucid;
  private float $protein;
  private float $weight;
  private string $image;

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
  public function setName($name): void
  {
    $this->name = $name;
  }

  public function getLipid(): float
  {
    return $this->lipid;
  }
  public function setLipid($lipid): void
  {
    $this->lipid = $lipid;
  }

  public function getGlucid(): float
  {
    return $this->glucid;
  }
  public function setGlucid($glucid): void
  {
    $this->glucid = $glucid;
  }
  public function getProtein(): float
  {
    return $this->protein;
  }
  public function setProtein($protein): void
  {
    $this->protein = $protein;
  }

  public function getWeigth(): float
  {
    return $this->weight;
  }
  public function setWeigth($weight): void
  {
    $this->weight = $weight;
  }

  public function getImage(): string
  {
    return $this->image;
  }
  public function setImage($image): void
  {
    $this->image = $image;
  }
}
