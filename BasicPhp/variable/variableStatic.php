<?php

function incre()
{
    static $counter = 1;
    echo "Counter = $counter" . PHP_EOL;
    $counter++;
}

incre();
incre();
incre();