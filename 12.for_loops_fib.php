<?php
// 12.for_loops_fib.php

$fib = [1, 2, 3, 5, 8, 13, 21, 34, 55, 89];
$size = sizeof($fib);

for($i = 0; $i < $size; $i++) {
    print $fib[$i].PHP_EOL;
}

// We can also create this same series using simple math. 
$a = 1;
$b = 2;
print $a.PHP_EOL;
print $b.PHP_EOL;

for($i = 0; $i < $size-2; $i++) {
    $newB = $a+$b;
    $a = $b;
    $b = $newB;
    print $newB.PHP_EOL;
}
