<div class="login">
  <section class="container__login">
    <div class="container__left">
      <div class="content">
        <h2 class="content__title">StreetFood</h2>
        <p class="content__paragraph">Création de compte pour bien manger de façon régulière</p>
      </div>
      <div class="content__blur"></div>
    </div>
    <div class="container__right">
      <h1 class="container__right__title">Connexion</h1>
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