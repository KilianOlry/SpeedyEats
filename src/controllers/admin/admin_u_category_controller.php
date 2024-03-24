<?php

if (empty($_POST)) {
  $globally->redirect('admin_s_category');
} else {
  $category = new CategoryManager();
  $data = $category->getOne($db->getPdo(), $_POST['id']);
  $globally->getView(PATH_VIEWS_ADMIN, 'manager', $data);
}
