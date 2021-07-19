<?php

if (isset($_SESSION['register']) && $_SESSION['register'] == 'complete') echo HTMLBuilder::createAPTag('Registro exitoso :D', 'color-green centered growed');

if (isset($_SESSION['register']) && $_SESSION['register'] == 'failed') echo HTMLBuilder::createAPTag('Registro fallido :(', 'color-red centered growed');

if (isset($_SESSION['login']) && $_SESSION['login'] == 'complete') echo HTMLBuilder::createAPTag('Bienvenid@ ' . (Utils::isValidSession('identified') ? $_SESSION['identified']->name : 'Hack3r') . ' :)', 'color-green centered growed');

if (isset($_SESSION['login']) && $_SESSION['login'] == 'failed') echo HTMLBuilder::createAPTag('No se pudo acceder. Revise sus datos.', 'color-red centered growed');

Utils::deleteSession('login');
Utils::deleteSession('register');
