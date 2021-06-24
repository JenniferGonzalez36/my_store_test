<?php

use PHPUnit\Framework\TestCase;

class OperationsTest extends TestCase
{
  private $op;

  public function setUp(): void
  {
    $this->op = new Operations();
  }

  public function testSumWithTwoValues()
  {
    $this->assertEquals(7, $this->op->sum(2, 5));
  }

  public function testSumWithNullValues()
  {
    //$this->assertEquals(NULL, $this->op->sum(NULL, NULL));
    $this->expectException(InvalidArgumentException::class);
    $this->op->sum(NULL, NULL);
  }
}
