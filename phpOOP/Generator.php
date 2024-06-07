<?php

function getGenap(int $max): Iterator
{
    for ($i = 1; $i <= $max; $i++) {
        if ($i % 2 == 0) {
            yield $i;
        }
    }
}

function getGanjil(int $max): Iterator
{
    for ($i = 1; $i <= $max; $i++) {
        if ($i % 2 == 1) {
            yield $i;
        }
    }
}

foreach (getGenap(100) as $value) {
    echo "Genap : $value" . PHP_EOL;
}

foreach (getGanjil(100) as $value) {
    echo "Ganjil : $value" . PHP_EOL;
}