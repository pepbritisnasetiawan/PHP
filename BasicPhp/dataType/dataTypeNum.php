<!-- 
    1. int =>
        -- decimal (base 10)
        -- hexadecimal (base 16)
        -- octa (baase 8)
        -- binary (base 2)
    
    2. float

    3. di Php bisa menambah _ untuk mempermudah pembacaan, _ akan diignore saat running
    4. untuk negatif bisa menggunakan tanda (-) didepan
-->

<?php

echo "Decimal : ";
var_dump(1234);

echo "Octal : ";
var_dump(01234);

echo "Hexadecimal : ";
var_dump(0x1A);

echo "Binary : ";
var_dump(0b111111);

echo "Undescore in number : ";
var_dump(1_234_567_890);

echo "Floating point : ";
var_dump(3.456);

echo "Floating point dengan E Notation : (1.7 x 1000) : ";
var_dump(1.7e3);

echo "Floating point dengan E Notation minus : (1.7 x 0.001) : ";
var_dump(1.7e-3);

echo "Underscore di floating point : ";
var_dump(1_344.123);

echo "Integer Overflow 64 bit, jika lebih akan dikonversi ke floating point : ";
var_dump(9223372036854775807);

echo "Integer Overflow 64 bit, jika lebih akan dikonversi ke floating point ex : ";
var_dump(9223372036854775808);