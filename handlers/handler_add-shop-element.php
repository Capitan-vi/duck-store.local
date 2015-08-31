<?php

header("Content-Type: text/html; charset=utf-8");

$shop_elem_title       = $_GET['shop-elem-title'];
$shop_elem_description = $_GET['shop-elem-description'];
$shop_elem_price       = $_GET['shop-elem-price'];
$shop_elem_image       = $_GET['shop-elem-image'];

$products_base = __DIR__ . "\\..\\data\\products.csv";
$user_file = $_FILES['shop-elem-image']['name'];
$upload_dir = '\\..\\data\\uploads\\';
$upload_file = $upload_dir.basename($user_file);

$fp = fopen($products_base, "a");

$new_shop_elem = "\n55;" . $shop_elem_title . "#55;" . $shop_elem_description . ";" . $shop_elem_price . ";";
$adding_shop_elem = fwrite($fp, $new_shop_elem);

if (!(move_uploaded_file($_FILES['shop-elem-image']['tmp_name'], $upload_file))) {
  $upload_file = $upload_dir."item.jpeg";
}

if ($adding_shop_elem) {
  echo "Товар занесен в базу";
} else {
  echo "Ошибка...";
}

fclose($fp);
