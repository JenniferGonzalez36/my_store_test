<?php if (!Utils::isValidSession('identified')) Utils::goToTheMainPage(); ?>

<h2 class="centered decorated">Mi cuenta</h2>
<h3 class="centered">Hola <?= $_SESSION['identified']->name ?> :)</h3>
<div class="last-link">
  <a href="<?= baseURL ?>user/logout" class="decorated close-session">Cerrar sesión</a>
</div>