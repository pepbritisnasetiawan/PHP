<?php

/**
 * interface by default adalah abstract class
 * dan ini digunakan untuk kontrak
 * jadi jika akan extends class, child class harus implement function dri parentnya
 */

namespace Data;

interface HasBrand
{
    function getBrand(): string;
}

interface IsMaintenance
{
    function isMaintenance(): bool;
}

interface Car extends HasBrand
{
    function drive(): void;
    function getTire(): int;
}

class Avanza implements Car, IsMaintenance {

    public function drive(): void
    {
        echo "Drive Avanza" . PHP_EOL;
    }

    public function getTire(): int
    {
        return 4;
    }

    public function getBrand(): string
    {
        return "Toyota" . PHP_EOL;
    }

    public function isMaintenance(): bool
    {
        return false;
    }
}