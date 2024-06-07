<?php

$dateTime = new DateTime();

#merubah set date, harus dirubah y-m-d sekaligus
$dateTime->setDate(1996, 2, 29);

var_dump($dateTime);

# DateInterval
# Untuk pembuatan duration, harus diawali dengan karakter P yang artinya period
$dateTime->add(new DateInterval("P1Y")); # P1Y => period 1 year
var_dump($dateTime);

# merubah time zone, bisa di folder php.ini ataupun menggunakan function
$dateTimeTimeZone = new DateTime();
$dateTimeTimeZone->setTimezone(new DateTimeZone("America/Toronto"));
var_dump($dateTimeTimeZone);

# Format DateTime -> string
# real case manipulasi di frontend
$dateFormat = new DateTime();
$dateFormat->setTimezone(new DateTimeZone("Asia/Jakarta"));

echo $dateFormat->format("Y-m-d H-i:s") . PHP_EOL;

# parse DateTime
# string -> time
$date = DateTime::createFromFormat("Y-m-d H:i:s", "2024-06-07 08:30:34", new DateTimeZone("Asia/Jakarta"));
if ($date) {
    var_dump($date);
} else {
    echo "Format Salah" . PHP_EOL;
}