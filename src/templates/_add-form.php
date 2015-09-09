<form action="add.php" method="post">
  <input type="text" name='title' value="" placeholder='Название'> <br>
  <textarea name="description" rows="5" cols="40" placeholder='Описание'></textarea> <br>
  <input type="text" name='price' value="" placeholder='Цена'> <br>
  <select name="category">
    <?php foreach ($categories as $category) {
      echo "<option value=".$category['id'].">"
      .$category['title']."</option>";
    } ?>
  </select>
  <button type="submit">Отправить</button>
</form>
