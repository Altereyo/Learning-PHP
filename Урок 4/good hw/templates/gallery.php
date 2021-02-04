<h2>Галерея</h2>
<?php foreach ($gallery as $img): ?>
    <a class="imgLink" href="../assets/big/<?=$img?>" target="_blank">
        <img src="../assets/small/<?=$img?>" alt="small-image">
    </a>
<?php endforeach; ?>

<hr>

<?php if ($message): ?>
    <span class="message" id="<?= $_GET["message"] == 'resolve' ? 'resolveMsg' : 'errorMsg'?>"><?=$message;?></span>
<?php endif; ?>

<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="newFile">
    <input type="submit" value="Загрузить файл" name="loadImage">
</form>