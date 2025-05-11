<?php
echo "<h2>PHP Data Types Example</h2>";

// 1. String
$name = "Varad";
echo "String: ";
var_dump($name);
echo "<br><br>";

// 2. Integer
$age = 21;
echo "Integer: ";
var_dump($age);
echo "<br><br>";

// 3. Float/Double
$height = 5.9;
echo "Float: ";
var_dump($height);
echo "<br><br>";

// 4. Boolean
$isStudent = true;
echo "Boolean: ";
var_dump($isStudent);
echo "<br><br>";

// 5. Array
$languages = array("PHP", "Java", "Python");
echo "Array: ";
var_dump($languages);
echo "<br><br>";

// 6. Object
class Car {
    public $brand = "Tata";
}
$car1 = new Car();
echo "Object: ";
var_dump($car1);
echo "<br><br>";

// 7. NULL
$emptyVar = null;
echo "NULL: ";
var_dump($emptyVar);
echo "<br><br>";

// 8. Resource (usually used with DB or file handles – just for info)
echo "Resource (file example): ";
$file = fopen("test.txt", "w");
var_dump($file);
fclose($file);
?>
