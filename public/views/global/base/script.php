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