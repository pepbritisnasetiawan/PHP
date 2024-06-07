<?php

require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/Validation.php";

$loginRequest = new LoginRequest();
$loginRequest->username = "";
$loginRequest->password = "41234sadfa";

// try {
//     validateLoginRequest($loginRequest);
// } catch (ValidationException $exception) {
//     echo "Error : {$exception->getMessage()}" . PHP_EOL;
// } catch (Exception $exception) {
//     echo "Error : {$exception->getMessage()}" . PHP_EOL;
// }

// multiple try catch
try {
    validateLoginRequest($loginRequest);
} catch (ValidationException | Exception $exception) {
    echo "Error : {$exception->getMessage()}" . PHP_EOL;
    var_dump($exception->getTrace());
    echo $exception->getTraceAsString();
} finally {
    echo "Error ga error tetep dieksekusi" . PHP_EOL;
}