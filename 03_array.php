<?php
//Simple Array
$numbers = [1, 2, 3, 4];
$fruits = array('a', 'b', 'c');
// print_r($numbers);
// var_dump($numbers); //show data type and length and values

// echo $fruits[1]; //to print out specific element by index

//Associative Array
$colors = [
    1 => 'red',
    4 => 'blue',
    6 => 'green'
];

echo $colors[4];
$hex = [
    'red' => '#f00',
    'blue' => '#0f0',
];
echo $hex['blue'];

$person = [
    'first_name' => 'Brad',
    'last_name' => 'Lambert'
];
echo $person['first_name'];
//like js object, arrow instead of colons

$people = [
    [
        'first_name' => 'Brad',
        'last_name' => 'Lambert'
    ],
    [
        'first_name' => 'Jennie',
        'last_name' => 'Lambert'
    ]
];

echo $people[1]['first_name'];
var_dump(json_encode($people)); //show array of json values
