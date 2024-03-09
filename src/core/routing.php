<?php

$availablesRoutes = ['homepage', 'login', 'register', 'logout'];
$route = 'homepage';

if (isset($_GET['page']) && in_array($_GET['page'], $availablesRoutes)) {
  $route = $_GET['page'];
}
