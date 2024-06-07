<?php

/**
 * $a && $b => "And" => true, jika $a dan %b keduanya true
 * $a and $b => "And" => true, jika $a dan $b keduanya true
 * $a || $b => "Or" => true, jika salah satu atau keduanya true
 * $a or %b => "Or" => true, jika salah satu atau keduanya true
 * !$a => "Not" => true jika $a bernilai false
 * $a xor $b => "Xor" => true, jika salah satu true, tapi tidak keduanya
 */

$a = 1;
$b = 0;

var_dump($a && $b);
var_dump($a and $b);
var_dump($a || $b);
var_dump($a or $b);
var_dump(!$a);
var_dump($a xor $b);