<?php

function sayHello()
{
    echo "Hello ini Function" . PHP_EOL;
}

sayHello();

/**
 * FUNCTION Argument
 * 
 */

function sayHi($name)
{
    echo "Hi $name" . PHP_EOL;
}

sayHi("Febri");