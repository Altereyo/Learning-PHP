<?php
// подключаем все файлы из папки engine
$engineFiles = array_splice(scandir("./engine/"), 2);
foreach ($engineFiles as $file) {
    require($_SERVER['DOCUMENT_ROOT'] .'/engine/'. $file);
}

$form = renderTemplate('form');
$gallery = renderTemplate('gallery', ['form'=>$form]);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/style.css">
    <title>Document</title>
</head>
<body>
    <?=$gallery?>
</body>
</html>