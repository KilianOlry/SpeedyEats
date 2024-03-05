<?php

$availablesRoutes = ['homepage', 'login', 'register',];
$route = 'homepage';

if (isset($_GET['page']) && in_array($_GET['page'], $availablesRoutes)) 
{
  $route = $_GET['page'];
}

require './src/imports/imports.php';
require './public/views/global/layout.php';