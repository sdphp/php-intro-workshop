<?php
// 03.data_types.php

print gettype(true)      . PHP_EOL;      // bolean
print gettype(12345)     . PHP_EOL;      // integer
print gettype(1.2345)    . PHP_EOL;      // double
print gettype("Hello")   . PHP_EOL;      // string
print gettype([1, 2, 3]) . PHP_EOL;      // array
print gettype(new stdClass()) . PHP_EOL; // object
print gettype(null)      . PHP_EOL;      // NULL
