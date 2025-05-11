<?php
$season = array("Spring", "Summer", "Fall", "Winter");
echo count($season) . "<br>";
echo "The seasons are: <br>";
for ($x = 0; $x < count($season); $x++) {
    echo $season[$x] . "<br>";
}
echo "<br>";
?>


<?php
$student = array(
    "name" => "Atharv",
    "age" => 21,
    "height" => 5.9,
    "isStudent" => true,
    "languages" => array("PHP", "Java", "Python"),
    "college" => "DY Patil College of Engineering and Technology , Kolhapur"
);
print_r(array_change_key_case($student, CASE_UPPER));
echo "<br>";
?>    

