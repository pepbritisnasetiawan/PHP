<?php

/**
 * Saat menggunakan Abstract Class makan kita bisa membuat abstract function juga didalamnya
 * akan tetapi tidak boleh membuat block function,
 * ini digunakan untuk memaksa child class untuk override
 * Abstract class tidak boleh memiliki access modifier private
 */

namespace Data;

require_once "AnimalFood.php";

abstract class Animal
{
    public string $name;

    abstract public function run(): void;
    
    abstract public function eat(AnimalFood $animalFood): void;
}

class Cat extends Animal
{
    public function run(): void
    {
        echo "Cat $this->name is running" . PHP_EOL;
    }

    public function eat(AnimalFood $animalFood): void
    {
        echo "Cat is eating" . PHP_EOL;
    }
}

class Dog extends Animal
{
    public function run(): void
    {
        echo "Dog $this->name is running" . PHP_EOL;
    }

    public function eat(Food $animalFood): void
    {
        echo "Dog is eating" . PHP_EOL;
    }
}