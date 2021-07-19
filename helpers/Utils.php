<?php

class Utils
{
  public static function deleteSession($name)
  {
    if (isset($_SESSION[$name])) {
      $_SESSION[$name] = null;
      unset($_SESSION[$name]);
    }
  }

  public static function isValidSession($name)
  {
    return (isset($_SESSION[$name]) && $_SESSION[$name]);
  }

  public static function goToTheMainPage()
  {
    self::goToThePage('');
  }

  public static function goToThePage($page)
  {
    header('Location:' . baseURL . $page);
  }
}
