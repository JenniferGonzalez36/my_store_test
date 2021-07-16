<?php

if (!isset($_SESSION))
  session_start();

require_once 'helpers/HTMLBuilder.php';
require_once 'helpers/Utils.php';
require_once 'config/parameters.php';
require_once 'autoload.php';
require_once 'views/layout/htmlFirstPart.php';
require_once 'config/Database.php';


$nameController;
$action;

if (isset($_GET['controller']))
  $nameController = $_GET['controller'] . 'Controller';
else $nameController = defaultController;

if (isset($_GET['action'])) $action = $_GET['action'];
else {
  if (strcmp($nameController, defaultController) === 0) $action = defaultAction;
  else $action = defaultErrorAction;
}

if (class_exists($nameController)) {
  $controller = new $nameController();
  if (method_exists($controller, $action)) {
    if (strcasecmp($nameController, 'errorController') === 0 && strcasecmp($action, 'errorMessage') === 0) showErrorPage('Pero has encontrado un Easter Egg :D');
    else $controller->$action();
  } else showErrorPage('La función es incorrecta.');
} else showErrorPage('La sección es incorrecta.');

function showErrorPage(string $reason = NULL)
{
  $action = defaultErrorAction;
  $error = new ErrorController();
  echo $error->$action($reason);
}

require_once 'views/layout/htmlLastPart.php';
