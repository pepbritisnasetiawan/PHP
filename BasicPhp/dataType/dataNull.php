<?php

// NULL bisa digunakan untuk mengosongkan nilai variable
// untuk membuat data NULL, kita bisa menggunakan kata kunci NULL (case insensitive)

$name = "febri";
$name = null;
echo $name;

$age = null;
echo $age;

// mengecek apakah data null 1 true 0 is false
echo "Is name and age null? : \n";
echo is_null($name);
echo "\n";
echo is_null($age);

// menghapus variable
unset($age);

// cek variable ada dan nilainy tidak null
echo "\n";
$ada = null;
var_dump(isset($ada));