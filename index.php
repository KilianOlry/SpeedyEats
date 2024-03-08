<?php

require './src/imports/imports.php';

require PATH_CORE . 'routing.php';
require PATH_IMPORTS . 'class.php';

$db = new DbConnect('localhost', 'speedy-eats', 'root', '');
$db->getPdo();

require  PATH_VIEWS_GLOBAL . 'layout.php';