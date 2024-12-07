<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Form</title>
</head>
<body>
    <h1>Create a File</h1>
    <form action="" method="POST">
        <label for="file-name">File Name:</label>
        <input type="text" id="file-name" name="file_name" required>
        <br><br>
        
        <label for="file-content">File Content:</label>
        <textarea id="file-content" name="file_content" rows="10" cols="30" required></textarea>
        <br><br>
        
        <button type="submit">Submit</button>
    </form>

<?php

$file_name = $_POST['file_name'];
$file_content = $_POST['file_content'];

$file = fopen($file_name,'w');
fwrite($file,$file_content);
fclose($file);

echo "File created successfully!";

?>

</body>
</html>
