<section class="login">
  <div class="container_login">
    <h1>Envoi message</h1>

    <form action="" method="POST" enctype="multipart/form-data">

      <div class="input">
        <label for="name">Nom</label>
        <input type="text" name="name" value="<?= $_SESSION['user']['name'] ?>">
        <p id="nom"></p>
      </div>

      <div class="input">
        <label for="object">Objet</label>
        <input type="text" name="object" class="object">
        <p id="nom"></p>
      </div>

      <div class="input input_password">
        <label for="description">Votre message</label>
        <textarea name="message" class="message" cols="30" rows="10"></textarea>
        <input type="hidden" name="token" value="<?= $_SESSION['token'] ?? '' ?>">
      </div>

      <div class="input input_submit text-center">
        <button type="submit" class="submit">Valider</button>
      </div>
    </form>
  </div>
</section>