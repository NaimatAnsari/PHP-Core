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

$number = 2;
for ($i = 1; $i <= 10; $i++) {
    $table = $number * $i;
    echo "$number x $i = $table <br>";
}

$number = 10;
for ($i = 1; $i <= 10; $i++) {
    $table = $number * $i;
    echo "$number x $i = $table <br>";
}

$number = 20;
for ($i = 1; $i <= 10; $i++) {
    $table = $number * $i;
    echo "$number x $i = $table <br>";
}

function add($a, $b)
{
    return $a + $b;
}

echo add(50, 50);

$ten = 100;

$result = (10 * 10 == $ten) ?  "YES Ten is win" : "NOT Win ";


$ten = 10;

$greet = fn($num) => $num * $ten;

echo $greet(90);

$number = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

echo $number[0];


// String Length
$string = "Allah hu akbar";
echo strlen($string);

// String Part Show
$string = "Allah hu akbar";
echo substr($string, 0, 6);

// String Position
$string = "Allah hu akbar";
echo strpos($string, "hu");

// String Replace
$string = "Mujhe programming pasand hai";
echo str_replace("Programming", "Coding", $string);

// String Replace
$string = "Mujhe programming pasand hai";
echo str_replace("Programming", "Coding", $string);

// String InterPlation
$name = "Fourtuner Legender";
$car = "Mujhe $name pasand hai";
echo $car;

class Person {
    public $name ;
    public $age ;
    public $desigination;


    public function introduce(){
        echo "Hi, My name is" . $this->name . "and I am" . $this->age . "year Old" . "I am a" . $this->desigination ;
    }
}

 $person1 = new Person();
 $person1->name = "Waqas Sheikh";
 $person1->age = 19;
 $person1->desigination = "Business Men";
 $person1->introduce();

 $person2 = new Person();
 $person2->name = "Naimat Ansari";
 $person2->age = 17;
 $person2->desigination = "Software Developer";
 $person2->introduce();

 $person3 = new Person();
 $person3->name = "Muzamil Khan";
 $person3->age = 17;
 $person3->desigination = "Trader";
 $person3->introduce();
 
 $person4 = new Person();
 $person4->name = "Umer Anwer";
 $person4->age = 17;
 $person4->desigination = "Civil Engineer";
 $person4->introduce();

 $person5 = new Person();
 $person5->name = "Sarim Akbar";
 $person5->age = 21;
 $person5->desigination = "Chemist";
 $person5->introduce();

?>
