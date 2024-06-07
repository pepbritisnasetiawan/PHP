<?php

function sayHello($name = "Anonymous")
{
    echo "Hello $name" . PHP_EOL;
}

sayHello();
sayHello("Febrian");

// default argument harus dibelakang jika ada lbih dari 1
function sayHi($firstName, $lastName = "")
{
    echo "hello $firstName $lastName" . PHP_EOL;
}

sayHi("febrian", "Tisna");
sayHi("febrian");

function sum(int $a , int $b)
{
    $total = $a + $b;
    echo "Total $a + $b = $total" . PHP_EOL;
}

sum(100, 100);
sum("100", "100");
sum(true, false);

/**
 * function variable-length argument list
 * bisa menggunakan ...
 */ 

function sumAll(...$values)
{
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    echo "Total " . implode(" + ", $values) . " = $total" . PHP_EOL;
}

$nums = [1, 2, 3, 5];
sumAll(10, 20, 30, 40);
sumAll(...$nums);