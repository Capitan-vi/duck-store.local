<?php
  include_once '/templates/_header.php';
  include_once '/templates/_site-menu.php';
?>


<main>
  <div class="container">
    <div class="banner"></div>
    <div class="row clearfix">

      <!-- боковое меню -->
      <?php include_once '/templates/_menu.php'; ?>

      <div class="column column9">
        <div class="catalog">
          <div class="row clearfix">
          <!-- элементы каталога -->

            <?php
              for ($i = 0; $i < 6; $i++):
                include '/templates/_shop-element.php';
              endfor;
            ?>

            <div class="item-block column column4">
              <a href="single-item.html" class="item">
                <img src="img/item.jpeg" alt="уточка">
              </a>
              <a href="" class="btn-basket">В Корзину</a>
            </div>
            <div class="item-block column column4">
              <a href="single-item.html" class="item">
                <img src="img/item.jpeg" alt="уточка">
              </a>
              <a href="" class="btn-basket">В Корзину</a>
            </div>
            <div class="item-block column column4">
              <a href="single-item.html" class="item">
                <img src="img/item.jpeg" alt="уточка">
              </a>
              <a href="" class="btn-basket">В Корзину</a>
            </div>
            <div class="item-block column column4">
              <a href="single-item.html" class="item">
                <img src="img/item.jpeg" alt="уточка">
              </a>
              <a href="" class="btn-basket">В Корзину</a>
            </div>
            <div class="item-block column column4">
              <a href="single-item.html" class="item">
                <img src="img/item.jpeg" alt="уточка">
              </a>
              <a href="" class="btn-basket">В Корзину</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<?php include '/templates/_footer.php'; ?>
