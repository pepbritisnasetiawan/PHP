<?php

require_once "data/Animal.php";

use Data\{Animal, Cat, Dog};

$cat = new Cat();
$cat->name = "Maki";
$cat->run();

$dog = new Dog();
$dog->name = "Moci";
$cat->run();