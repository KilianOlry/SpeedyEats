<?php

  if(empty($_POST)) {
    $globally->redirect('admin_s_food');
  }

  $foodManager = new FoodManager();
  $data = $foodManager->getOne($db->getPdo(), $_POST['id']);
  
  $globally->getView(PATH_VIEWS_ADMIN, 'manager', $data);


  if ($_SERVER['REQUEST_METHOD'] === 'POST') {

      $formControll = new FormControll();
      $name = $formControll->validateInput($_POST['name']);
      $lipid = $formControll->validateInputNumber($_POST['lipid']);
      $glucid = $formControll->validateInputNumber($_POST['glucid']);
      $protein = $formControll->validateInputNumber($_POST['protein']);
      $weight = $formControll->validateInputNumber($_POST['weight']);
      
      $image = $formControll->imgVerify($_FILES['image']['name'], $_FILES['image']['tmp_name'], PATH_IMAGE_FOOD);
  
      if ($image !== false) {
        $food = new Food([
          'id' => $_POST['id'],
          'name' => $name,
          'lipid' => $lipid,
          'glucid' => $glucid,
          'protein' => $protein,
          'weight' => $weight,
          'image' => $image,
        ]);
  
        $foodManager->updateOne($db->getPdo(), $food);
  
        $_SESSION['status'] = 'success';
        $_SESSION['message'] = 'Aliment modifier avec succès';
      } else {
        $_SESSION['status'] = 'error';
        $_SESSION['message'] = 'Format d\'image incorrect';
      }
    }else{
      die('bonjour');
    }
