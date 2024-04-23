<?php

  if(empty($_POST)) {
    $globally->getView(PATH_VIEWS_ADMIN, 'admin_s_food');
  }

  $foodManager = new FoodManager();
  $data = $foodManager->getOne($db->getPdo(), $_POST['id']);

  $globally->getView(PATH_VIEWS_ADMIN, 'admin_u_food', $data);

