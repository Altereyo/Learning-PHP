<?php

$file = file_get_contents('./template.php');

$file = str_replace("{ title }", "Главная страница - страница обо мне", $file);
$file = str_replace("{ h1 }", "Информация обо мне", $file);
$file = str_replace("{ year }", "2021", $file);

echo $file;