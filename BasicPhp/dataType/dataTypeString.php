<?php

// Single Quote
echo 'Nama : ';
echo 'Pepbri Tisna Setiawan';

// Double Quote
// Advantages : we can use escape sequence => \n \t
echo "\n==================\n";
echo "Nama : ";
echo "\nPepbri \nTisna \nSetiawan\n";
echo "ini pakai\t tab\n";

// Heredoc => membuat string yang panjang (<<<TAG TAG;)
echo "\n==================\n";
echo <<<X
Selamat belajar php
sekarang kita belajar string
ini cara ke-3 membuat string
dan ini menggunakan HEARDOC

X;

// Nowdoc
echo "\n==================\n";
echo <<<'X'
Selamat belajar php
sekarang kita belajar string
ini cara ke-3 membuat string
dan ini menggunakan HEARDOC
X;