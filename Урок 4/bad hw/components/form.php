<?php

$messages = [
    'res' => 'File has been uploaded successfully',
    'rej' => 'Error: Cannot save uploaded file'
];
if (!empty($_FILES)) {
    $path = $_SERVER['DOCUMENT_ROOT'] . '/assets/big/' . $_FILES['newFile']['name'];

    // проверка на тип файла
    if ($_FILES['newFile']['type'] != "image/jpeg" && $_FILES['newFile']['type'] != "image/png") {
        echo "You can upload only images in .jpeg or .png<br>Go away, hackers!<br>";
        die();
    }
    // проверка на размер файла
    elseif ($_FILES['newFile']['size'] > (1024*1024*75)) {
        echo "You cannot upload images larger than 75mb<br>";
        die();
    }  

    if (move_uploaded_file($_FILES['newFile']['tmp_name'], $path)) {
        header("Location: index.php?message=res");
        
        $image = new SimpleImage();
        $image->load($path);
        $image->resizeToWidth(150);
        $image->save($_SERVER['DOCUMENT_ROOT'] . '/assets/small/' . $_FILES['newFile']['name']);
    }
    else {
        header("Location: index.php?message=rej");
    }
}
$message = $messages[$_GET['message']]
?>
<?=$message; ?>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="newFile">
    <input type="submit" value="Загрузить файл">
</form>