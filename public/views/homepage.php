<?php
  require PATH_VIEWS_GLOBAL . 'banner.php';
?>

<div class="categorys">
  <?php foreach ($datas as $data) : ?>
    <div class="card-hover">
      <div class="card-hover__content">
        <h3 class="card-hover__title">
          Nos <span><?= $data['name'] ?></span> rien que pour vous !
        </h3>
        <p class="card-hover__text">Fait maison</p>
        <a href="#" class="card-hover__link">
          <span>En savoir plus</span>
          <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
          </svg>
        </a>
      </div>
      <div class="card-hover__extra">
        <h4><?= $data['description'] ?></h4>
      </div>
      <img class="img__category" src="<?= PATH_IMAGE_CATEGORY . $data['image'] ?>" alt="">
    </div>
  <?php endforeach; ?>
</div>