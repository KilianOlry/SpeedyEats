<?php

class Message
{
  private int $id;
  private string $object;
  private string $content;
  private string $createdAt;
  private int $idUser;

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

  public function getObject(): string
  {
    return $this->object;
  }
  public function setObject($object): void
  {
    $this->object = $object;
  }

  public function getContent(): string
  {
    return $this->content;
  }
  public function setContent($content): void
  {
    $this->content = $content;
  }

  public function getCreatedAt(): string
  {
    return $this->createdAt;
  }
  public function setCreatedAt($createdAt): void
  {
    $this->createdAt = $createdAt;
  }

  public function getIdUser(): int
  {
    return $this->idUser;
  }
  public function setIdUser($idUser): void
  {
    $this->idUser = $idUser;
  }
}
