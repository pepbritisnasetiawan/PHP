<?php

require_once "data/Product.php";

$product = new Product("Orange", 20000);
// echo $product->name . PHP_EOL; // return error because private property

echo $product->getName() . PHP_EOL; // public getName, accessible
echo $product->getPrice() . PHP_EOL; // public getPrice, accessible

$dummy = new ProductDummy("Dummy", 10000);
$dummy->info();