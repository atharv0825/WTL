<?php
class Person {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function displayInfo() {
        echo "Name: " . $this->name . "<br>";
        echo "Age: " . $this->age . "<br>";
    }
}

$person1 = new Person("Atharv", 21);
$person2 = new Person("Piyush", 21);

$person1->displayInfo();
echo "<br>";
$person2->displayInfo();
?>
