<?php

/**
 * hanya bisa digunakan di function yang sederhana
 * bisa menggunakan variable global tanpa use
 */

$firstName = "Febri";
$lastName = "Setiawan";

$say = fn() => "Hello $firstName $lastName" . PHP_EOL;

echo $say();