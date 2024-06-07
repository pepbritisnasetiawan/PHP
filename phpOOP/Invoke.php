<?php

require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Febrian";
$student1->value = 100;

// implement magic function __invoke
$student1(1, "febrian", true, "tisna");