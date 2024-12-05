<?php

if (isset($_POST['submit'])) {

    $name = $_POST['username'];
    $fathername = $_POST['fathername'];
    $email = $_POST['useremail'];
    $password = $_POST['userpassword'];
    $dob = $_POST['userdob'];
    $gender = $_POST['gender'];
    $hobbies = $_POST['hobbies'];
  
    echo "<h1>User Information Through Form</h1>";

    echo "Name: " . $name . "<br> <br>";
    echo "Father Name: " . $fathername . "<br> <br>";
    echo "Email: " . $email . "<br> <br>";
    echo "Password: " . $password . "<br> <br>";
    echo "Date of Birth: " . $dob . "<br> <br>";
    echo "Gender: " . $gender . "<br> <br>";
    echo "User Hobbies are:-";
    foreach ($hobbies as $value) {
        echo "User Hobbies are:"."<i><b>$value</b></i>, ";
    }
  } else {
    echo "Please, Required fields are missing.";
  }  



// $name = $_POST['username'];
// $fathername = $_POST['fathername'];
// $email = $_POST['useremail'];
// $password = $_POST['userpassword'];
// $dob = $_POST['userdob'];
// $gender = $_POST['gender'];
// $hobbies = $_POST['hobbies'];

// echo "Name: " . $name . "<br>";
// echo "Father Name: " . $fathername . "<br>";
// echo "Email: " . $email . "<br>";
// echo "Password: " . $password . "<br>";
// echo "Date of Birth: " . $dob . "<br>";
// echo "Gender: " . $gender . "<br>";
// foreach ($hobbies as $value) {
//     echo "User Hobbies are: <i><b>$value</b></i>, ";
// }

?>

