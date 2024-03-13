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
      <h1 class="container__right__title">Inscription</h1>
      <form action="" method="POST">
      <div class="input">
        <input type="text" name="name" placeholder="Nom">
      </div>

      <div class="input">
        <input type="email" name="email" class="email" placeholder="Email">
        <p class="message_email"></p>
      </div>

      <div class="input input_password relative">
        <input type="password" placeholder="Mot de passe" name="password" class="password">
        <i class="fa-solid fa-eye visibility"></i>
        <p class="message_password"></p>
      </div>
      <input type="hidden" name="token" value="<?= $_SESSION['token'] ?? '' ?>">

      <div class="input input_password">
        <input type="password" placeholder="Répéter le mot de passe" name="confirmPassword" class="repeatPassword">
        <p class="message_repeat_password"></p>
      </div>

      <div class="input input_submit text-center">
        <button type="submit" class="submit">Valider</button>
      </div>
      </form>
    </div>
  </section>
</div>