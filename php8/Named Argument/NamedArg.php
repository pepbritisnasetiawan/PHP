<?php

function sayHello(string $first, string $middle, string $last): void
{
    echo "Hello $first $middle $last" . PHP_EOL;
}

// bebas mau isi yang mana dulu asal argumentnya dimasukkan
sayHello(last: "setiawan", first: "febri", middle: "tisna");

// jika ada default value di argument bisa flexible