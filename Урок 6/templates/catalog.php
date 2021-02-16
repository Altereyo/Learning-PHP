<h2>Каталог</h2>
<div class="catalog">
    <?php foreach ($catalog as $item): ?>
        <a class="catalog-item" href="/item/?id=<?=$item['id']?>">
            <p class="catalog-item-name"><?=$item['name']?></p>
            <img class="catalog-item-image" src="../assets/goods/<?=$item['image']?>" alt="">
            <div class="catalog-item-footer">
                <span class="catalog-item-price"><?=$item['price']?>р.</span>
                <button>Купить</button>
            </div>
        </a>
    <?php endforeach; ?>
</div>