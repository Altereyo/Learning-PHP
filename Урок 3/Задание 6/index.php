<?php

$menu = renderTemplate('menu');
$about = renderTemplate('about');
echo renderTemplate('layout', $menu, $about);

function renderTemplate($page, $menu = "", $content = "") {
    ob_start();
    include $page . ".php";
    return ob_get_clean();
}