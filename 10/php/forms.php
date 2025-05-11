<!DOCTYPE html>
<html lang="en">
<head>
    <title>Simple PHP Form</title>
</head>
<body>
    <h2>PHP FORM</h2>
    <form action="" method="POST">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="age">Age:</label><br>
        <input type="age" id="age" name="age" required><br><br>

        <input type="submit" value="Submit">
    </form>  

    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $age = htmlspecialchars($_POST['age']);

        // Validate email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<h3 style='color: red;'>Invalid Email Format</h3>";
        } else {
            echo "<h3>Form Submitted Successfully</h3>";
            echo "Name: " . $name . "<br>";
            echo "Email: " . $email . "<br>";
            echo "Age: " . $age . "<br>";
        }
    }
    ?>
</body>
</html>
