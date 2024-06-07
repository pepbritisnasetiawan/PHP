<?php

require "data/SayGoodbye.php";

use Data\Traits\{Person, SayHello, SayGoodBye};

$person = new Person();
$person->goodBye("Febri");
$person->hello("Tisna");

$person->name = "Febrian";
var_dump($person);

$person->run();