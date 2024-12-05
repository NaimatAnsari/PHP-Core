<?php

echo "<h1> Login Authentication Through Conditonal Statement</h1>";

$userEmail = "naimatansari31@gmail.com";
$userPassword = 12345678910;


if ($userEmail == "naimatansari31@gmail.com" && $userPassword == 12345678910) {
    echo "You are Successfully Login This Website <br>
    UserEmail:- $userEmail <br>
    UserPassword:-$userPassword
    " ;
} else{
    echo "Please Enter the Correct Email & Password";
}

echo "<h1> Login Authentication Through Functions</h1>";



function login($email , $password){

    if ($email == "naimatansari31@gmail.com" && $password == 123456789) {
        echo "You are Successfully Login This Orginization <br>
    UserEmail:- $email <br>
    UserPassword:-$password
    " ;
    } else {
        echo "Please Enter the Correct Email & Password";
    }
    
}

login("naimatansari31@gmail.com" , 123456789);


?>