<?php

/**
 * +$variable => positif
 * -$variable => negative
 * $variable + $variable => penambahan
 * $variable - $variable => pengurangan
 * $variable * $variable => perkalian
 * $variable / $variable => pembagian
 * $variable % $variable => sisa bagi
 * $variable ** $variable => pangkat
 */

$result = 10 + 10;
var_dump($result);

$result = 10 - 3;
var_dump($result);

$result = 10 * 10;
var_dump($result);

$result = 10 / 5;
var_dump($result);

$result = 10 % 3;
var_dump($result);

$result = 10 ** 2;
var_dump($result);

$resultNegative = -$result;
var_dump($resultNegative);