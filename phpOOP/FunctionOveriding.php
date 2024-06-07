<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Febri";
$manager->sayHello("Febrian");

$vp = new VicePresident();
$vp->name = "Tisna";
$vp->sayHello("Setiwan"); // overide sayHello in parent, now use sayHello in child VicePresident