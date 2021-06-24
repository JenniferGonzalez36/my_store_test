<?php

class Operations
{

  public function __construct()
  {
  }

  public function sum($n1, $n2)
  {
    if ($n1 == NULL || $n2 == NULL) throw new InvalidArgumentException('Values are not numeric');
    return $n1 + $n2;
  }

  public function divide($n1, $n2)
  {
    return $n1 / $n2;
  }
}
