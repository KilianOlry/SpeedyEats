<?php

$productManager = new ProductManager();
$products = $productManager->getOne($_GET['category'], $db->getPdo());
var_dump($products);

require PATH_VIEWS . 'products.php';
