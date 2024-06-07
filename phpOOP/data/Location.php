<?php

/**
 * Abstract class tidak bisa dibuat object secara langsung
 * ia hanya bisa diturunkan ke childnya,
 * dimana ini akan mengikat child class / kontrak child class
 */

namespace Data;

abstract class Location
{
    public string $name;
}

class City extends Location{}

class Province extends Location{}

class Country extends Location{}