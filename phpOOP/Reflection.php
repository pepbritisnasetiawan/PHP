<?php

require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/ValidationUtil.php";

$request = new LoginRequest();
$request->username = "febrian";
$request->password = "dfj;ads21423KLjlj";

ValidationUtil::validateReflection($request);

class RegisterUserRequest
{
    public ?string $name;
    public ?string $address;
    public ?string $email;
}

$reqister = new RegisterUserRequest();
$reqister->name = "febrian";
$reqister->address = "yogya";
$reqister->email = "febri@mail.com";

ValidationUtil::validateReflection($reqister);