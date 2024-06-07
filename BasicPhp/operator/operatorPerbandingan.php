<?php

/**
 * $a == $b => "sama dengan" => true, jika $a sama dengan $b setelah konversi tipe data
 * $a === $b => "identik" => true, jika $a sama dengan $b dan memiliki tipe data yang sama
 * $a != $b => "tidak sama dengan" => true, jika $a tidak sama dengan $b setelah konversi tipe data
 * $a <> $b => "tidak sama dengan" => true, jika $a tidak sama dengan $b setelah dilakukan konversi tipe data
 * $a !== $b => "tidak identik" => true, jika $a tidak sama dengan $b atu tidak sama tipe data
 * $a < $b => "kurang dari" => true, jika $a kurang dari $b
 * $a <= $b => "kurang dari / sama dengan" => true, jika $a kurang dari atau sama dengan $b
 * $a > $b => "lebih dari" => true, jika $a lebih besar dari $b
 * $a >= $b => "lebih dari sama dengan" => true, jika $a lebih dari atau sama dengan $b
 */

var_dump("10" == 10);
var_dump("10" === 10);
var_dump("10" != 10);
var_dump("10" <> 10);
var_dump("10" !== 10);
var_dump("10" < 10);
var_dump("10" <= 10);
var_dump("10" > 10);
var_dump("10" >= 10);