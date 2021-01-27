<?php 
$menu = [
    "Элемент 1",
    "Элемент 2",
    [
        "Элемент 1",
        "Элемент 2"
    ],
    "Элемент 3",
    "Элемент 4",
    [
        "Элемент 1",
        "Элемент 2",
        [
            "Элемент 1",
            [
                "Суперсекретный пункт меню",
                "Второй такой же"
            ]
        ],
        "Элемент 3"
    ],
    "Элемент 5"
];

function renderMenu($arr) {
    $menuHtml = "<ul>";
    
    foreach ($arr as $el) {
        if (is_array($el)) {
            $menuHtml .= renderMenu($el);
        }
        else {
            $menuHtml .= "<li><a href='#'>{$el}</a>";
        }
    }
    $menuHtml .= "</li></ul>";
    return $menuHtml;
}
echo renderMenu($menu);