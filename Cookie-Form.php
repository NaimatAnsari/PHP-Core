<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="name" placeholder="Enter Your Name"> <br> <br>
        <input type="email" name="email" placeholder="Enter Your Email"> <br> <br>
        <button name="button" value="set">Set Cookie</button> <br> <br>
        <button name="button" value="display">Display Cookie</button> <br> <br>
        <button name="button" value="delete">Delete Cookie</button> <br> <br>
    </form>

    <?php

if(isset($_POST['button'])){
    if ($_POST['button'] == "set") {
        $value1 = $_POST['name'];
        setcookie('name',$value1 , time() + 3600);
        $value2 = $_POST['email'];
        setcookie('email',$value2 , time() + 3600);
        echo "Cookie Set";
    }


    if ($_POST['button'] == "display") {
       if (isset($_COOKIE['name']) && isset($_COOKIE['email'])) {
            echo "Name: " . $_COOKIE['name'] . "<br>";
            echo "Email: " . $_COOKIE['email'];
       }
    }

    if ($_POST['button'] == "delete") {
        if (isset($_COOKIE['name']) && isset($_COOKIE['email'])) {
            setcookie('name', '' , -1);
            setcookie('email', '' , -1);
        }
     }
}

?>

</body>
</html>