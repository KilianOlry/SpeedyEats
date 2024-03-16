<?php

  $category = new CategoryManager();

  $categorys = $category->getAll($db->getPdo());

  $globally->getView(PATH_VIEWS, 'homepage', $categorys);

