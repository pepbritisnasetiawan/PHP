<?php

use Data\Cat;

/**
 * tidak wajib membuat variable untuk exception
 */

function validate(string $value)
{
    if (trim($value) == "") {
        throw new Exception("Invalid string");
    }
}

try {
    validate("  ");
} catch (Exception) {
    echo "Invalid" . PHP_EOL;
}