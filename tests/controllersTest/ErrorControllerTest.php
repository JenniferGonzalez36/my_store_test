<?php

use PHPUnit\Framework\TestCase;

require_once 'helpers/HTMLBuilder.php';

class ErrorControllerTest extends TestCase
{
  private $object;

  public function setup(): void
  {
    $this->object = new ErrorController();
  }

  public function testFunctionErrorMessageReturnsAStringWithNothing()
  {
    $this->assertIsString($this->object->errorMessage());
  }

  public function testFunctionErrorMessageReturnsAStringWithNULL()
  {
    $this->assertIsString($this->object->errorMessage(NULL));
  }

  public function testFunctionErrorMessageReturnsAStringWithANumber()
  {
    $this->assertIsString($this->object->errorMessage(57));
  }

  public function testFunctionErrorMessageReturnsAStringWithAFloat()
  {
    $this->assertIsString($this->object->errorMessage(83.06));
  }

  public function testFunctionErrorMessageReturnsAStringWithAString()
  {
    $this->assertIsString($this->object->errorMessage('Hello world'));
  }

  public function testFunctionErrorMessageReturnsAPWithNothing()
  {
    $this->assertEquals('<p class="color-red centered growed">Error 404. La página que buscas no existe.</p>', $this->object->errorMessage());
  }

  public function testFunctionErrorMessageReturnsAPWithNULL()
  {
    $this->assertEquals('<p class="color-red centered growed">Error 404. La página que buscas no existe.</p>', $this->object->errorMessage());
  }

  public function testFunctionErrorMessageReturnsAPWithANumber()
  {
    $this->assertEquals('<p class="color-red centered growed">Error 404. La página que buscas no existe. 57</p>', $this->object->errorMessage(57));
  }

  public function testFunctionErrorMessageReturnsAPWithAFloat()
  {
    $this->assertEquals('<p class="color-red centered growed">Error 404. La página que buscas no existe. 83.06</p>', $this->object->errorMessage(83.06));
  }

  public function testFunctionErrorMessageReturnsAPWithAString()
  {
    $this->assertEquals('<p class="color-red centered growed">Error 404. La página que buscas no existe. Hello world</p>', $this->object->errorMessage('Hello world'));
  }
}
