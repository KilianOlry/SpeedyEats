<section class="login">
  <div class="container_login">
    <h1>Inscription</h1>

    <form action="" method="POST">

      <div class="input">
        <label for="name">Nom</label>
        <input type="text" name="name" id="name">
      </div>

      <div class="input">
        <label for="">Email</label>
        <input type="email" name="email" class="email">
        <p class="message_email"></p>
      </div>

      <div class="input input_password relative">
        <label for="password">Mot de passe</label>
        <input type="password" name="password" class="password">
        <i class="fa-solid fa-eye visibility"></i>
        <p class="message_password"></p>
      </div>
      <input type="hidden" name="token" value="<?= $_SESSION['token'] ?? '' ?>">

      <div class="input input_password">
        <label for="confirmPassword">Confirmer Mot de Passe</label>
        <input type="password" name="confirmPassword" class="repeatPassword">
        <p class="message_repeat_password"></p>
      </div>

      <div class="input input_submit text-center">
        <button type="submit" disabled class="submit">Valider</button>
      </div>
    </form>
  </div>
</section>