<?php

function getParams($page, $action) {
    $params = ['count' => 2];

    switch ($page) {
        case 'index':
            $params['name'] = 'Alex';
            break;
    
        case 'catalog':
            $params['catalog'] = getCatalog();
            break;
    
        case 'item':
            $params['formValues'] = getForm($action);
            $params['item'] = getItem();
            $params['feedback'] = getComments();
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
    
        case 'calculator':
            $params['operation'] = getOperation();
            $params['values'] = getValues();
            $params['selected'] = getOperation();
            break;
    }
    return $params;
}