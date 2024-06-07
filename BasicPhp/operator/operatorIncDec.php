<?php

/**
 * $a++ => "post increment" => kembalikan $a lalu naikkan 1 angka
 * ++$a => "pre increment" => naikkan $a satu angka, lalu kembalikan $a
 * $a-- => "post decrement" => kembalikan $a lalu turunkan 1 angka
 * --$a => "pre decrement" => turunkan $a satu angka, lalu kembalikan $a
 */

$a = 5;
$b = $a++;

$c = 3;
$d = ++$c;

echo "a : ";
var_dump($a);
echo "b : ";
var_dump($b);

echo "c : ";
var_dump($c);
echo "d : ";
var_dump($d);