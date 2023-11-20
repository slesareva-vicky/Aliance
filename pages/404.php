<?php
  $breadcrumb = make_breadcrumb( $_SESSION['currentpages'], $nav_index);
  $index_page = count($breadcrumb)-1; 
?>
<div class="err404">
  <div class="container">
    <div class="err404-wrapper">
      <div class="err404-number"><? echo $breadcrumb[$index_page][0]; ?></div>
      <div class="err404-messange">Страница не найдена</div>
      <p class="err404-text">
        Мы не смогли найти страницу с таким адресом, попробуйте перейти на
        главную или напишите нам.
      </p>
      <a href="/" class="button err404-button">Вернуться на главную</a>
    </div>
  </div>
  <!-- /.container -->
</div>
<!-- /.404 -->