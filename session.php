<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="post">
        Name: <input type="text" name="name"><br><br>
        Email: <input type="email" name="email"><br><br>
        Password: <input type="password" name="password"><br><br>
        <button name="button" value="set" > Set Session</button><br><br>
        <button name="button" value="display" > display Session</button><br><br>
        <button name="button" value="delete" > delete Session</button><br><br>
    </form>

    <?php
        session_start();
        
        if (isset($_POST['button'])) {
            if ($_POST['button'] == 'set') {
                $val1 = $_POST['name'];
                $val2 = $_POST['email'];
                $val3 = $_POST['password'];

                $_SESSION['name'] = $val1;
                $_SESSION['email'] = $val2;
                $_SESSION['password'] = $val3;

                echo "Session Set";
            }

            if ($_POST['button'] == 'display') {
                echo "Name: " . $_SESSION['name'] . "<br>";
                echo "Email: " . $_SESSION['email'] . "<br>";
                echo "Password: " . $_SESSION['password'] . "<br>";
            }

            if ($_POST['button'] == 'delete') {
                session_unset();
                session_destroy();
                echo "Session Deleted";
            }
        }

    ?>
</body>
</html>