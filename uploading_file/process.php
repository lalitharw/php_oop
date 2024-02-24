<?php
    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["image"])){
        $file = $_FILES["image"];
        $ext = (basename($file['type']));
        print_r($file); 
        if($file["error"] > 0){
            echo "Something went wrong";
        }

        else{
            $allowed_extension = ['png','jpg',"jpeg","gif"];

            if(!in_array($ext,$allowed_extension)){
                die ("image is of different extension");
            }
            $uploadPath ="./uploads/";
            $fullpath = $uploadPath . basename($file['name']);
            $success = move_uploaded_file($file['tmp_name'],$fullpath);

            if($success){
                echo "Image uploaded successfully";
            }
            else{
                echo "Image not uploaded";
            }
        }
    }
?>