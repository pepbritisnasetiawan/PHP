<?php

/**
 * digunakan untuk loncat ke code program tertentu
 * tidak disarankan jika code nya sudah banyak, karena akan membingungkan
 */


goto a;
echo "Hello world" . PHP_EOL;

a:
echo "Hello A" . PHP_EOL;

$counter = 1;
while (true) {
    echo "Ini adalah perulangan ke-$counter" . PHP_EOL;
    $counter++;

    if ($counter > 10) {
        goto end;
    }
}

end:
echo "End Loop";