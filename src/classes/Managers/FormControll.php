<?php

class FormControll
{

  public function validateInput(string $inputValue): string
  {
    $cleanValue = htmlspecialchars($inputValue);
    if (empty($cleanValue)) {
      throw new Exception('Le champ ne peut pas être vide.');
    }
    return $cleanValue;
  }

  public function passHash(string $password): string
  {
    $passHash = password_hash($password, PASSWORD_DEFAULT);
    return $passHash;
  }

  public function emailVerify(string $email): string 
  {
    if(filter_var($email, FILTER_VALIDATE_EMAIL))
    {
      return $email;
    }else{
      throw new Exception('Le champ ne peut pas être vide.');
    }
}
}
