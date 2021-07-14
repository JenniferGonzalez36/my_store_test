<?php

use PHPUnit\Framework\TestCase;

class CategoryControllerTest extends TestCase
{
  private $object;

  public function setup(): void
  {
    $this->object = new CategoryController();
  }

  public function testFunctionsReturnsAString()
  {
    $this->assertIsString($this->object->test());
  }

  public function testFunctionReturnsMessage()
  {
    $this->assertEquals($this->object->test(), "CategoryController is working fine.");
  }
}
