<?php
define('TEMPLATES_DIR', '../templates/');
define('ASSETS_DIR', $_SERVER['DOCUMENT_ROOT'] . '/assets');

$engineDir = array_splice(scandir("../engine/"), 2);
foreach ($engineDir as $dir) {
    if (is_dir("../engine/" . $dir)) {
        $files = array_splice(scandir("../engine/" . $dir), 2);
        foreach ($files as $file) {
            require($_SERVER['DOCUMENT_ROOT'] .'/../engine/'. $dir ."/". $file);
        }
    }
    else {
        require($_SERVER['DOCUMENT_ROOT'] .'/../engine/'. $file);
    }
}