<?php

function getGallery() {
    $pictures = array_splice(scandir(ASSETS_DIR . "/small/"), 2);
    return $pictures;
}