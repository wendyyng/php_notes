<?php
echo 'Hello', 'Hello'; //only for strings
print_r([1,2,3]); //print out array
var_dump('Hello'); //show data type
var_dump(true); //return more info like data type and length
var_export('Hello') //also show quotes
// closing tag is optional unless there's something below it eg.html
// semicolon is needed unless next thing is closing tag
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= 'Post One'; ?></h1>
</body>
</html>