<?php
// 06.arrays.php
$array = array(
    "foo" => "BAR",
    "bar" => "FOO",
);
print $array['foo'];  // bar

// as of PHP 5.4
$array = [
    "new" => "array",
    "syntax" => "use this",
];
print $array['syntax']; // use this

// if arrays are used without a key, 
// zero indexed numeric values are 
// assigned to them.
$array = ['apple', 'orange', 'banana'];
print $array[0]; // apple
print $array[1]; // orange
print $array[2]; // banana
