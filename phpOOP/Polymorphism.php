<?php

require_once "data/Programmer.php";

/**
 * Polymorphism
 * mengubah object ke bentuk lain
 * erat hubungannya dengan inheritance
 * perubahan bentuk hanya terbatas pada turunannya
 * jika mengambil class lain maka akan error
 */

$company = new Company();
$company->programmer = new Programmer("Febri");
var_dump($company);

$company->programmer = new BackendProgrammer("Febri");
var_dump($company);

$company->programmer = new FrontendProgrammer("Febri");
var_dump($company);

sayHelloProgrammer(new Programmer("Febri"));
sayHelloProgrammer(new BackendProgrammer("Tisna"));
sayHelloProgrammer(new FrontendProgrammer("Setiawan"));