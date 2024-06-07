<?php

/**
 * DOT OPERATOR
 *  (.) digunakan untuk menambahkan string dengan data lain
 */

$name = "Febrian Tisna";

echo "Nama : " . $name . PHP_EOL;
echo "Nilai : ". 100 . "\n";

/**
 * KONVERSI KE NUMBER DAN SEBALIKNYA
 *  (DATA TYPE) => untuk konversi
 *  DATA TYPE => string, int, float dll
 */

$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"200";
var_dump($valueInt);

$valueFloat = (float)"23.3";
var_dump($valueFloat);

/**
 * MENGAKSES KARAKTER
 * string di php bersifat seperti array, kita bisa mengaksesnya berdasarkan index
 */

$fullName = "Febrian Tisna Setiawan";
echo $fullName[0] . PHP_EOL;
echo $fullName[1] . PHP_EOL;
echo $fullName[3] . PHP_EOL;
echo $fullName[8] . PHP_EOL;

/**
 * VARIABLE PARSING
 * untuk string dengn double quote kita bisa menggunakan $ untuk mengakses variable
 * ini memudahkan untuk menggabungkan string dengan varible
 * cara penggunaanya $ lalu diikuti nama variable
 */

$nameParsing = "Febri";
echo "Hello $nameParsing, Selamat belajar" . PHP_EOL;

/**
 * CURLY BRACE
 */

echo "This is {$nameParsing}an" . PHP_EOL;