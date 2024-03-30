<?php

$availablesRoutes = ['homepage', 'login', 'register', 'logout', 'message'];
$route = 'homepage';

if (isset($_GET['page']) && in_array($_GET['page'], $availablesRoutes)) {
  $route = $_GET['page'];
}

if (!empty($_SESSION['user']) && $_SESSION['user']['role'] === 'ADMIN') {
  $availablesAdminRoutes = ['admin_c_category', 'admin_manager', 'admin_s_food', 'admin_s_category', 'admin_u_category'];

  if (isset($_GET['page']) && in_array($_GET['page'],$availablesAdminRoutes)) {
      $route = $_GET['page'];
  }
}
