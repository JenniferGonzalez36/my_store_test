<header>
  <div id="logo">
    <a href="<?= baseURL ?>">
      <img src="<?= baseURL ?>assets/img/T-shirt.png" alt="Camiseta-Logo">
    </a>

    <a href="<?= baseURL ?>" id="title">Mi tienda.</a>
  </div>
  <nav id="nav-main-menu">
    <ul>
      <li>
        <a href="<?= baseURL ?>">Inicio</a>
      </li>
      <li>
        <button>Categorías &#9660</button>
      </li>
      <?php if (Utils::isValidSession('identified')) : ?>
        <li>
          <a href="<?= baseURL ?>user/account">Mi cuenta</a>
        </li>
        <?php if (Utils::isValidSession('admin')) : ?>
          <li>
            <a href="#">Gestión</a>
          </li>
        <?php endif; ?>
        <li>
          <a href=" #" class="Shopping_cart-icon">🛒</a>
        </li>
      <?php else : ?>
        <li>
          <a href="<?= baseURL ?>user/login">Acceder</a>
        </li>
      <?php endif; ?>
    </ul>
  </nav>
</header>