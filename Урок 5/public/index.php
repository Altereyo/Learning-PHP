<?php

include "../config/config.php";

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'index';
}

$params = [
    'count' => 2
];

switch ($page) {
    case 'index':
        $params['name'] = 'Alex';
        break;

    case 'catalog':
        $params['catalog'] = getCatalog();
        break;

    case 'gallery':
        if (!empty($_FILES)) upload();
        $params['gallery'] = getGallery();
        $params['message'] = uploadStatus();
        $params['messageId'] = uploadMessageId();
        break;
    case 'image':
        updatePopularity();
        $params['name'] = getImageInfo('name');
        $params['popularity'] = getImageInfo('popularity');
        break;
}

echo render($page, $params);