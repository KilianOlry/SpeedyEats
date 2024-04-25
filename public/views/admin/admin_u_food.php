<div class="login">
  <section class="container__login">
    <div class="container__left">
      <div class="content">
        <h2 class="content__title">SpeedyEats</h2>
        <p class="content__paragraph">Modifier l'aliment</p>
      </div>
      <div class="content__blur"></div>
    </div>
    <div class="container__right">
      <h1 class="container__right__title">Modifier l'aliment</h1>
      <form action="?page=admin_u_food" method="POST" enctype="multipart/form-data">
        <div class="input">
          <input type="text" hidden value="<?= $datas['id'] ?>" name="id">
        </div>
        <div class="input">
          <input type="text" value="<?= $datas['name'] ?>" name="name" placeholder="<?= $datas['name'] ?>">
        </div>

        <div class="input">
          <input type="number" name="lipid" placeholder='Nombre de lipide <?= $datas['lipid'] ?>'>
        </div>

        <div class="input">
          <input type="number" name="glucid" placeholder='Nombre de glucide <?= $datas['glucid'] ?>'>
        </div>

        <div class="input">
          <input type="number" name="protein" placeholder='Nombre de protein <?= $datas['protein'] ?>'>
        </div>

        <div class="input">
          <input type="number" name="weight" placeholder='Nombre de calories <?= $datas['weight'] ?>'>>
        </div>

        <div class="input">
          <input type="file" name="image" value="<?= $datas['image'] ?>" accept=".jpeg, .jpg, .png, .webp" placeholder="Choisir votre fichier">
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