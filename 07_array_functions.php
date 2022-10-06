<?php
/* --------- Array Functions -------- */

/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/

$fruits = ['apple', 'orange', 'pear'];

//Get length
echo count($fruits);

//Search Array for specific value => gives true or false
var_dump(in_array('apples', $fruits));

//Add to array
$fruits[] = 'grape';
array_push($fruits, 'blueberry', 'strawberry');
array_unshift($fruits, 'mango');
//Remove from Array
array_pop($fruits);
array_shift($fruits);
// unset($fruits[2]);

//Split into 2 chunks
$chunked_array = array_chunk($fruits, 3);
// print_r($chunked_array);
// print_r($fruits);

$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];

$arr3 = array_merge($arr1, $arr2);
$arr4 = [...$arr1, ...$arr2];

// print_r($arr3);

$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];
$c = array_combine($a, $b);
//a as keys and b as values
// print_r($c);
$keys = array_keys($c);
print_r($keys); //print out just the keys

$flipped = array_flip($c);
print_r($flipped); //flip the keys and the values

$numbers = range(1, 20);

print_r($numbers);

$newNumbers = array_map(function($number) {
    return "Number ${number}";
 }, $numbers);

 print_r($newNumbers);

$lessThan10 = array_filter($numbers, fn($number) => $number <= 10);
print_r($lessThan10);

//Reduce - good for adding numbers
//carry holds the return value of the previous iteration
$sum = array_reduce($numbers, fn($carry, $number) =>
 $carry + $number);

 var_dump($sum);