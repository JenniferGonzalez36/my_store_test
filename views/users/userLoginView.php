<?php if (Utils::isValidSession('identified')) Utils::goToTheMainPage(); ?>

<h2 class="centered decorated">Acceder</h2>
<h3 class="centered">Ingresa los datos de tu cuenta</h3>
<div class="centered-content">

  <form class="centered-form-block" action="<?= baseURL ?>user/access" method="POST">
    <label for="email">Email:</label>
    <input type="email" name="email" class="input-data" minlength="7" placeholder="algo@algo.com" required>

    <label for="password">Contraseña:</label>
    <input type="password" name="password" class="input-data" minlength="5" placeholder="•••••" required>
    <input type="submit" value="Acceder">
  </form>

</div>

<div class="last-link">
  <a href="<?= baseURL ?>user/register">¿No tienes cuenta? Registrate aquí.</a>
</div>