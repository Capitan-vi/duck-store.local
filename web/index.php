<?php

$src_path = __DIR__ . '/../src/';
include_once $src_path . 'utilites/db.php';
include_once $src_path . 'utilites/url.php';

$categories = get_categories($connection);

$page = get_page();
// Структура сайта
switch ($page) {
  case 'main':
    include $src_path . 'main.php';
    break;
  case 'catalog':
    include $src_path . 'catalog.php';
    break;
  case 'product':
    include $src_path . 'single-item.php';
    break;
  default:
    echo "<h1>Ooops, Страница не найдена : (</h1>";
    var_dump(get_page());
    var_dump($page);
    var_dump($src_path);
    break;
}
