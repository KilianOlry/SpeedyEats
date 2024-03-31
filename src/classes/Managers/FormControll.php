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

  public function validateInputNumber(int $inputValue)
  {
      if (is_numeric($inputValue)) {
          return $inputValue;
      } else {
          return false;
      }
  }

  public function passHash(string $password): string
  {
    $passHash = password_hash($password, PASSWORD_DEFAULT);
    return $passHash;
  }

  public function emailVerify(string $email): string
  {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
      return $email;
    } else {
      throw new Exception('Le champ ne peut pas être vide.');
    }
  }

  public function imgVerify(string $imageName, string $tmpName, string $pathImage): mixed
  {

    $allowedExtensions = array('webp', 'jpeg', 'jpg', 'png');
    $imgExtension = strtolower(pathinfo($imageName, PATHINFO_EXTENSION));

    if (in_array($imgExtension, $allowedExtensions)) {

      $time = time();
      $finalName = $time . $imageName;

      $move = move_uploaded_file($tmpName, $pathImage . $finalName);
      return $finalName;
    } else {
      return false;
    }
  }
}
