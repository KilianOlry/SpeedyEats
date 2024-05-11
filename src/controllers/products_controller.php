<?php

$productManager = new ProductManager();
$products = $productManager->getOne($_GET['category'], $db->getPdo());

require PATH_VIEWS . 'products.php';
