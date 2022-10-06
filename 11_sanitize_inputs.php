<?php
/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/
if (isset($_POST['submit'])) {
    // $name = filter_input(INPUT_POST, 'name', 
    // FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST,'age', FILTER_SANITIZE_SPECIAL_CHARS);
    $name = filter_var(
        $_POST['name'],
        FILTER_SANITIZE_SPECIAL_CHARS
    );
    // wrap with filter_input or htmlspecialchars so that things like: <script>alert(1)</script> won't work
    echo $name;
    echo $age;
}
?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=John&age=30">Click</a>

<br><br>

<!-- Pass data through a form -->
<!-- Use GET for search -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div>
        <label for="name">Name: </label>
        <input type="text" name="name">
    </div>
    <br>
    <div>
        <label for="age">Age: </label>
        <input type="text" name="age">
    </div>
    <br>
    <input type="submit" name="submit" value="Submit">
</form>