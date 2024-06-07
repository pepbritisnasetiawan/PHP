<?php

function sum(int $a, int $b)
{
    return $a + $b;
}

$total = sum(10, 20);
var_dump($total);

function getfinalValue(int $value)
{
    if ($value >= 80) {
        return "A";
    } else if ($value >= 70) {
        return "B";
    } else if ($value >= 60) {
        return "C";
    } else if ($value >= 50) {
        return "D";
    } else {
        return "E";
    }
}

$score = getfinalValue(65);
var_dump($score);