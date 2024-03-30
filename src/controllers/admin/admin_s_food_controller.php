<?php

$object = new CategoryManager();
$datas = $object->getAll($db->getPdo());

$globally->getView(PATH_VIEWS_ADMIN, 'manager', $datas);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $category = new CategoryManager();
  $category->deleteOne($db->getPdo(), $_POST['id']);

  $_SESSION['status'] = 'success';
  $_SESSION['message'] = 'Aliment supprimer';
}
