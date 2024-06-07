<?php

// <!-- 
//     Constant => variable yang tidak bisa diubah ubah nilainya
//     untuk membuat constant bisa menggunakan define()
//     Best practice pembuatan nama constant menggunakan UPPER_CASE
//     kode : Constant
//     constant tidak bisa di deklarasi ulang
//  -->

define("AUTHOR", "Fullstack Programmer");
define("APP_VERSION", 100);

echo "Author : ";
echo AUTHOR;
echo "\n";

echo "APP VERSION : ";
echo APP_VERSION;
echo "\n";

