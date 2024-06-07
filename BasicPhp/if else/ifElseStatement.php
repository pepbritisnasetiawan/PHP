<?php

/**
 * SYNTAX
 * if (expression)
 *      statement;
 * 
 * if (expression) {
 *      statement1;
 *      statement2;
 * }
 * 
 * if (expression) {
 *      statement;
 * } else {
 *      statement;
 * }
 * 
 * if (expression) {
 *      statement;
 * } elseif {
 *      statement;
 * } else {
 *      statement;
 * }
 */

$nilai = 90;
$absen = 90;

if ($nilai >= 75 && $absen >= 75) {
    echo "Anda lulus" . PHP_EOL;
} else {
    echo "Anda tidak lulus" . PHP_EOL;
}

$nilaiA = 80;
$abenA = 70;

if ($nilaiA >= 80 && $abenA >= 80) {
    echo "Nilai Anda A" . PHP_EOL;
} else if ($nilaiA >= 70 && $abenA >= 70) {
    echo "Nilai Anda B" . PHP_EOL;
} else if ($nilaiA >= 60 && $abenA >= 60) {
    echo "Nilai Anda C" . PHP_EOL;
} else if ($nilaiA >= 50 && $abenA >= 50) {
    echo "Nilai Anda D" . PHP_EOL;
} else {
    echo "Nilai Anda E" . PHP_EOL;
}

/**
 * SYNTAX ALTERNTIF
 */

$nilaiB = 60;
$abenB = 70;

if ($nilaiB >= 80 && $abenB >= 80) :
    echo "Nilai Anda A" . PHP_EOL;
elseif ($nilaiB >= 70 && $abenB >= 70):
    echo "Nilai Anda B" . PHP_EOL;
elseif ($nilaiB >= 60 && $abenB >= 60):
    echo "Nilai Anda C" . PHP_EOL;
elseif ($nilaiB >= 50 && $abenB >= 50):
    echo "Nilai Anda D" . PHP_EOL;
else :
    echo "Nilai Anda E" . PHP_EOL;
endif;

