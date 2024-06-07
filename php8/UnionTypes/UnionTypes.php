<?php

// diproperti
class Example
{
    public string|int|bool|array $data;
}

$example = new Example();
$example->data = "string";
$example->data = 1;
$example->data = false;
$example->data = [];

// diparameter / argument
function sampleFunction(string|array $data): string|array
{
    if(is_array($data)) {
        return ["Array"];
    } else if (is_string($data)) {
        return "String";
    }
}

var_dump(sampleFunction("Febri"));
var_dump(sampleFunction([]));