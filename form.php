<?php

    if ($_FILES['files']) {
        $path = $_FILES['files']['name'];
        $upload_path = "./upload_files/$path";
        if (move_uploaded_file($_FILES['files']['tmp_name'], $upload_path) || die("Failed to upload file")) {
            echo "File uploaded successfully";
        } else {
            echo "Failed to upload file";
        }
        
        
    } else {
        die("No file uploaded");
    }
    

?>