<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="<?= PATH_IMAGE ?>logo.webp" type="image/x-icon">
  <!-- FONTS -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
  <!-- FA -->
  <script src="https://kit.fontawesome.com/817262485e.js" crossorigin="anonymous"></script>
  <!-- CSS -->
  <link rel="stylesheet" href="<?= PATH_STYLE ?>styles.css">
  <!-- TOASTR -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet" defer />
  <!-- JQUERY -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

  <title><?= TITLE ?></title>
</head>

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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <script src="<?= PATH_JS ?>app.js"></script>

  <?php
  if ($route === 'login' || $route === 'register') {
    echo "<script src=" . PATH_JS . 'form.js' . "></script>";
  }
  ?>

  <script>
    <?php if (!empty($_SESSION['status'])) { ?>
      toastr.<?= $_SESSION['status'] ?>("<?= $_SESSION['message'] ?>")
    <?php }
    unset($_SESSION['status']);
    unset($_SESSION['message']); ?>
  </script>
</body>

</html>