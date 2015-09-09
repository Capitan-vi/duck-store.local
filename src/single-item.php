<?php

if ( !empty($_GET['id']) && is_numeric($_GET['id']) ) {

  $id = $_GET['id'];

  $statment =  $connection->prepare('SELECT * FROM `products` WHERE id = :id');
  $statment -> execute(['id' => $id]);
  $product =  $statment->fetch(PDO::FETCH_ASSOC);

  if (!$product) {
    die('Такой утки не обнаружено :( ');
  }

  include_once __DIR__ . '/templates/_header.php';
  include_once __DIR__ . '/templates/_site-menu.php';
  include_once __DIR__ . '/templates/_single-item.php';
  include_once __DIR__ . '/templates/_footer.php';

} else {
  die("Такой утки не обнаружено :(");
}
