<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to (not only value but also type)
  != Not equal to
  !== Not identical to
*/

/* ---------- If Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

$age = 20;
if ($age >= 18) {
    echo 'You are old enough to vote';
} else {
    echo 'Sorry, you are not old enough o vote';
}

// $t = date("F j H"); //print out date
$t = date("H");
echo $t;

if ($t < 12) {
    echo 'Good Morning';
} elseif ($t < 17) {
    echo 'Good Afternoon';
} else {
    echo 'Good Evening';
}

$posts = ['First Post'];

if (!empty($posts)) {
    echo $posts[0];
} else {
    echo 'No posts';
}

// echo !empty($posts) ? $posts[0] : 'No Posts';

// $firstPost = !empty($posts) ? $posts[0] : 'No Posts';
$firstPost = $posts[0] ?? null; //null if there is nothing

echo $firstPost;

//Switch
$favcolor = 'red';

switch($favcolor) {
    case 'red':
        echo 'Your favorite color is red';
        break;
    case 'blue':
        echo 'Your favorite color is blue';
        break;
    default:
        echo 'Your favorite color is not red or blue';
}
