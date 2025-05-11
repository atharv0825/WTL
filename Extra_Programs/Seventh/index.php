<!DOCTYPE html>
<html>
<head>
    <title>PHP Greeting Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            padding: 40px;
            text-align: center;
        }

        form {
            margin-top: 20px;
        }

        input[type="text"] {
            padding: 10px;
            width: 250px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            border: none;
            background-color: #28a745;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            margin-left: 10px;
        }

        .message {
            margin-top: 20px;
            color: #333;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <h1>Welcome to My PHP Page</h1>

    <form method="post">
        <input type="text" name="username" placeholder="Enter your name" required>
        <input type="submit" value="Greet Me">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['username']);
        echo "<div class='message'>Hello, <strong>$name</strong>! Welcome to the site.</div>";
    }
    ?>
</body>
</html>
