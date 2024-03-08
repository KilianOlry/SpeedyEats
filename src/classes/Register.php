<?php

class Register
{

  public function getView(string $nameFile): string
  {
    return require PATH_VIEWS_AUTH . $nameFile;
  }

}
