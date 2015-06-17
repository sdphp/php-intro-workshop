<?php
// 08.if_statements.php

$number = 1;

if ($number === 1) {
    print "The number variable is equal to one.".PHP_EOL;
}

$string = "Foo Bar";

if (strpos($string, "Foo") !== false) {
    print "The string '$string' contains the word 'Foo'".PHP_EOL;
}
