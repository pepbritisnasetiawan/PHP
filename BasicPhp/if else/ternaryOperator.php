<?php

$gender = "PRIA";
$hi = null;

if ($gender == "PRIA") {
    $hi = "Hi bro!";
} else {
    $hi = "Hi noona!";
}

echo $hi . PHP_EOL;

$hi = $gender == "PRIA" ? "Hi bro!" : "Hi noona!";
echo $hi . PHP_EOL;