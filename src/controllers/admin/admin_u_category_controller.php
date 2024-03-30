<?php

if (empty($_POST)) {
  $globally->redirect('admin_s_category');
}

$categoryManager = new CategoryManager();
$data = $categoryManager->getOne($db->getPdo(), $_POST['id']);
$globally->getView(PATH_VIEWS_ADMIN, 'manager', $data);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
  if (!empty($_POST['name']) || !empty($_POST['description']) || !empty($_FILES['image']['name'])) {
    $formControll = new FormControll();
    $name = $formControll->validateInput($_POST['name']);
    $description = $formControll->validateInput($_POST['description']);
    
    $image = $formControll->imgVerify($_FILES['image']['name'], $_FILES['image']['tmp_name'], PATH_IMAGE_CATEGORY);

    if ($image !== false) {
      $category = new Category([
        'id' => $_POST['id'],
        'name' => $name,
        'description' => $description,
        'image' => $image,
      ]);

      $categoryManager = new CategoryManager;
      $categoryManager->updateOne($db->getPdo(), $category);

      $_SESSION['status'] = 'success';
      $_SESSION['message'] = 'Catégorie modifier avec succès';
    } else {
      $_SESSION['status'] = 'error';
      $_SESSION['message'] = 'Format d\'image incorrect';
    }
  }
}
