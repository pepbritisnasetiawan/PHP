<?php

class Address
{
    public ?string $country;
}

class User
{
    public ?Address $address;
}

function getCountry(?User $user): ?string
{
    return $user?->address?->country; // ? => null safe operator
}

echo getCountry(null) . PHP_EOL;