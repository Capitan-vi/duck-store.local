<aside class="column column3">
  <h2>Каталог</h2>
  <a href="add-shop-element.php" class="btn-click btn-click_orange">+ Добавить товар</a>
  <ul>
    <?php foreach ($categories as $category):
      echo '<li><a href="index.php?page=category&id='
      .$category["category_id"].'">'
      .$category["title"].'</a></li>';
    endforeach; ?>

  </ul>
</aside>
