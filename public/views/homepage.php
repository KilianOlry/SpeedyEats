<div class="articles">
  <?php foreach ($datas as $data) : ?>
    <article class="relative article">
      <div class="article-wrapper">
        <figure class="article__wrapper__img" style="background-image: url('<?= PATH_IMAGE_CATEGORY ?><?= $data['image'] ?>');">
        </figure>
        <div class="article__body">
          <h2 class="article__body__title"><?= $data['name'] ?></h2>
          <p class="article__body__description">
            <?= $data['description'] ?>
          </p>
          <a href="?page=category&category=<?= $data['name'] ?>&id=<?= $data['id'] ?>" class="read-more article__body__link" title="Nos produits">
            Voir nos <?= $data['name'] ?>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
          </a>
        </div>
      </div>
    </article>
  <?php endforeach; ?>
</div>