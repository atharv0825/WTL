<?php
echo "<h2>PHP Operators Example</h2>";

// 1. Arithmetic Operators
$a = 10;
$b = 3;

echo "<h3>Arithmetic Operators</h3>";
echo "Addition: " . ($a + $b) . "<br>";
echo "Subtraction: " . ($a - $b) . "<br>";
echo "Multiplication: " . ($a * $b) . "<br>";
echo "Division: " . ($a / $b) . "<br>";
echo "Modulus: " . ($a % $b) . "<br>";
echo "Exponentiation: " . ($a ** $b) . "<br><br>";

// 2. Assignment Operators
echo "<h3>Assignment Operators</h3>";
$x = 5;
echo "Initial value: $x<br>";
$x += 3;
echo "After += 3: $x<br>";
$x *= 2;
echo "After *= 2: $x<br><br>";

// 3. Comparison Operators
echo "<h3>Comparison Operators</h3>";
$val1 = 10;
$val2 = "10";
echo "== : ";
var_dump($val1 == $val2);
echo "<br>";
echo "=== : ";
var_dump($val1 === $val2);
echo "<br>";
echo "!= : ";
var_dump($val1 != $val2);
echo "<br><br>";

// 4. Logical Operators
echo "<h3>Logical Operators</h3>";
$bool1 = true;
$bool2 = false;
echo "AND (&&): ";
var_dump($bool1 && $bool2);
echo "<br>";
echo "OR (||): ";
var_dump($bool1 || $bool2);
echo "<br>";
echo "NOT (!): ";
var_dump(!$bool1);
echo "<br><br>";

// 5. Increment/Decrement
echo "<h3>Increment/Decrement</h3>";
$num = 5;
echo "Original: $num<br>";
echo "Post-increment: " . $num++ . "<br>";
echo "After post-increment: $num<br>";
echo "Pre-decrement: " . --$num . "<br><br>";

// 6. String Operators
echo "<h3>String Operators</h3>";
$str1 = "Hello";
$str2 = " World!";
echo "Concatenation: " . ($str1 . $str2) . "<br>";
$str1 .= $str2;
echo "After .= : $str1<br><br>";

// 7. Array Operators
echo "<h3>Array Operators</h3>";
$arr1 = array("a" => 1, "b" => 2);
$arr2 = array("c" => 3);
$result = $arr1 + $arr2;
echo "Union of arrays:<br>";
print_r($result);
echo "<br>";
?>
