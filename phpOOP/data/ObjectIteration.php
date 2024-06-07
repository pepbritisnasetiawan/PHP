<?php

/**
 * to iterate manual should implement IteratorAggregate
 * then create function getItterator
 */

class Data implements IteratorAggregate
{
    var string $first = "First";
    public string $second = "Second";
    private string $third = "Third";
    protected string $forth = "Forth";

    public function getIterator(): Traversable
    {
        $array = [
            "first" => $this->first,
            "second" => $this->second,
            "third" => $this->third,
            "forth" => $this->forth
        ];

        return new ArrayIterator($array);
    }

    // alternative menggunkan yield
    /* public function getIterator(): Traversable
    {
        yield "first" => $this->first;
        yield "second" => $this->second;
        yield "third" => $this->third;
        yield "forth" => $this->forth;
    } */
}

$data = new Data();

// iterate auto (array itterator)
foreach ($data as $property => $value) {
    echo "$property : $value" . PHP_EOL;
}