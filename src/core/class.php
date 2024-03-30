<?php

spl_autoload_register(function ($classe) {
  require_once PATH_CLASS . $classe . '.php';
});

require_once PATH_CLASS_MANAGER . 'Globally' . '.php';
require_once PATH_CLASS_MANAGER . 'UserManager' . '.php';
require_once PATH_CLASS_MANAGER . 'FormControll' . '.php';
require_once PATH_CLASS_MANAGER . 'Granted' . '.php';
require_once PATH_CLASS_MANAGER . 'MessageManager' . '.php';
require_once PATH_CLASS_MANAGER . 'CategoryManager' . '.php';
require_once PATH_CLASS_MANAGER . 'FoodManager' . '.php';

$globally = new Globally();
