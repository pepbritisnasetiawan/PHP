<?php

/**
 * $a + $b => "union" => menggabungkan $a dan $b
 * $a == $b => "equlity" => true, jika $a dan $b memiliki key-value sama
 * $a === $b => "identity" => true, jika $a dan $b memiiki key-value sma dan posisi sama
 * $a != $b => "inequality" => true, jika $a dan $b tidak sama
 * $a <> $b => "inequality" => true, jika $a dan $b tidak sama
 * $a !== $b => "nonidentity => true, jika $a dan $b tidak identik
 */

$first = [
    "first_name" => "Febri"
];

$last = [
    "last_name" => "Setiawan"
];

$full = $first + $last;
var_dump($full);

$a = [
    "first_name" => "Febri",
    "last_name" => "Setiawan"
];

$b = [
    "last_name" => "Setiawan",
    "first_name" => "Febri"
];

var_dump($a == $b);
var_dump($a != $b);
var_dump($a === $b);
var_dump($a !== $b);