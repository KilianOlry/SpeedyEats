<div class="app-content-header">
  <h1 class="app-content-headerText">Aliments</h1>
  <button class="app-content-headerButton">
    <a href="<?= PATH_LINK_PAGE . 'admin_c_food' ?>" class="">
      Créer un Aliment
    </a>
  </button>
</div>
<div class="app-content-actions">
  <input class="search-bar" placeholder="Search..." type="text">
</div>
<div class="products-area-wrapper tableView">
  <div class="products-header">
    <div class="product-cell image">
      Image
      <button class="sort-button">
        <img src="<?= PATH_ICON . 'admin_filter.svg' ?>" alt="icone filtre" id="svg">
      </button>
    </div>
    <div class="product-cell category">Nom<button class="sort-button">
        <img src="<?= PATH_ICON . 'admin_filter.svg' ?>" alt="icone filtre" id="svg">
      </button>
    </div>
    <div class="product-cell sales">Lipides<button class="sort-button">
        <img src="<?= PATH_ICON . 'admin_filter.svg' ?>" alt="icone filtre" id="svg">
      </button>
    </div>
    <div class="product-cell stock">Glucides
      <button class="sort-button">
        <img src="<?= PATH_ICON . 'admin_filter.svg' ?>" alt="icone filtre" id="svg">
      </button>
    </div>
    <div class="product-cell stock">Proteines
      <button class="sort-button">
        <img src="<?= PATH_ICON . 'admin_filter.svg' ?>" alt="icone filtre" id="svg">
      </button>
    </div>
    <div class="product-cell stock">Calories
      <button class="sort-button">
        <img src="<?= PATH_ICON . 'admin_filter.svg' ?>" alt="icone filtre" id="svg">
      </button>
    </div>
    <div class="product-cell status-cell">Status<button class="sort-button">
        <img src="<?= PATH_ICON . 'admin_filter.svg' ?>" alt="icone filtre" id="svg">
      </button>
    </div>
    <div class="product-cell price">Actions<button class="sort-button">
        <img src="<?= PATH_ICON . 'admin_filter.svg' ?>" alt="icone filtre" id="svg">
      </button>
    </div>
  </div>
  <?php foreach ($datas as $data) : ?>
    <div class="products-row">
      <div class="product-cell image">
        <img src="<?= PATH_IMAGE_FOOD. $data['image'] ?>" alt="product">
        <!-- <span>Ocean</span> -->
      </div>
      <div class="product-cell category"><span class="cell-label">Aliments:</span><?= $data['name'] ?></div>
      <div class="product-cell price"><span class="cell-label">Lipid</span><?= $data['lipid'] ?></div>

      <div class="product-cell stock">
        <span class="cell-label">Stock:</span>
        <?= $data['glucid'] ?>
      </div>

      <div class="product-cell stock">
        <span class="cell-label">Stock:</span>
        <?= $data['protein'] ?>
      </div>

      <div class="product-cell stock">
        <span class="cell-label">Stock:</span>
        <?= $data['weight'] ?>
      </div>

      <div class="product-cell status-cell">
        <span class="cell-label">Status:</span>
        <span class="status active">Active</span>
      </div>
      <div class="product-cell price">
        <form action="?page=admin_u_food" method="post">
          <input type="text" name="id" hidden value="<?= $data['id'] ?>">
          <button type="submit" class="icon-action">
            <img src="<?= PATH_ICON . 'edit.svg' ?>" alt="icon modification">
          </button>
        </form>
        <form action="" method="post">
          <input type="text" name="id" hidden value="<?= $data['id'] ?>">
          <button type="submit" class="icon-action">
            <img src="<?= PATH_ICON . 'delete.svg' ?>" alt="icon suppression">
          </button>
        </form>
      </div>
    </div>
  <?php endforeach; ?>
</div>