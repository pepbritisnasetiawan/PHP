<?php

/**
 * throw di anggap sebuah expression
 */

function sayHello(?string $name)
{
    if ($name == null) {
        throw new Exception("Tidak boleh null");
    }

    echo "Hello $name" . PHP_EOL;
}

// menjadi
function sayHelloExpression(?string $name)
{
    $result = $name != null ? "Hello $name" : throw new Exception("Tidak boleh null");
    echo $result . PHP_EOL;
}

sayHelloExpression(null);