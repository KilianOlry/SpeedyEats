<h1 class="title">nos <?= $products[0]['category_name'] ?></h1>

<div class="products">
  <?php foreach ($products as $product) : ?>
    <div class="food-card">
      <button class="button-23" role="button">
        <img src="<?= PATH_ICON . 'cart.svg' ?>" alt="icone de pannier">
      </button>
      <div class="food-card-img">
        <img src="<?= $product['image'] ?>" alt="<?= $product['name'] ?>">
      </div>
      <div class="food-card-name"><?= $product['name'] ?></div>
    </div>
  <?php endforeach; ?>
</div>