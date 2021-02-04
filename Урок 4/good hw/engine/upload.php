<?php

$status = [
    "resolve" => "File has been uploaded successfully",
    "reject" => "Error: Cannot save uploaded file",
    "error_size" => "You cannot upload images larger than 75mb",
    "error_mime" => "You can upload only images in .jpeg or .png. Go away, hackers!"
];

function upload()
{
    // проверка на тип файла
    if ($_FILES["newFile"]["type"] != "image/jpeg" && $_FILES["newFile"]["type"] != "image/png") {
        header("Location: /?page=gallery&message=error_mime");
        die();
    }
    // проверка на размер файла
    elseif ($_FILES["myfile"]["size"] > (1024*1024*50)) {
        header("Location: /?page=gallery&message=error_size");
        exit;
    }
    
    $path = ASSETS_DIR . "/big/" . $_FILES["newFile"]["name"];
    
    
    if (move_uploaded_file($_FILES["newFile"]["tmp_name"], $path)) {
        header("Location: /?page=gallery&message=resolve");
        
        $image = new SimpleImage();
        $image->load($path);
        $image->resizeToWidth(150);
        $image->save(ASSETS_DIR . "//small/" . $_FILES["newFile"]["name"]);
        
        die();
    } else {
        header("Location: /?page=gallery&message=reject");
        die();
    }
}