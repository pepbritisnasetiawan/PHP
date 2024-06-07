<?php

$matches = [];
$result = preg_match_all("/feb|ria|isn/i", "Febrian Tisna Setiawan", $matches);

var_dump($result);
var_dump($matches);

$resultReplace = preg_replace("/anjing|bangsat/i", "***", "Dasar lu anjing bangsat!");
var_dump($resultReplace);

$resultSplit = preg_split("/[\s,-]/", "Febrian  Tisna Setiawan adalah fullstack programmer");
var_dump($resultSplit);