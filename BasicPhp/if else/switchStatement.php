<?php

/**
 * digunakan untuk kondisi yang sederhana
 * digunakan hanya untuk pebandingan ==
 */

$nilai = "A";
switch ($nilai) {
    case "A":
        echo "Anda lulus dengan sangat baik" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda lulus" . PHP_EOL;
        break;
    case "D":
        echo "Anda tidak lulus" . PHP_EOL;
        break;
    default:
        echo "Anda salah jurusan" . PHP_EOL;
}

/**
 * alternatif
 */

switch ($nilai) :
    case "A":
        echo "Anda lulus dengan sangat baik" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda lulus" . PHP_EOL;
        break;
    case "D":
        echo "Anda tidak lulus" . PHP_EOL;
        break;
    default:
        echo "Anda salah jurusan" . PHP_EOL;
endswitch;