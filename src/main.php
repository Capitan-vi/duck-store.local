<?php
  $statement = $connection -> prepare('SELECT * FROM `products`');
  $statement->execute();

  $products = $statement->fetchAll(PDO::FETCH_ASSOC);

var_dump($src_path);
  include_once __DIR__ . '/templates/_header.php';
  include_once __DIR__ . '/templates/_site-menu.php';

  include_once __DIR__ . '/templates/_main.php';
  include_once __DIR__ . '/templates/_footer.php';
