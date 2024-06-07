<?php

require_once "helper/MathHelper.php";

use Helper\MathHelper;

//static properties
echo MathHelper::$name . PHP_EOL;

MathHelper::$name = "Febrian Tisna";
echo MathHelper::$name . PHP_EOL;

// Static function
$result = MathHelper::sum(10, 129, 39, 44);
echo "Result : $result" . PHP_EOL;