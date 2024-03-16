<!DOCTYPE html>
<html lang="fr">

<?php require PATH_BASE . 'head.php' ?>

<body>
  <?php
  require PATH_VIEWS_GLOBAL . 'header.php';
  ?>

  <main>
    <?php
    if (str_starts_with($route, 'admin')) {
      require PATH_CONTROLLER_ADMIN . $route . '_controller.php';
    } else {
      require PATH_CONTROLLER . $route . '_controller.php';
    }
    ?>
  </main>

  <?php require PATH_BASE . 'script.php' ?>

</body>

</html>