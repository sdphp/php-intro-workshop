<?php
// 11.for_loops.php

// old way
print "1".PHP_EOL;
print "2".PHP_EOL;
print "3".PHP_EOL;
// ...
print "10".PHP_EOL;

// with loops
for($i = 1; $i <= 10; $i++) {
    print "I'm using a loop, my current count is $i".PHP_EOL;
}
