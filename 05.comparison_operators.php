<?php
// 05.comparison_operators.php

var_dump(1 == 2);       // FALSE
var_dump(1 < 2);        // TRUE
var_dump(1 <= 2);       // TRUE
var_dump(2 > 2);        // FALSE
var_dump(2 >= 2);       // TRUE
var_dump(1 == true);    // TRUE - same as (bool)1 == TRUE
var_dump(1 === true);   // FALSE - same as (int)1 === FALSE
var_dump(0 == false);   // TRUE - same as (bool)0 == FALSE
var_dump(0 === false);  // FALSE - same as (int)0 === FALSE
