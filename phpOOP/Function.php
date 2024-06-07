<?php

require_once "data/Person.php";

$febrian = new Person("Febrian", "Wonosobo");
$febrian->name = "Febrian";

$febrian->sayHello("Tisna");

$setiawan = new Person("Febrian", null);
$setiawan->name = "Febrian";

$setiawan->sayHello(null);

$febrian->info();
$setiawan->info();