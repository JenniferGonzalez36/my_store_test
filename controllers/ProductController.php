<?php

class ProductController
{
  public function featured()
  {
    require_once 'views/products/featuredProductsView.php';
  }

  public function test(): string
  {
    return "ProductController is working fine.";
  }
}
