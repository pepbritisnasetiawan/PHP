<?php

$name = "Febrian"; // global scope variable

function sayHei()
{
    $age = 20; // local variable
    global $name; // akses global scope variable should include keyword global

    // use $GLOBALS
    // echo $GLOBALS["name"];
    echo $name . PHP_EOL;
    echo $age . PHP_EOL;
}

sayHei();