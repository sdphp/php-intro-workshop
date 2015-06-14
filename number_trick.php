<?php

$original = rand(1, 10000);
print $original.PHP_EOL;
$x = $original + 5;
$x = 2 * $x;
$x = $x - 4;
$x = $x / 2;
$result = $x - $original;
print $result. PHP_EOL;
