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
                   echo '<li class="breadcrumb-item">';
                   echo ( $i < $index_page ) ?             
                    '<a href="'.$breadcrumb[$i][1].'" class="breadcrumb-link">'.$breadcrumb[$i][0].'</a>' :
                    '<li class="breadcrumb-item">'.$breadcrumb[$i][0].'</li>'; 
                   echo '</li>';
                  }
              ?>  
            </ul>
          </div>
        </div>
        <!-- /.header-content -->
        <div class="header-page-leiba">
        <img 
            src="<?php echo $page_head_mode['leiba_src'];?>"
            alt="<?php echo $page_head_mode['leiba_alt'];?>"               
          />
        </div>
        <!-- /.header-page-leiba -->
      </div>
    </div>
    <!-- /.container -->
  </div>
</header>