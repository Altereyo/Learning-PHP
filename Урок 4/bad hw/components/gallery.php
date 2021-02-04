<?php
$pictures = array_splice(scandir($_SERVER['DOCUMENT_ROOT'] . "/assets/small/"), 2);
?>
<div class="container">
    <h2>Gallery</h2>
    <?php foreach ($pictures as $img): ?>
        <a href="./assets/big/<?=$img?>" target="_blank">
            <img src="./assets/small/<?=$img?>" alt="small-image">
        </a>
    <?php endforeach; ?>
    <hr>
    <?=$form?>
</div>