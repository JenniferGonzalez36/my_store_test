<?php

use PHPUnit\Framework\TestCase;

class RequestControllerTest extends TestCase
{
  private $object;

  public function setup(): void
  {
    $this->object = new RequestController();
  }

  public function testFunctionsReturnsAString()
  {
    $this->assertIsString($this->object->test());
  }

  public function testFunctionReturnsMessage()
  {
    $this->assertEquals($this->object->test(), "RequestController is working fine.");
  }
}
