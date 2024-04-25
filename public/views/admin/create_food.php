<div class="login">
  <section class="container__login">
    <div class="container__left">
      <div class="content">
        <h2 class="content__title">StreetFood</h2>
        <p class="content__paragraph">Création d'un aliment</p>
      </div>
      <div class="content__blur"></div>
    </div>
    <div class="container__right">
      <h1 class="container__right__title">Créer un nouveau aliment</h1>
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="input">
          <input type="text" name="name" placeholder="Nom de l'aliment">
        </div>
        <div class="input">
          <input type="number" name="lipid" placeholder="Nombre de lipides">
        </div>
        <div class="input">
          <input type="number" name="glucid" placeholder="Nombre de glucides">
        </div>
        <div class="input">
          <input type="number" name="protein" placeholder="Nombre de protéines">
        </div>
        <div class="input">
          <input type="number" name="weight" placeholder="Nombre de calories">
        </div>
        <div class="input">
          <input type="file" name="image" accept=".jpeg, .jpg, .png, .webp" placeholder="Choisir votre fichier">
          <p class="message_email"></p>
        </div>

        <input type="hidden" name="token" value="<?= $_SESSION['token'] ?? '' ?>">

        <div class="input input_submit text-center">
          <button type="submit" class="submit">Valider</button>
        </div>
      </form>
    </div>
  </section>
</div>