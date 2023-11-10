<?php
  $breadcrumb = make_breadcrumb( $_SESSION['currentpages'], $nav_index);
  $index_page = count($breadcrumb)-1; 
?>
<style>
  .cta {
    display: none;
  }
</style>

<header class="header header-page">
  <div class="container">
Упс...
<h3><? echo $breadcrumb[$index_page][0]; ?></h3>
  </div>
  <!-- /.container -->
</header>