<?php

$names = ["Febrian", "Tisna", "Setiawan"];

for ($i = 0; $i < count($names); $i++) {
    echo "Data ke $i = $names[$i]" . PHP_EOL;
}

foreach ($names as $name) {
    echo $name . PHP_EOL;
}

$person = [
    "first_name" => "Febrian",
    "middle_name" => "Tisna",
    "last_name" => "Setiawan"
];

foreach ($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}