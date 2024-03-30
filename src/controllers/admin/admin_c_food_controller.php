<?php
if (empty($_SESSION['user']) && $_SESSION['user']['role'] !== 'ADMIN') {
  $globally->redirect('homepage');
}
require PATH_VIEWS_ADMIN . 'create_food' . '.php';
$formControll = new FormControll();

if($_SERVER['REQUEST_METHOD'] === 'POST') {
  
}
