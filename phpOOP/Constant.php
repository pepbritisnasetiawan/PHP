<?php

require_once "data/Person.php";

const APP_VERSION = "1.0.0";
echo APP_VERSION . PHP_EOL;

// cara akses constant di class
// constant itu menempel di class bukan diobject
echo Person::AUTHOR . PHP_EOL;
