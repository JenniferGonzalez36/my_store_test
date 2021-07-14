<?php

use PHPUnit\Framework\TestCase;

class HTMLBuilderTest extends TestCase
{
  public function setup(): void
  {
    require_once 'helpers/HTMLBuilder.php';
  }

  public function testFunctionCreateAPTagReturnsAString()
  {
    $this->assertIsString(HTMLBuilder::createAPTag(''));
  }

  public function testFunctionCreateAPTagWithNoParams()
  {
    $this->assertEquals('<p></p>', HTMLBuilder::createAPTag());
  }

  public function testFunctionCreateAPTagWithNULL()
  {
    $this->assertEquals('<p></p>', HTMLBuilder::createAPTag(NULL));
  }

  public function testFunctionCreateAPTagWithNULLNULL()
  {
    $this->assertEquals('<p></p>', HTMLBuilder::createAPTag(NULL, NULL));
  }

  public function testFunctionCreateAPTagWithAText()
  {
    $this->assertEquals('<p>Hello world</p>', HTMLBuilder::createAPTag("Hello world"));
  }

  public function testFunctionCreateAPTagWithATextAndSpaces()
  {
    $this->assertEquals('<p>Hello world.</p>', HTMLBuilder::createAPTag("  Hello world.   "));
  }

  public function testFunctionCreateAPTagWithANumber()
  {
    $this->assertEquals('<p>527</p>', HTMLBuilder::createAPTag(527));
  }

  public function testFunctionCreateAPTagWithAFloat()
  {
    $this->assertEquals('<p>18.013</p>', HTMLBuilder::createAPTag(18.013));
  }

  public function testFunctionCreateAPTagWithATrueValue()
  {
    $this->assertEquals('<p>1</p>', HTMLBuilder::createAPTag(true));
  }

  public function testFunctionCreateAPTagWithAFalseValue()
  {
    $this->assertEquals('<p></p>', HTMLBuilder::createAPTag(false));
  }

  public function testFunctionCreateAPTagWithAClass()
  {
    $this->assertEquals('<p class="myTest"></p>', HTMLBuilder::createAPTag('', 'myTest'));
  }

  public function testFunctionCreateAPTagWithMultipleClasses()
  {
    $this->assertEquals('<p class="myTest yourTest itsTest ourTest"></p>', HTMLBuilder::createAPTag('', 'myTest yourTest itsTest ourTest'));
  }

  public function testFunctionCreateAPTagWithATextAndTwoClasses()
  {
    $this->assertEquals('<p class="myTest hello">Hello world. This is a test.</p>', HTMLBuilder::createAPTag('Hello world. This is a test.', 'myTest hello'));
  }

  public function testFunctionCreateAPTagWithAClassWithSpaces()
  {
    $this->assertEquals('<p class="myTest"></p>', HTMLBuilder::createAPTag('', '  myTest   '));
  }
}
