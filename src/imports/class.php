<?php
  spl_autoload_register(function ($classe) {
    require_once './src/classes/' . $classe . '.php';
  });
?>