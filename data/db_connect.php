<?php
  $user = 'root';
  $pass = 'root';

  $pdo = new PDO('mysql:host=localhost;dbname=duck-store;charset=utf8', $user, $pass);
  $products = $pdo -> query("SELECT * from `products`")->fetchAll();
