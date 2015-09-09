<?php
  include_once __DIR__ . '/templates/_header.php';
  include_once __DIR__ . '/templates/_site-menu.php';
?>


<main>
  <form action="handlers/handler_add-shop-element.php" method="post" enctype="multipart/form-data">
    <input name="shop-elem-title" type="text" placeholder="Название товара">
    <br>
    <textarea name="shop-elem-description" rows="3" placeholder="Описание товара"></textarea>
    <br>
    <input name="shop-elem-price" type="text" placeholder="Цена на товар">
    <br>
    <input type="file" name="shop-elem-image" accept="image/*">
    <br>
    <br>
    <input type="submit" value="Добавить товар в базу">
  </form>
</main>

<?php include_once __DIR__ . '/templates/_footer.php'; ?>
