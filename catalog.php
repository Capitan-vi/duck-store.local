<?php include_once __DIR__ . '/templates/_header.php' ?>

<header>
  <div class="container clearfix">
    <!-- логотип -->
    <a href="index.html" class="logo">Yellow Duck</a>
    <!-- меню -->
    <nav>
      <ul>
        <li><a href="">О Компании</a></li>
        <li><a href="">Каталог</a></li>
        <li><a href="">Доставка и оплата</a></li>
        <li><a href="">Контакты</a></li>
      </ul>
    </nav>
  </div>
</header>
<section>
<div class="container">
  <div class="row clearfix">
      <!-- боковое меню -->
    <aside class="column column3">
      <h2>Каталог</h2>
      <ul>
        <li><a href="#">Маленькие уточки</a></li>
        <li><a href="">Утки с моторчиком</a></li>
        <li><a href="">Подводные уточки</a></li>
        <li><a href="">Уточки ручной работы</a></li>
        <li><a href="">Говорящие уточки</a></li>
      </ul>
    </aside>
    <div class="column column9">
      <div class="catalog">
        <!-- хлебные крошки -->
        <div class="breadcrumbs">
          <a href="index.html">Магазин</a>
          <p>Мини - утки</p>
        </div>
        <div class="row clearfix">
          <!-- элементы каталога -->
          <?php
            $source_csv = __DIR__ . "\\data\\products.csv";
            $open_csv   = fopen($source_csv, 'r');
            $get_csv    = fgetcsv($open_csv, 1000, ';' );
            $products   = [];

            var_dump($get_csv);

            echo "<br><hr><hr><br>";

            function readCSV($csvFile){
              $file_handle = fopen($csvFile, 'r');
              while (!feof($file_handle) ) {
                $line_of_text[] = fgetcsv($file_handle, 1024);
              }
              fclose($file_handle);
              return $line_of_text;
            }


            $csv = readCSV($source_csv);

            foreach ($csv as $key) {
              var_dump($key);
              echo "<br><br><hr>";
            }



            fclose($open_csv);

          ?>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<footer>
  <div class="container">
    <p> © Epic Skills</p>
  </div>
</footer>
