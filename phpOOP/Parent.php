<?php

require_once "data/Shape.php";

use Data\{Shape, Rectengle};

$shape = new Shape();
echo $shape->getCorner() . PHP_EOL;

$rectengle = new Rectengle();
echo $rectengle->getCorner() . PHP_EOL;

// access getCorner in parent
echo $rectengle->getParentCorner() . PHP_EOL;