<?php

$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Febrian");

/**
 * anonymous function sebagai argument
 */

function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good Bye $finalName" . PHP_EOL;
}

sayGoodBye("Febrian", function (string $name): string {
    return strtoupper($name);
});

// bisa begini jga
$filterFunc = function (string $name): string {
    return strtolower($name);
};

sayGoodBye("Febrian", $filterFunc);

/**
 * anonymous function tidak bisa mengakses variable diluar scope
 * harus menggunakan use untuk mengakses variable global
 */

$firstName = "Febrian";
$lastName = "Setiawan";
$sayHiFeb = function () use($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};
$sayHiFeb();