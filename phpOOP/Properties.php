<?php

require_once "data/Person.php";

$person = new Person("Febrian", "Wonosobo");
$person->name = "Febrian";
$person->address = "Wonosobo";
$person->country = "Indonesia";

var_dump($person);

echo "Name : $person->name" . PHP_EOL;
echo "Address : $person->address" . PHP_EOL;
echo "Country : $person->country" . PHP_EOL;

$person2 = new Person("Febrian", null);
$person2->name = "Setiawan";
$person2->address = "Yogya";

var_dump($person2);
echo "Name : $person2->name" . PHP_EOL;
echo "Address : $person2->address" . PHP_EOL;
echo "Country : $person2->country" . PHP_EOL;