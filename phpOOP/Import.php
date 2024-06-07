<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

/**
 * use keyword
 * untuk menghindari menuliskan nama namespace berkali kali
 * akan tetapi jika ingin mengakses namespace yang berbeda harus menggunakan use lagi
 * jika menggunakan use tidak bisa meng-import dua class dengna nama yang sama
 */

use Data\One\Conflict; // mengambil class
use function Helper\helpMe; // mengambil function
use const Helper\APPLICATION; // mengambil constant

$conflict1 = new Conflict();
helpMe();
echo APPLICATION . PHP_EOL;

// jika ingin mengambil namespace yang kedua di class yang sama maka harus menyebutkan namespacenya
$conflict12 = new Data\Two\Conflict();