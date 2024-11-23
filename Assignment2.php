<?php

// Practice of Variables

$name = "Naimat Ali"; 
$age = 20;            
$height = 5.8;        
$isStudent = true;    

echo "My name is $name.<br>" . var_dump($name);
echo "I am $age years old.<br> . var_dump($age) ";
echo "My height is $height feet.<br> . var_dump($height) ";
echo "Am I a student? " . ($isStudent ? "Yes" : "No") . var_dump($isStudent) . "<br><br>";

// Practice of Data Types

$string = "Hello, World!";
$integer = 100;
$float = 45.67;
$boolean = false;
$array = [1, 2, 3, 4, 5];
$assocArray = ["name" => "Naimat", "age" => 20];

echo "String: $string<br>";
echo "Integer: $integer<br>";
echo "Float: $float<br>";
echo "Boolean: " . ($boolean ? "True" : "False") . "<br>";
echo "Array: " . implode(", ", $array) . "<br>";
echo "Associative Array: Name = " . $assocArray['name'] . ", Age = " . $assocArray['age'] . "<br><br>";

// Practice of Conditional Statements

$marks = 85; 

if ($marks >= 90) {
    echo "Grade: A+ (Excellent)<br>";
} elseif ($marks >= 80) {
    echo "Grade: A (Very Good)<br>";
} elseif ($marks >= 70) {
    echo "Grade: B (Good)<br>";
} elseif ($marks >= 60) {
    echo "Grade: C (Average)<br>";
} else {
    echo "Grade: F (Fail)<br>";
}

?>
