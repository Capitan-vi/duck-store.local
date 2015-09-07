<?php include_once __DIR__ . '/../data/db_connect.php'; ?>

<?php foreach ($products as $item): ?>
<div class="item-block column column4">
  <a href="single-item.html"
    class="item"
    title="<?=$item['id'];?>">
    <img src="img/item.jpeg" alt="уточка">
  </a>
  <div></div>
  <a href="index.php?page=single-item&id=<?=$item['title'];?>" class="btn-basket">В Корзину</a>
</div>
<?php endforeach; ?>
