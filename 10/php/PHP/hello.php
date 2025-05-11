<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hello World</title>
</head>
<body>
    <h1>
        <?php
            echo "Hello, World!";
            echo "</br>"
        ?>

        <?php   
            $season = array("summer","winter","Autumn","Rainy");

            foreach($season as $element){
                echo "$element";
                echo "</br>";
            }
        ?>    
    </h1>
</body>
</html>
