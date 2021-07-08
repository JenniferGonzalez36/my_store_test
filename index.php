<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mi tienda</title>
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>

<body>
  <header>
    <div id="logo">
      <a href="index.php">
        <img src="assets/img/T-shirt.png" alt="Camiseta-Logo">
      </a>

      <a href="index.php" id="title">Mi tienda.</a>
    </div>
    <nav id="nav-main-menu">
      <ul>
        <li>
          <a href="#">Inicio</a>
        </li>
        <li>
          <a href="#">Categorias</a>
        </li>
        <li>
          <a href="#">Mi cuenta</a>
        </li>
        <li>
          <a href="#" class="Shopping_cart-icon">🛒</a>
        </li>
      </ul>
    </nav>
  </header>

  <div id="main-container">
    <div class="product-cards-container">
      <div class="product-card">
        <img src="assets/img/T-shirt.png" alt="Camiseta">
        <h2 class="product-name">Camiseta Azul claro</h2>
        <p class="product-price">$189.99</p>
        <a href="#">Añadir al carrito</a>
      </div>

      <div class="product-card">
        <img src="assets/img/T-shirt.png" alt="Camiseta">
        <h2 class="product-name">Camiseta Azul cielo</h2>
        <p class="product-price">$179.99</p>
        <a href="#">Añadir al carrito</a>
      </div>

      <div class="product-card">
        <img src="assets/img/T-shirt.png" alt="Camiseta">
        <h2 class="product-name">Camiseta Celeste</h2>
        <p class="product-price">$219.99</p>
        <a href="#">Añadir al carrito</a>
      </div>
    </div>
  </div>

  <footer id="footer">
    <a href="https://github.com/JenniferGonzalez36" target="_blank">Developed by &copy; Jennifer González - 2021</a>
  </footer>
</body>

</html>