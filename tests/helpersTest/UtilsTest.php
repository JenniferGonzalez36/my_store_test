<?php

if (!isset($_SESSION))
  session_start();

use PHPUnit\Framework\TestCase;

class UtilsTest extends TestCase
{
  public function testUtilsDeleteSession()
  {
    $_SESSION['test'] = 'Hello';
    Utils::deleteSession('test');
    $this->assertFalse(isset($_SESSION['test']));
  }
}
