<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Febrian";
$manager->sayHello("Tisna");

$vp = new VicePresident();
$vp->name = "Setiawan";
$vp->sayHello("Tisna");