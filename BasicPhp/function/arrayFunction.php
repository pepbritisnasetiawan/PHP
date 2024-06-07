<?php

$nums = [1, 2, 3, 4, 5, 6, 7, 8, 9 ,10];
$person = [
    "first_name" => "febrian",
    "last_name" => "setiawan"
];

// array_map() => mengubah semua data array dengan callback
$dataResult = array_map(fn(int $value) => $value * 10, $nums);
var_dump($dataResult);

// sort() => mengurutkan aaray
rsort($nums);
var_dump($nums);

// array_keys() => mengambil semua keys milik array
var_dump(array_keys($nums));
var_dump(array_keys($person));

// array_values() => mengambil semua values milik array
var_dump(array_values($nums));
var_dump(array_values($person));

// shuffle() => mengubah posisi data di array secara random
var_dump(shuffle($nums));