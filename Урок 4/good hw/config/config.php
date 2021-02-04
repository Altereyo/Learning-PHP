<?php
define('TEMPLATES_DIR', '../templates/');
define('ASSETS_DIR', '../public/assets');

$engineFiles = array_splice(scandir("../engine/"), 2);
foreach ($engineFiles as $file) {
    require($_SERVER['DOCUMENT_ROOT'] .'/../engine/'. $file);
}