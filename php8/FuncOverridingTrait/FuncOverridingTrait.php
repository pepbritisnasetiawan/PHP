<?php

trait SampleTrait
{
    public abstract function sampleFunction(string $name): string;
}

class SampleClass {
    use SampleTrait;

    // ini akan error, karena harus sama dengan sampleFunction di SampleTrait
    public function sampleFunction(int $name): string
    {
        
    }
}

// overriding funciton juga akan error
class ParentClass
{
    public function  mehtod(string $name);
}

class ChildClass extends ParentClass
{
    public function mehtod(int $name)
    {
        
    }
}