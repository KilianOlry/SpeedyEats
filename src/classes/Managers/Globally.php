<?php

class Globally{
  
  public function getView(string $path, string $fileName, array $datas = null): string
  {
    return require $path . $fileName . '.php';
  }
  public function redirect(string $page): void
  {
    header('Location: ?page=' . $page);
  }
}