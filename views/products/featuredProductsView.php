<?php if (isset($_SESSION['register']) && $_SESSION['register'] == 'complete') : ?>
  <p class="color-green centered growed">Registro exitoso :D</p>
<?php endif;
Utils::deleteSession('register'); ?>

<h2 class="centered decorated">Destacados</h2>
<div class="products-container dashed-block">
  <div class="product-container">
    <div class="product-card">
      <img src="<?= baseURL ?>/assets/img/T-shirt.png" alt="Camiseta">
      <h3 class="product-name">Camiseta Azul claro</h2>
        <p class="product-price">$189.99</p>
    </div>
    <button class="add-cart-button">Añadir al carrito</button>
  </div>

  <div class="product-container">
    <div class="product-card">
      <img src="<?= baseURL ?>/assets/img/T-shirt.png" alt="Camiseta">
      <h3 class="product-name">Camiseta Azul cielo</h2>
        <p class="product-price">$179.99</p>
    </div>
    <button class="add-cart-button">Añadir al carrito</button>
  </div>

  <div class="product-container">
    <div class="product-card">
      <img src="<?= baseURL ?>/assets/img/T-shirt.png" alt="Camiseta">
      <h3 class="product-name">Camiseta Celeste</h2>
        <p class="product-price">$219.99</p>
    </div>
    <button class="add-cart-button">Añadir al carrito</button>
  </div>

</div>