<?php
if (empty($_SESSION['user']) && $_SESSION['user']['role'] !== 'ADMIN') {
  $globally->redirect('homepage');
}
require PATH_VIEWS_ADMIN . 'create_category' . '.php';
$formControll = new FormControll();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (!empty($_POST['name']) && !empty($_POST['description'])) {

    $name = $formControll->validateInput($_POST['name']);
    $description = $formControll->validateInput($_POST['description']);
    $checkImage = $formControll->imgVerify($_FILES['image']['name'], $_FILES['image']['tmp_name'], PATH_IMAGE_CATEGORY);

    if ($checkImage !== false) {
      
      $category = new Category([
        'name' => $name,
        'description' => $description,
        'image' => $checkImage,
      ]);
      
      $categoryManager = new CategoryManager();
      $categoryManager->setOne($category, $db->getPdo());
      
      $_SESSION['status'] = 'success';
      $_SESSION['message'] = 'Catégorie crée avec succèss';
    } else {
      $_SESSION['status'] = 'error';
      $_SESSION['message'] = 'Les fichier acceptés sont les suivants : jpeg/jpg/png/webp';
    }
  } else {
    $_SESSION['status'] = 'error';
    $_SESSION['message'] = 'Veuillez remplir les champs Nom et Description';
  }
}
