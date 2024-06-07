<?php

require_once "data/Student.php";

$student = new Student();

$student->id = "1";
$student->name = "Febrian";
$student->value = 100;

// yang terpanggil adalah funciton __toString yang di class Student
$string = (string) $student;
echo $string . PHP_EOL;

// bisa juga bgini
echo $student . PHP_EOL;