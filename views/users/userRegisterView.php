<?php if (Utils::isValidSession('identified')) Utils::goToTheMainPage(); ?>

<h2 class="centered decorated">Registrarse</h2>
<div class="centered-content">

  <form class="centered-form-block" action="<?= baseURL ?>user/saveUser" method="POST">
    <label for="name">Nombre:</label>
    <input type="text" name="name" class="input-data" minlength="3" placeholder="3 letras mínimo" required>


    <label for="surname">Apellido:</label>
    <input type="text" name="surname" class="input-data" minlength="3" placeholder="3 letras mínimo" required>

    <label for="email">Email:</label>
    <input type="email" name="email" class="input-data" minlength="7" placeholder="algo@algo.com" required>

    <label for="password">Contraseña:</label>
    <input type="password" name="password" class="input-data" minlength="5" placeholder="5 letras mínimo" required>

    <label for="pass-confirm">Confirme su contraseña:</label>
    <input type="password" name="pass-confirm" class="input-data" minlength="5" placeholder="5 letras mínimo" required>

    <input type="submit" value="Registrarse">
  </form>
</div>
<div class="last-link">
  <a href="<?= baseURL ?>user/login">¿Ya tienes una cuenta? Accede a ella aquí.</a>
</div>