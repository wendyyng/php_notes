<?php
/* ------------- Cookies ------------ */

/*
  Cookies are a mechanism for storing data in the remote browser and thus tracking or identifying return users. You can set specific data to be stored in the browser, and then retrieve it when the user visits the site again.
*/

// Since cookies are stored on the client, you shouldn't store sensitive data in them. Sessions are a better choice for storing sensitive data.

// Set a cookie
setcookie('name', 'Brad', time() + 86400 * 30); // 86400 = 1 day
//time() prints the timestamp
// echo time();

// Get a cookie
if (isset($_COOKIE['name'])) {
    $name = $_COOKIE['name'];
}
echo $name;

// Delete a cookie
// setcookie('name', '', time() - 86400);

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
    <h1><?php echo $name ?></h1>
</body>

</html>