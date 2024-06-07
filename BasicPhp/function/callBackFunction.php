<?php

function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Febrian", "strtolower");
sayHello("Febrian", "strtoupper");
sayHello("Febrian", function (string $name): string{
    return strtoupper($name);
});

sayHello("Febrian", fn($name) => strtolower($name));