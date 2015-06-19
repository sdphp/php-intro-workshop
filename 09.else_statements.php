<?php
// 09.else_statements.php

$number = 4;
if ($number === 1) {
    print "The number variable is equal to one.".PHP_EOL;
} else {
    print "The number variable IS NOT equal to one.".PHP_EOL;
}

$string = "Lala Bar";
if (strpos($string, "Foo") !== false) {
    print "The string '$string' contains the word 'Foo'".PHP_EOL;
} else {
    print "The word 'Foo' WAS NOT found in the string '$string'".PHP_EOL;
}
