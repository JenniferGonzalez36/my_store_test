<?php

use PHPUnit\Framework\TestCase;

class UserControllerTest extends TestCase
{
  private $object;

  public function setup(): void
  {
    $this->object = new UserController();
  }

  public function testFunctionsReturnsAString()
  {
    $this->assertIsString($this->object->test());
  }

  public function testFunctionReturnsMessage()
  {
    $this->assertEquals($this->object->test(), "UserController is working fine.");
  }
}
