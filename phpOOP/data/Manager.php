<?php

class Manager
{
    var string $name;
    var string $title;

    public function __construct(string $name = "", string $title = "Manager") {
        $this->name = $name;
        $this->title = $title;
    }

    // void itu key untuk tidak mengembalikan value
    function sayHello(string $name): void
    {
        echo "Hi $name, my name is Manager $this->name" . PHP_EOL;
    }
}

class VicePresident extends Manager {

    // override constructor, mengubah jumlah parameter
    public function __construct(string $name = "")
    {
        parent::__construct($name, "VP");
    }

    // overide function, parent function will replace by child
    function sayHello(string $name): void
    {
        echo "Hi $name, my name is VP $this->name" . PHP_EOL;
    }
}