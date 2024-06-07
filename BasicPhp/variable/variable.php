<!-- 
    variable di php bisa berubah ubah tipe datanya
    menggunkan tanda $
    penamaan tidak boleh ada spasi

    Variable Variables
        menggunakan $$ diikuti dengan nama variable nya
 -->

<?php

$name = "Febrian";
$age = 28;

echo "Name : ";
echo $name;

echo "\n";

echo "Age : ";
echo $age;

echo "\n";
$contoh = "febri";
$$contoh = "setiawan";

echo "Contoh : ";
echo $contoh;