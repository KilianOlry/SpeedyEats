<?php

  $object = new CategoryManager();
  $datas = $object->getAll($db->getPdo());

  $globally->getView(PATH_VIEWS_ADMIN, 'manager', $datas);
