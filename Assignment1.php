<?php

$print = "Hello PHP World";
$cr = 7;

echo $print . " " . $cr . "<br>";

$a = 10;
$b = 90;
$result = $a + $b;
echo "Result: $result<br>";

$naimat = 100;
$fahad = 100;
$sum = $naimat === $fahad;
echo "Sum: " . ($sum ? "true" : "false") . "<br>";

$x = 8;
$y = $x % 2 == 0;
echo $y ? "Even<br>" : "Odd<br>";

$a = 10;
$b = 20;
$c = $a + $b;
echo $c . "<br>";

if ($c == 30) {
    echo "Yes This is Code $c<br>";
} else {
    echo "Try Again $c<br>";
}

$age = 18;
if ($age >= 18) {
    echo "Yes You can Vote $age<br>";
} else {
    echo "No You can't Vote $age<br>";
}

$hasID = false;
if ($age >= 18 || $hasID) {
    echo "Yes You Can Enter The Club Because Your Age is $age<br>";
} else {
    echo "No You Can't Enter The Club Because You Are Under 18<br>";
}

$day = 3;
switch ($day) {
    case 1:
        echo "Monday<br>";
        break;
    case 2:
        echo "Tuesday<br>";
        break;
    case 3:
        echo "Wednesday<br>";
        break;
    case 4:
        echo "Thursday<br>";
        break;
    case 5:
        echo "Friday<br>";
        break;
    case 6:
        echo "Saturday<br>";
        break;
    case 7:
        echo "Sunday<br>";
        break;
    default:
        echo "Invalid Day<br>";
        break;
}

?>