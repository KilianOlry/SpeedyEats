<?php

session_start();
require './src/core/imports.php';

require PATH_CORE . 'routing.php';
require PATH_IMPORTS . 'class.php';

$db = new DbConnect('localhost', 'speedy-eats', 'root', '');
$db->getPdo();
$header = new Granted();

require  PATH_VIEWS_GLOBAL . 'layout.php';