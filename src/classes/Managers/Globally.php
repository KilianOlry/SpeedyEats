<?php

class Globally{
  
  public function getView(string $path, string $fileName): string
  {
    return require $path . $fileName . '.php';
  }
  public function redirect(string $page): void
  {
    header('Location: ?page=' . $page);
  }
}