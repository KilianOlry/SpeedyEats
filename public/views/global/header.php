<header class="container">
  <nav class="nav">

    <a href="<?= PATH_LINK_PAGE . 'homepage' ?>" class="link-logo">
      <img class="img" src="<?= PATH_IMAGE ?>logo.webp" alt="logo du site web"><br>
      <h2><span>Street</span>Food</h2>
    </a>
    <ul class="menu" id="ID_menu">

      <?php if (empty($_SESSION['user'])) {
        echo $header->notLog();
      } elseif ($_SESSION['user']['role'] === 'ADMIN') {
        echo $header->isGranted();
      } elseif ($_SESSION['user']['role'] === 'USER') {
        echo $header->isLog();
      }
      ?>

      <li>
        <a href="<?= PATH_LINK_PAGE . 'cart' ?>" class="cart relative">
          <i class="fa-solid fa-cart-shopping"></i>
          <span class="quantity" id="quantity">
          </span>
        </a>
      </li>
    </ul>

    <button class="toggle_btn" id="ID_toggle">
      <span class="bar bar_1"></span>
      <span class="bar bar_2"></span>
      <span class="bar bar_3"></span>
    </button>
  </nav>
</header>