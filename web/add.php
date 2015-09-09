<?php

$src_path = __DIR__ . '/../src/';
include_once $src_path . 'utilites/db.php';

$categories = get_categories($connection);

if (!empty($_POST)) {
  try {
    $stmt = $connection->prepare(
      'INSERT INTO `products`'.
      '(`title`,`description`,`price`, `category_id`)'.
      ' VALUES (:title, :description, :price, :category_id)'
    );
    $stmt->execute([
      'title'       => $_POST['title'],
      'description' => $_POST['description'],
      'price'       => $_POST['price'],
      'category_id' => $_POST['category_id']
    ]);
  } catch (Exception $e) {
    die($e->getMessage());
  }
} else {
  include $src_path . '/templates/_add-form.php';
}
