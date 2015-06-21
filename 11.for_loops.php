<?php
// 11.for_loops.php

// old way
print "1".PHP_EOL;
print "2".PHP_EOL;
print "3".PHP_EOL;
// ...
print "10".PHP_EOL;

$counter = 1;
while ($counter <= 10) {
    print $counter;
    $counter = $counter + 1;
}

// with loops
for($counter = 1; $counter <= 10; $counter = $counter + 1) {
    print $counter.PHP_EOL;
}
