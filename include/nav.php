<?php
  error_reporting(E_ALL);
  include_once ('include/helper.php');

  session_start();
  // установка текущей страницы
  $tcurrentpath ='pages';
  $tcurrentpages = preg_replace(patternPages,"", $_SERVER['REQUEST_URI']);
  
  // переход на страницы
  if ( $tcurrentpages =='/index' || $tcurrentpages =='/') {
    $_SESSION['currentpath']='';	
    $_SESSION['currentpages']='/index';	
  }elseif ( is_file( page_php($tcurrentpath,$tcurrentpages) )) {
    $_SESSION['currentpath']=$tcurrentpath;
    $_SESSION['currentpages']=$tcurrentpages;  
  }else { 
    $_SESSION['currentpath']=$tcurrentpath;	
    $_SESSION['currentpages']='/404';	         
  }

  $nav_index=array(
    '404'=>'/404',
    'О компании'=>'/about',
    'Контрактное производство'=>'/contract',
    'Автомобильная химия'=>'/contract/avtohim',
    'Бытовая химия'=>'/404',
    'Дезинфицирующие средства'=>'/404',
    'Пищевые аэрозол'=>'/404',
    'Косметическая продукция'=>'/404',
    'Краски аэрозольны'=>'/404',
    'Собственные торговые марки'=>'/own',
    'Автохимия AG-Tech'=>'/own/ag-tech',
    'Автохимия AP'=>'/404',      
    'Новости'=>'/404',
    'Контакты'=>'/contact',
    'Блог'=>'/blog',
    "Современная методология разработки одухотворила всех причастных"=>'/blog/more', 
    "Политика конфиденциальности"=>'/politics',
    "Aliance Production: Комплексное обеспечение товарами и расходными материалами бизнеса"=>'/index',      
  );	
  $title_page = array_search($_SESSION['currentpages'],$nav_index) ;
  
  /* пункты меню */
  $main_menu=array(
    'О компании'=>['/about'],
    'Контрактное производство'=>['/contract',[
      'Автомобильная химия'=>'/contract/avtohim',
      'Бытовая химия'=>'/404',
      'Дезинфицирующие средства'=>'/404',
      'Пищевые аэрозол'=>'/404',
      'Косметическая продукция'=>'/404',
      'Краски аэрозольны'=>'/404',
    ]],
    'Собственные торговые марки'=>['/own',[
      'Автохимия AG-Tech'=>'/own/ag-tech',
      'Автохимия AP'=>'/404',
      ]],
    'Новости'=>['/404'],
    'Контакты'=>['/contact']
  );	 
  

  // режимы заголовков страниц
  $page_head_mode=[
    'style' =>'',
    'leiba_src' =>'',
    'leiba_alt' =>''
  ];

 ?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin /> 
    <link rel="stylesheet" href="/css/css2.css" />   
    <link rel="stylesheet" href="/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="/css/normalize.css" />     
    <link rel="stylesheet" href="/css/style.css" />    
    <link rel="icon" href="/img/aliance.ico" type="image/x-icon" />
    <script src="/js/modernizr-custom.js"></script>
    <script src="/js/swiper-bundle.min.js" defer></script>
    <script src="/js/just-validate.production.min.js" defer></script>
    <script src="/js/helper.js" defer></script>
    <script src="/js/main.js" defer></script>
    <title><?php echo $title_page; ?></title>
    <?php 
      echo "<style>";
      switch ($_SESSION['currentpages']) {
        case "/404";
          echo "
          .cta {
            display: none;
          }          
          .footer {
            margin-top: 146px;
          }
          @media (max-width: 380px) {
            .footer {
              margin-top: 91px;
            }
          }
          ";
          break;

        case "/about";
          echo "
          .founder-button-link {
            display: none;
          }
          .section.clients {
            margin-top: 150px;
          }
          @media (max-width: 576px) {
            .section.founder {
              margin-top: 71px;
            }
            .founder-photo {
              margin-bottom: 13px;
            }
            .section.clients {
              margin-top: 100px;
            }
            section.cta {
              margin-top: 96px;
            }
          }
          ";
          break;

        case "/contract";
          echo "
          .cards {
            margin-top: 98px;
          }
          @media (max-width: 768px) {
            .cards {
              margin-top: 49px;
            }
            section.cta {
              margin-top: 96px;
              padding-top: 0;
            }
          }
          ";
          break;

        case "/contract/avtohim";
          echo "
          section.centr {
            margin-top: 96px;
          }
          section.clients {
            margin-top: 124px;
          }       
          @media (max-width: 992px) {
            section.clients {
              margin-top: 101px;
            }
          }       
          @media (max-width: 820px) {
            section.cta {
              margin-top: 95px;
            }
          }
          @media (max-width: 768px) {
            section.section-light {
              margin-top: 100px;
            }
          }
          @media (max-width: 576px) {
            section.centr {
              margin-top: 42px;
            }
          }
          ";
          break;

        case "/own";
          echo "
          .trademark-cards {
            margin-top: 98px;
          }
          @media (max-width: 576px) {
            .trademark-cards {
              margin-top: 50px;
            }
          }
          ";
          break;

        case "/own/ag-tech";
          echo "
          section.centr {
             margin-top: 124px;
           }
           section.clients {
             margin-top: 124px;
           }
           @media (max-width: 768px) {
             section.section-light {
               margin-top: 101px;
             }
           }
           @media (max-width: 576px) {
             section.centr {
               margin-top: 76px;
             }
             section.cta {
              margin-top: 96px;
             }
           }         
           @media (max-width: 992px) {
             section.clients {
               margin-top: 100px;
             }             
           }

           @media (max-width: 1200px) {
             .book-content .section-title {
               font-size: 36px;
             }
           }
          ";
          break;
        
        case "/blog/more"; 
          echo "
          .blog-slider-footer {
            justify-content: flex-end;
          }
          .blog-slider-footer .button-link {
            display: none;
          }          
          ";
          break;

        case "/politics";          
          echo "
          .cta {
            display: none;
          }
          .footer {
            margin-top: 126px;
          }
          @media (max-width: 380px) {
            .footer {
              margin-top: 84px;
            }
            .header-page-title {
              max-width: 315px;
            }
          }
          ";
          break;        
      }
      echo "</style>";
    ?>
  </head>

  <body <?php echo ($_SESSION['currentpages']=='/index') ? 'class="front-page"': "" ;?> > 
    <div class="mobile-menu">
      <ul class="mobile-menu-nav">
      <?php
          foreach($main_menu as $name=>$item) {						
            echo '<li class="mobile-menu-nav-item">'.           
               '<a href="'.$item[0].'" class="mobile-menu-link">'.$name.'</a>'; 
               if (count($item)>1) { 
                echo '<ul class="mobile-submenu">';
                foreach($item[1] as $subname=>$subitem) {						
                  echo '<li class="mobile-submenu-item">'.           
                     '<a href="'.$subitem.'" class="mobile-submenu-link">'.$subname.'</a>'. 
                 '</li>';
                }                
                echo '</ul>';
               }
            echo '</li>';
          }
        ?>	        
      </ul>
      <a href="tel:+74996861014" class="mobile-phone">+7 (499) 686-10-14</a>
      <div class="mobile-info">
        <svg class="icon24blue">
          <use href="/img/sprite.svg#mark"></use>
        </svg>
        <address class="mobile-info-address">
          г. Москва, Холодильный пер. 4к1с8
        </address>
      </div>
      <!-- /.mobile-info -->
      <div class="mobile-info">
        <svg class="icon24blue">
          <use href="/img/sprite.svg#mail"></use>
        </svg>
        <a href="mailto:example@example.com" class="mobile-info-email">
          Example Email
        </a>
      </div>
      <!-- /.mobile-info -->
      <div class="mobile-social">
        <a href="/404">
          <svg class="icon24blue">
            <use href="/img/sprite.svg#vk"></use>
          </svg>
        </a>
        <a href="/404">
          <svg class="icon24blue">
            <use href="/img/sprite.svg#inst"></use>
          </svg>
        </a>
      </div>
      <!-- /.mobile-info -->
    </div>

    <nav class="navbar <?php echo ($_SESSION['currentpages']=='/index') ? "": "navbar-light";?>">
      <a href="/404" class="mobile-menu-toggle">
        <div class="mobile-menu-line"></div>
        <div class="mobile-menu-line"></div>
        <div class="mobile-menu-line"></div>
      </a>
      <a href="/" class="header-logo">
        <svg class="logo-svg logo-light">
          <use href="/img/sprite.svg#logo-light"></use>
        </svg>
        <svg class="logo-svg logo-dark">
          <use href="/img/sprite.svg#logo-dark"></use>
        </svg>
      </a>
         
      <ul class="header-nav">   
        <?php
          foreach($main_menu as $name=>$item) {						
            echo '<li class="header-nav-item">'.           
               '<a href="'.$item[0].'" class="header-nav-link">'.$name.'</a>'. 
           '</li>';
          }
        ?>	        
      </ul>
      
      <div class="header-phone">
        <svg class="icon24blue">
          <use href="/img/sprite.svg#phone"></use>
        </svg>
        <a href="tel:01234567890" class="header-phone-link">
          01234 567 890
        </a>
      </div>
      <!-- /.header-phone -->
      <button class="navbar-button button" data-modal="modal-form">
        <svg width="24" height="24" class="button-icon">
          <use href="/img/sprite.svg#phone"></use>
        </svg>
        <span class="button-text">Получить консультацию</span>
      </button>
    </nav>
    <!-- /.navbar -->
