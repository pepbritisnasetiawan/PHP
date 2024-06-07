<?php

/**
 * $a -= $b => $a = $a - b
 * $a *= $b => $a = $a * b
 * $a /= $b => $a = $a / b
 * $a %= $b => $a = $a % b
 * $a += $b => $a = $a + b
 * $a += $b => $a = $a + b
 * $a += $b => $a = $a + b
 */

$total = 0;

$fruit = 10000;
$chicken = 35000;
$orangeJuice = 10000;

var_dump($total += $fruit);
var_dump($total += $chicken);
var_dump($total += $orangeJuice);

echo "Total : ";
var_dump($total);