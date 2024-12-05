<?php

echo "<h1>Print Friend Name Using ARRAY And LOOP</h1>";

$friends = ["Muzammil Khan", "Waqas Sheikh", "Umer Anwer", "Md Shayan", "Fahad", "Habib", "Md Kamran", "Shahzaib Ahmed", "Sarim Akbar", "Md Arbaz"]; 

foreach ($friends as $friend) {
    echo "This is my <b>$friend</b> friends. <br>";
}

echo "<h1>Print Table Using LOOP</h1>";

$number = 4;

for ($i=1; $i <= 10; $i++) { 
    echo "$number x $i = " . ($number * $i) . "<br>";
}

function printFriends($data){
    echo "<h1>Print Friend Name Using ARRAY And LOOP And FUNCTION</h1>";
    foreach ($data as $key => $dost) {
        echo "This is my <b>$dost</b> friends. <br>";
    }
}

printFriends($friends);

echo "<h1>Print Friend Name Using MULTIDIMENSIONAL ASSOCIATIVE ARRAY And LOOP</h1>";

$person = [
    [
        "name" => "Naimat Ali",
        "age" => 17,
        "city" => "Karachi"
    ],
    [
        "name" => "Waqas Sheikh",
        "age" => 19,
        "city" => "Karachi"
    ],
    [
        "name" => "Umer Anwer",
        "age" => 17,
        "city" => "Karachi"
    ],
    [
        "name" => "Sarim Akbar",
        "age" => 21,
        "city" => "Karachi"
    ],
    [
        "name" => "Muzamil Khan",
        "age" => 17,
        "city" => "Karachi"
    ]

];

foreach ($person as $persons) {
    foreach ($persons as $key => $value) {
        echo "$key = $value<br>";
    }
}

echo "<h1>Print Friend Name Using MULTIDIMENSIONAL ARRAY And LOOP</h1>";

$user = [ 
    [1, "Naimat Ali" , "Software Developer"],
    [2, "Umer Anwer" , "Civil Engineer"],
    [3, "Waqas Sheikh" , "Business Men"],
    [4, "Sarim Akbar" , "Chemist"],
    [5, "Muzamil Khan" , "Trader"],
];


foreach ($user as $users) {
    foreach ($users as $i => $value) {
        echo "$i $value <br>";
    }
};


?>