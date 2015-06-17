<?php
//07.arrays_menu.php

$menu = [
    'shake' => [
        'vanilla ice cream',
        'milk',
    ],
    'tiramisu' => [
        'instant-espresso powder',
        'sugar',
        '4 large egg',
        'heavy cream',
    ],
    'burger' => [
        'beef patty',
        'lettuce',
        'tomatoes',
        'buns',
    ],
];

ksort($menu);

print_r($menu);