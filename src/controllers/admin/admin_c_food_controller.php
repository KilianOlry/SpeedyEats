<?php
if (empty($_SESSION['user']) && $_SESSION['user']['role'] !== 'ADMIN') {
  $globally->redirect('homepage');
}
require PATH_VIEWS_ADMIN . 'create_food' . '.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $formControll = new FormControll();

  if (!empty($_POST['name']) && !empty($_POST['lipid']) && !empty($_POST['glucid']) && !empty($_POST['protein']) && !empty($_POST['weight'])) {

    $name = $formControll->validateInput($_POST['name']);
    $lipid = $formControll->validateInputNumber($_POST['lipid']);
    $glucid = $formControll->validateInputNumber($_POST['glucid']);
    $protein = $formControll->validateInputNumber($_POST['protein']);
    $weight = $formControll->validateInputNumber($_POST['weight']);

    $checkImage = $formControll->imgVerify($_FILES['image']['name'], $_FILES['image']['tmp_name'], PATH_IMAGE_FOOD);

    if ($checkImage !== false) {

      $food = new Food([
        'name' => $name,
        'lipid' => $lipid,
        'glucid' => $glucid,
        'protein' => $protein,
        'weight' => $weight,
        'image' => $checkImage
      ]);

      $foodManager = new FoodManager();
      $foodManager->setOne($food, $db->getPdo());

      $_SESSION['status'] = 'success';
      $_SESSION['message'] = 'Aliment crée avec succès';
    }else{
      $_SESSION['status'] = 'error';
      $_SESSION['message'] = 'Erreur lors de l\'insertion des données';
    }
  }
}
