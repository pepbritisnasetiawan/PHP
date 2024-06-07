<?php

/**
 * mirip dengan switch case
 * Match ada expression artinya return value
 * digunakan untuk penggunaan yang sederhana
 */

$value = "A";
$result = match ($value) {
    "A", "B", "C" => "Anda lulus",
    "D" => "Anda tidak lulus",
    "E" => "Sepertinya anda salah jurusan",
    default => "Nilai apa itu?"
};

echo $result . PHP_EOL;

$valueEx = 80;

$resultEx = match (true) {
    $value >= 80 => "A",
    $value >= 70 => "B",
    $value >= 60 => "C",
    $value >= 50 => "D",
    default => "E"
};

echo $resultEx . PHP_EOL;

// dengan kondisi
$name = "Mr. Febrian";

$result2 = match (true) {
    str_contains($name, "Mr.") => "Hello Sir",
    str_contains($name, "Mrs.") => "Hello Mom",
    default => "Hello"
};

echo $result2 . PHP_EOL;