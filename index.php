<?php

// Импорт продуктов
$file = __DIR__ . "/data/products.csv";
if (!file_exists($file)) {
  die("We dont have this file");
}

if (($fp = fopen($file, 'r+')) === false) {
  die("Error: while opening file");
}

$products = [];

$i = 0;
while ( ($data = fgetcsv($fp, 1000, ';')) !== false ) {
  if ($i > 0) {
    $products[$data[0]] = $data; // что здесь делается? В массив $data, который лежит в массиве $products присваивается переменная $data?
  }
  $i++;
}



// Структура сайта
if ( isset($_GET['page']) ) {
    $page = $_GET['page'];
} else {
  $page = 'main';
}

switch ($page) {
  case 'main':
    include_once 'main.php';
    break;
  case 'catalog':
    include 'catalog.php';
    break;
  case 'single-item.php':
    include 'single-item.php';
    break;

  default:
    echo "<h1>Ooops, Страница не найдена : (</h1>";
    break;
}

fclose($fp);
