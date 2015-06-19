<?php
// 13.foreach_loops_fib.php
$fib = [1, 2, 3, 5, 8, 13, 21, 34, 55, 89];

foreach($fib as $number) {
    print $number.PHP_EOL;
}

$numeros = ['uno' => 1, 'dos' => 2, 'tres' => 3];
// You can also get the key of the array
foreach ($numeros as $key => $value) {
    print "The key of the current 'numero' is $key and the value is $value".PHP_EOL;
}
