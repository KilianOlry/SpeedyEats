<div class="app-container">

  <?php require PATH_VIEWS_ADMIN_GLOBAL . 'sidebar' . '.php'; ?>

  <div class="app-content">
    <?php require PATH_VIEWS_ADMIN . $_GET['page'] . '.php'; ?>
  </div>
</div>