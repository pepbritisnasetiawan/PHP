<?php

var_dump(str_contains("Febrian Tisna Setiawa", "febri"));
var_dump(str_contains("Febrian Tisna Setiawa", "tisna"));
var_dump(str_contains("Febrian Tisna Setiawa", "setiawan"));

var_dump(str_starts_with("Febrian Tisna", "Febrian"));
var_dump(str_starts_with("Febrian Tisna", "Tisna"));
var_dump(str_starts_with("Febrian Tisna", "Setiawan"));

var_dump(str_ends_with("Febrian Tisna Setiawan", "febrian"));
var_dump(str_ends_with("Febrian Tisna Setiawan", "Tisna"));
var_dump(str_ends_with("Febrian Tisna Setiawan", "Setiawan"));