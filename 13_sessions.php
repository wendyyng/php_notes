<?php
/* ------------ Sessions ------------ */

/*
  Sessions are a way to store information (in variables) to be used across multiple pages.
  Unlike cookies, sessions are stored on the server.
*/

session_start();
if (isset($_POST['submit'])) {
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
    $username = filter_var(
        $_POST['username'],
        FILTER_SANITIZE_SPECIAL_CHARS
    );

    if ($username == 'john' && $password == 'password') {
        $_SESSION['username'] = $username;
        header('Location: /php-project/extras/dashboard.php');
    } else {
        echo 'Incorrect Login';
    }
}
?>

<!-- Pass data through a form -->
<!-- Use GET for search -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div>
        <label for="username">Username: </label>
        <input type="text" name="username">
    </div>
    <br>
    <div>
        <label for="password">Password: </label>
        <input type="password" name="password">
    </div>
    <br>
    <input type="submit" name="submit" value="Submit">
</form>