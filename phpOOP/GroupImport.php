<?php

/**
 * Group use Declaration
 * jika membutuhkan import banyak hal disatu namespace
 * kita bisa import beberapa class, function atau constant dalam satu perintah use
 */

require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\One\{Conflict as Conflict1, Dummy as Dum, Sample as Ex};
use function Helper\{helpMe};

$conflict = new Conflict1();
$dummy = new Dum();
$sample = new Ex();