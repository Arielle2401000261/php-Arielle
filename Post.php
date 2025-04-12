<!DOCTYPE html>
<html>
<head>
    <title>Password Form </title>
</head>
<body>

<h2>Enter Your Password</h2>

<form method="post" action="">
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required>
    <br><br>
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST['password'];
    echo "<h3>You entered: $password</h3>";
}
?>

</body>
</html>
