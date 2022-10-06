<?php
$y = 12;
function registerUser($email)
{
    global $y;
    echo $y;
    echo "$email Registered";
}

registerUser('brad@gmail.com');
//arguments: define what goes into it, 
//parameter: what you pass in as the argument in an function

function sum($n1 = 4, $n2 =5) {
    return $n1 + $n2;
}

$number = sum(5, 5);
echo $number;

$subtract = function($n1, $n2) {
    return $n1 - $n2;
};

echo $subtract(10, 5);

$multiply = fn ($n1, $n2) => $n1 * $n2;
echo $multiply(9,9);


