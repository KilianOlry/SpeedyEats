<div class="login">
  <section class="container_login">
    <div class="background">
      <div class="content">
        <h2>StreetFood</h2>
        <p>Création de compte pour bien manger de façon régulière</p>
      </div>
      <div class="blur"></div>
    </div>
    <div class="container_form">
      <h1>Connexion</h1>
      <form action="" method="POST">
        <div class="input">
          <input type="email" placeholder="Email" name="email" class="email">
          <p class="message_email"></p>
        </div>

        <div class="input input_password relative">
          <input type="password" placeholder="Mot de passe" name="password" class="password">
          <i class="fa-solid fa-eye visibility"></i>
          <p class="message_password"></p>
          <input type="hidden" name="token" value="<?= $_SESSION['token'] ?? '' ?>">
        </div>

        <div class="input input_submit text-center">
          <button type="submit" class="submit">Valider</button>
        </div>
      </form>
    </div>
  </section>
</div>