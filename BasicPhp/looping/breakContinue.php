<?php

/**
 * Break untuk menghentikan seluruh perulangan
 * Continue untuk menghentikan perulangan saat ini lalu melanjutkan perulangan selanjutnya (skip)
 */


$counter = 1;

while (true) {
    echo "Ini adalah perulangan ke-$counter" . PHP_EOL;
    $counter++;

    if ($counter > 10) {
        break;
    }
}

for ($counterCon = 0; $counterCon <= 100; $counterCon++) {
    if ($counterCon % 2 == 0) {
        continue;
    }
    echo "Counter : $counterCon" . PHP_EOL;
}