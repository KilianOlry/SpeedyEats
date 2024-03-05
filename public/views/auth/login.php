<section class="login">
  <div class="container_login">
    <h1>Connexion</h1>

    <form action="" method="POST">

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
        <input type="hidden" name="token" value="<?= $_SESSION['token'] ?? '' ?>">
      </div>

      <div class="input input_submit text-center">
        <button type="submit" class="submit">Valider</button>
      </div>
    </form>
  </div>
</section>