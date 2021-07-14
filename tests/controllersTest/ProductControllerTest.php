<?php

use PHPUnit\Framework\TestCase;

class ProductControllerTest extends TestCase
{
  private $object;

  public function setup(): void
  {
    $this->object = new ProductController();
  }

  public function testFunctionsReturnsAString()
  {
    $this->assertIsString($this->object->test());
  }

  public function testFunctionReturnsMessage()
  {
    $this->assertEquals($this->object->test(), "ProductController is working fine.");
  }
}
