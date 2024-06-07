<?php

class Product
{
    public function __construct(public string $id,
                                public string $name,
                                public int $price = 0,
                                public int $quantity,
                                private bool $expensive = false)
    {
    }
}

$product = new Product(id: "1", name: "Ayam Geprek", price: 20000, quantity: 1);
var_dump($product);
echo $product->name . PHP_EOL;