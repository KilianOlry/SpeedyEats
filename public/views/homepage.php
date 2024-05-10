<?php
  require PATH_VIEWS_GLOBAL . 'banner.php';
?>


<h1 class="title">Nos spécialités</h1>

<div class="categorys">
  <?php foreach ($datas as $data) : ?>
    <div class="card-hover">
      <div class="card-hover__content">
        <h3 class="card-hover__title">
          Nos <span><?= $data['name'] ?></span> rien que pour vous !
        </h3>
        <p class="card-hover__text">Fait maison</p>
        <a href="<?= PATH_LINK_PAGE . 'products' . '&category=' . $data['id'] ?>" class="card-hover__link">
          <span>En savoir plus</span>
          <img src="<?= PATH_ICON . 'arrow.svg'; ?>" alt="en savoir plus">
        </a>
      </div>
      <div class="card-hover__extra">
        <h4><?= $data['description'] ?></h4>
      </div>
      <img class="img__category" src="<?= PATH_IMAGE_CATEGORY . $data['image'] ?>" alt="">
    </div>
  <?php endforeach; ?>
</div>