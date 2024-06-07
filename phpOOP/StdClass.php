<?php

/**
 * stdClass
 * konversi dari array ke object atau sebaliknya
 */

require_once "data/Person.php";

$array = [
    "first_name" => "Febrian",
    "middle_name" => "Tisna",
    "last_name" => "Setiawan"
];

$object = (object)$array;

var_dump($object);
echo "First Name : $object->first_name" . PHP_EOL;
echo "First Middle : $object->middle_name" . PHP_EOL;
echo "First Name : $object->last_name" . PHP_EOL;

$arrayLagi = (array)$object;
var_dump($arrayLagi);

$person = new Person("Febrian", "Sleman");
var_dump($person);

$arrayPerson = (array)$person;
var_dump($arrayPerson);