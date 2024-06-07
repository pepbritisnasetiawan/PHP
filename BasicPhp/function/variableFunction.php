<?php

function foo()
{
    echo "FOO" . PHP_EOL;
}

function bar()
{
    echo "BAR" . PHP_EOL;
}

$functionVar = "foo";
$functionVar();

$funcBar = "bar";
$funcBar();

/**
 * Penggunaan Variable Function
 */

function sayHei(string $name, $filter)
{
    $finalName = $filter($name);
    echo "hey $finalName" . PHP_EOL;
}

function sampleFunc(string $name): string
{
    return "Sample $name";
}

sayHei("Febrian", "sampleFunc");
sayHei("Febrian", "strtoupper");
sayHei("Febrian", "strtolower");