<?php
function renderTemplate($page, $params = []) {
    extract($params);
    ob_start();
    $fileName = "./components/" . $page . ".php";
    if (file_exists($fileName)) {
        include $fileName;
    }
    return ob_get_clean();
}