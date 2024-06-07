<?php

// di PHP Map bisa dibuat menggunakan Array
// index bisa menggunakan data apapun misal array, sehingga mirip seperti map di bahasa lain

$febri = array(
    "id" => "febri",
    "name" => "febrian tisna",
    "age" => 28,
    "address" => [
        "city" => "wonosobo",
        "country" => "indonesia"
    ]
);

$wirjo = [
    "id" => "Wirjo",
    "name" => "Suwirjo Oetomo",
    "age" => 35,
    "address" => [
        "city" => "Bandung",
        "country" => "Indonesia"
    ]
];

var_dump($febri);
var_dump($febri["name"]);
var_dump($febri["address"]["city"]);
var_dump($wirjo["id"]);
var_dump($wirjo["address"]["country"]);