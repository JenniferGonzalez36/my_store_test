<?php

function controllersAutoload($className)
{
  include_once 'controllers/' . $className . '.php';
}

spl_autoload_register('controllersAutoload');
