<?php

class Database
{
  public static function connect()
  {
    $database = new mysqli('localhost:3308', 'root', '', 'tienda_master');
    $database->query("SET NAMES 'utf8'");
    return $database;
  }
}
