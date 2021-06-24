<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mi tienda de camisetas</title>
  <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
  <!-- CABECERA -->
  <header id="header">
    <div id="logo">
      <img src="assets/img/T-shirt.png" alt="Camiseta-Logo">
      <a href="index.php">Tienda de camisetas</a>
    </div>
  </header>
  <!-- MENU -->
  <nav id="menu">
    <ul>
      <li>
        <a href="#">Inicio</a>
      </li>
      <li>
        <a href="#">Categoria1</a>
      </li>
      <li>
        <a href="#">Categoria2</a>
      </li>
      <li>
        <a href="#">Categoria3</a>
      </li>
      <li>
        <a href="#">Categoria4</a>
      </li>
    </ul>
  </nav>
  <div id="content">
    <!-- BARRA LATERAL -->
    <aside id="aside_content">
      <div id="login" class="block_aside">
        <form action="#" method="POST">
          <label for="email">Email</label>
          <input type="email" name="email">
          <label for="password">Contraseña</label>
          <input type="password" name="password">
          <input type="submit" value="Ingresar">
        </form>
        <a href="#">Mis pedidos</a>
        <a href="#">Gestionar pedidos</a>
        <a href="#">Gestionar categorias</a>
      </div>
    </aside>

    <!-- CONTENIDO CENTRAL -->
    <div id="main_content">
      <div class="product">
        <img src="assets/img/T-shirt.png">
        <h2>Camiseta Azul claro</h2>
        <p>$200</p>
        <a href="#">Añadir al carrito</a>
      </div>

      <div class="product">
        <img src="assets/img/T-shirt.png">
        <h2>Camiseta Azul cielo</h2>
        <p>$190</p>
        <a href="#">Añadir al carrito</a>
      </div>

      <div class="product">
        <img src="assets/img/T-shirt.png">
        <h2>Camiseta Celeste</h2>
        <p>$220</p>
        <a href="#">Añadir al carrito</a>
      </div>
    </div>
  </div>
  <!-- PIE DE PÁGINA -->
  <footer id="footer">
    <p>Developed by Jennifer González &copy; - 2021</p>
  </footer>
</body>

</html>