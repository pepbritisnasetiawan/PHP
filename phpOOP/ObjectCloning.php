<?php

require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Febri";
$student1->value = 100;
// $student1->setSample("xxx");

var_dump($student1);

// duplicate object
$student2 = clone $student1;
$student2->id = "2";
$student2->name = "Tisna";
$student2->value = 100;
var_dump($student2);

// modifikasi clone __clone()
// $student1 => clone $student2 => $student2->__clone();

// Comparing object
var_dump($student1 == $student2);
var_dump($student1 === $student2);