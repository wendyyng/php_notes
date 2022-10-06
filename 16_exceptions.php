<?php

/* ----------- Exceptions ----------- */

/*
  PHP has an exception model similar to that of other programming languages. An exception can be thrown, and caught ("catched") within PHP. Code may be surrounded in a try block, to facilitate the catching of potential exceptions. Each try must have at least one corresponding catch or finally block.
*/

function inverse($x)
{
    if (!$x) {
        //pass in a message
        throw new Exception('Division by zero.');
    }
    return 1 / $x;
}

echo inverse(5); // Causes an exception to be thrown and stops script execution
echo '<br>';
// Handles the exception
// try {
//   echo inverse(5) . ' ';
//   echo inverse(0) . ' '";
// } catch (Exception $e) {
//   echo 'Caught exception: ',  $e->getMessage(), ' ';
// }

// Finally block is executed regardless of whether an exception is thrown or not

try {
    echo inverse(5) . ' ';
    echo inverse(0) . ' ';
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), ' ';
    echo '<br>';
} finally {
    //finally executes no matter if there's an exception
    echo 'First finally ';
    echo '<br>';
    echo '<br>';
}

try {
    echo inverse(0) . ' ';
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), ' ';
} finally {
    echo "Second finally ";
}


echo 'Hello World';
