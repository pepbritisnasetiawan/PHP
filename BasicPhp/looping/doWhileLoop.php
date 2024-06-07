<?php

/**
 * pengecekkan di while loop dilakukan diawal sebelum perulangan,
 * sedangkan di do while loop dilakukan setelah perulangan dilakukan
 */

$counter = 100;

do {
    echo "Hello do while loop : " . $counter . PHP_EOL;
    $counter++;
} while ($counter <= 10);