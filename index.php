<?php

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
