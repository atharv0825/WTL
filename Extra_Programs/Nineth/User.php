<!DOCTYPE html>
<html>
<head>
    <title>Set User Cookie</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];

    if (!empty($username)) {
        setcookie("username", $username, time() + (86400 * 7), "/"); 
        echo "<p>Cookie set successfully for user: <strong>$username</strong></p>";
    } else {
        echo "<p>Please enter a valid username.</p>";
    }
}

if (isset($_COOKIE["username"])) {
    echo "<p>Welcome back, <strong>" . $_COOKIE["username"] . "</strong>!</p>";
}
?>

<h2>Enter Username</h2>
<form method="POST" action="">
    <input type="text" name="username" placeholder="Enter your name" required>
    <input type="submit" value="Set Cookie">
</form>

<form method="POST" action="">
    <input type="hidden" name="delete" value="true">
    <input type="submit" value="Delete Cookie">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete"])) {
    setcookie("username", "", time() - 3600, "/"); 
    echo "<p>Cookie deleted.</p>";
}
?>

</body>
</html>
