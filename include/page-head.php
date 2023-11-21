<?php
  $breadcrumb = make_breadcrumb( $_SESSION['currentpages'], $nav_index);
  $index_page = count($breadcrumb)-1; 
?>

<header class="header header-page">
  <div class="header-style <?php echo $page_head_mode['style'];?>">
    <div class="container">
      <div class="header-page-wrapper">
        <div class="header-page-content">
          <div class="separator"></div>
          <h1 class="header-page-title"><? echo $breadcrumb[$index_page][0]; ?></h1>
          <div class="header-page-breadcrumb">
            <ul class="breadcrumb-list">
              <li class="breadcrumb-item">
                <a href="/" class="breadcrumb-link">Главная</a>
              </li>
              <?php
                for( $i=0; $i < $index_page+1; ++$i) {
                  echo '<li class="breadcrumb-separator">—</li>';					
                  if ( $i < $index_page ) {
                    echo '<li class="breadcrumb-item">';
                    echo '<a href="'.$breadcrumb[$i][1].'" class="breadcrumb-link">'.$breadcrumb[$i][0].'</a>';
                    echo '</li>';
                  } else {
                    echo '<li class="breadcrumb-item">'.$breadcrumb[$i][0].'</li>'; 
                  }                  
                }
              ?>  
            </ul>
          </div>
        </div>
        <!-- /.header-content -->
        <div class="header-page-leiba">
          <?php 
            if ( $page_head_mode['leiba_src'] !== '') {         
              echo '<picture>';        
              echo '<source type="image/webp" srcset="'.$page_head_mode['leiba_src'].'.webp'.'">';
              echo '<source type="image/jpeg" srcset="'.$page_head_mode['leiba_src'].'.png">';
              echo '<img src="'.$page_head_mode['leiba_src'].'.png'.'" alt="'.$page_head_mode['leiba_alt'].'">';
              echo '</picture>';        
            }
          ?>
        </div>
        <!-- /.header-page-leiba -->
      </div>
    </div>
    <!-- /.container -->
  </div>
</header>