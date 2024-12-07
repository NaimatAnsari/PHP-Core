<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="files" required>
    <button>Read File</button><br><br><br>
    </form>
<?php
 if (isset($_FILES['files'])) {
    $file = $_FILES['files']['tmp_name'];
    $myfile = fopen($file,"r") or die("Unable to open file!");
    echo fread($myfile,filesize($file));
    fclose($myfile);
 }


?>

</body>
</html>