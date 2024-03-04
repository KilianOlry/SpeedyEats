<?php

$availablesRoutes = ['homepage', 'login'];
$route = 'homepage';

if (isset($_GET['page']) && in_array($_GET['page'], $availablesRoutes)) 
{
  $route = $_GET['page'];
}

require './public/views/global/layout.php';