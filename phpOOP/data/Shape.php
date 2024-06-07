<?php

/**
 * parent Keyword
 * parent digunakan untuk mengakses class parent
 * dimana kita ingin mengakses lagi function yang ada di parent yang sudah dioverride
 */

namespace Data;

class Shape {
    public function getCorner(): int
    {
        return 0;
    }
}

class Rectengle extends Shape
{
    // override getCorner
    public function getCorner(): int
    {
        return 4;
    }

    public function getParentCorner(): int
    {
        // mengakses getCorner dari parent yang sudah dioverride
        return parent::getCorner();
    }
}