<?php

// array di php bisa berisi bebagai jenis data
// array di php memiliki panjang dinamis, artinya bisa menambah data ke array sebanyak banyaknya

$values = array(10, 45, 9.9, 0.4);
var_dump($values);

$names = ["febri", "tisna", "setiawan"];
var_dump($names);

echo "\n";
// mengakes data di array pada nomor index $arary[index]
var_dump($names[0]);
echo "\n";

// mengubah data di array pada nomor index dengan value baru $array[index] = value
$names[0] = "Wirjo";
var_dump($names[0]);

// menambah data pada posisi paling belakang $array[] = value
echo "\n";
$names[] = "OeTomo";
var_dump($names);

// menghapus data di array, index otomatis hilang dari array unset($array[index])
echo "\n";
unset($names[2]);
var_dump($names);

// mengambil total data di array count($array)
echo "\n";
var_dump(count($names));
