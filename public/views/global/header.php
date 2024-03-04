<header class="container">
  <nav class="nav">

    <a href="?page=homepage" class="link-logo">
      <img class="img" src="./public/assets/images/logo.webp" alt="logo du site web"><br>
      <h2><span>Street</span>Food</h2>
    </a>
    <ul class="menu" id="ID_menu">
      <li class="link dropdown">
        <a href="?page=login" class="nav-item">Connexion</a>
      </li>
      <li class="link dropdown">
        <a href="?page=register" class="nav-item">Inscription</a>
      </li>
      <li class="link dropdown">
        <a href="" class="nav-item">Administateur</a>
        <div class="dropdown-content">
          <a href="?page=dashboard-category" class="dropdown-item">Panneau Admin</a>
          <a href="?page=logout">Déconnexion</a>
        </div>
      </li>
      <li class="link dropdown">
        <a href="" class="nav-item">Espace Personnel</a>
        <div class="dropdown-content">
          <a href="?page=order" class="dropdown-item">Mes commandes</a>
          <a href="?page=logout" class="dropdown-item">Déconnexion</a>
        </div>
      </li>
      <li class="link dropdown">
        <a href="?page=message" class="nav-item">Contactez-nous</a>
      </li>
      <li>
        <a href="?page=cart" class="cart relative">
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