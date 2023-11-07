<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&family=Noto+Sans:wght@400;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./css/normalize.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="icon" href="img/aliance.ico" type="image/x-icon" />
    <script src="./js/swiper-bundle.min.js" defer></script>
    <script src="./js/main.js" defer></script>
    <title>О компании - Aliance Production</title>
  </head>

  <body>
    <div class="mobile-menu">
      <ul class="mobile-menu-nav">
        <li class="mobile-menu-nav-item">
          <a href="./about.php" class="mobile-menu-link">О компании</a>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link">Контрактное производство</a>
          <ul class="mobile-submenu">
            <li class="mobile-submenu-item">
              <a href="#" class="mobile-submenu-link">Автомобильная химия</a>
            </li>
            <li class="mobile-submenu-item">
              <a href="#" class="mobile-submenu-link">Бытовая химия</a>
            </li>
            <li class="mobile-submenu-item">
              <a href="#" class="mobile-submenu-link"
                >Дезинфицирующие средства</a
              >
            </li>
            <li class="mobile-submenu-item">
              <a href="#" class="mobile-submenu-link">Пищевые аэрозоли</a>
            </li>
            <li class="mobile-submenu-item">
              <a href="#" class="mobile-submenu-link"
                >Косметическая продукция</a
              >
            </li>
            <li class="mobile-submenu-item">
              <a href="#" class="mobile-submenu-link">Краски аэрозольные</a>
            </li>
          </ul>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link">Собственные торговые марки</a>
          <ul class="mobile-submenu">
            <li class="mobile-submenu-item">
              <a href="#" class="mobile-submenu-link">Автохимия AG-Tech</a>
            </li>
            <li class="mobile-submenu-item">
              <a href="#" class="mobile-submenu-link">Автохимия AP</a>
            </li>
          </ul>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link">Новости</a>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link">Контакты</a>
        </li>
      </ul>
      <a href="tel:+74996861014" class="mobile-phone">+7 (499) 686-10-14</a>
      <div class="mobile-info">
        <svg class="icon24blue">
          <use href="img/sprite.svg#mark"></use>
        </svg>
        <address class="mobile-info-address">
          г. Москва, Холодильный пер. 4к1с8
        </address>
      </div>
      <!-- /.mobile-info -->
      <div class="mobile-info">
        <svg class="icon24blue">
          <use href="img/sprite.svg#mail"></use>
        </svg>
        <a href="mailto:a.dragunov@tdaliance.ru" class="mobile-info-email">
          a.dragunov@tdaliance.ru
        </a>
      </div>
      <!-- /.mobile-info -->
      <div class="mobile-social">
        <a href="#">
          <svg class="icon24blue">
            <use href="img/sprite.svg#vk"></use>
          </svg>
        </a>
        <a href="#">
          <svg class="icon24blue">
            <use href="img/sprite.svg#inst"></use>
          </svg>
        </a>
      </div>
      <!-- /.mobile-info -->
    </div>

    <nav class="navbar navbar-light">
      <a href="#" class="mobile-menu-toggle">
        <div class="mobile-menu-line"></div>
        <div class="mobile-menu-line"></div>
        <div class="mobile-menu-line"></div>
      </a>
      <a href="./" class="header-logo">
        <svg class="logo-svg logo-light">
          <use href="img/sprite.svg#logo-light"></use>
        </svg>
        <svg class="logo-svg logo-dark">
          <use href="img/sprite.svg#logo-dark"></use>
        </svg>
      </a>
      <ul class="header-nav">
        <li class="header-nav-item">
          <a href="./about.php" class="header-nav-link">О компании</a>
        </li>
        <li class="header-nav-item">
          <a href="#" class="header-nav-link">Контрактное производство</a>
        </li>
        <li class="header-nav-item">
          <a href="#" class="header-nav-link">Собственные торговые марки</a>
        </li>
        <li class="header-nav-item">
          <a href="#" class="header-nav-link">Новости</a>
        </li>
        <li class="header-nav-item">
          <a href="#" class="header-nav-link">Контакты</a>
        </li>
      </ul>
      <div class="header-phone">
        <svg class="icon24blue">
          <use href="img/sprite.svg#phone"></use>
        </svg>
        <a href="tel:+74996861014" class="header-phone-link">
          +7 (499) 686-10-14
        </a>
      </div>
      <!-- /.header-phone -->
      <button class="navbar-button button" data-toggle="modal">
        <svg width="24" height="24" class="button-icon">
          <use href="img/sprite.svg#phone"></use>
        </svg>
        <span class="button-text">Получить консультацию</span>
      </button>
    </nav>
    <!-- /.navbar -->

    <header class="header header-page">
      <div class="header-style bg-grey">
        <div class="container">
          <div class="header-page-wrapper">
            <div class="header-page-content">
              <div class="separator"></div>
              <h1 class="header-page-title">о компании</h1>
              <div class="header-page-breadcrumb">
                <ul class="breadcrumb-list">
                  <li class="breadcrumb-item">
                    <a href="#" class="breadcrumb-link">Главная</a>
                  </li>
                  <li class="breadcrumb-separator">—</li>
                  <li class="breadcrumb-item">О компании</li>
                </ul>
              </div>
            </div>
            <!-- /.header-content -->
            <div class="header-page-leiba"></div>
            <!-- /.header-page-leiba -->
          </div>
        </div>
        <!-- /.container -->
      </div>
    </header>

    <header class="header header-page">
      <div class="header-style bg-grey">
        <div class="container">
          <div class="header-page-wrapper">
            <div class="header-page-content">
              <div class="separator"></div>
              <h1 class="header-page-title">Автомобильная химия</h1>
              <div class="header-page-breadcrumb">
                <ul class="breadcrumb-list">
                  <li class="breadcrumb-item">
                    <a href="#" class="breadcrumb-link">Главная</a>
                  </li>
                  <li class="breadcrumb-separator">—</li>
                  <li class="breadcrumb-item">
                    <a href="#" class="breadcrumb-link">
                      Контрактное производство
                    </a>
                  </li>
                  <li class="breadcrumb-separator">—</li>
                  <li class="breadcrumb-item">Автомобильная химия</li>
                </ul>
              </div>
            </div>
            <div class="header-page-leiba">
              <img
                src="img/in_page.png"
                alt="графитовая смазка"
                class="header-page-leiba"
              />
            </div>
            <!-- /.header-page-leiba -->
          </div>
        </div>
        <!-- /.container -->
      </div>
    </header>

    <header class="header header-page">
      <div class="header-style header-page-image">
        <div class="container">
          <div class="header-page-wrapper">
            <div class="header-page-content">
              <div class="separator"></div>
              <h1 class="header-page-title">
                Современная методология разработки одухотворила всех причастных
              </h1>
              <div class="header-page-breadcrumb">
                <ul class="breadcrumb-list">
                  <li class="breadcrumb-item">
                    <a href="#" class="breadcrumb-link">Главная</a>
                  </li>
                  <li class="breadcrumb-separator">—</li>
                  <li class="breadcrumb-item">
                    <a href="#" class="breadcrumb-link"> Блог </a>
                  </li>
                  <li class="breadcrumb-separator">—</li>
                  <li class="breadcrumb-item">
                    Современная методология разработки одухотворила всех
                    причастных
                  </li>
                </ul>
              </div>
            </div>
            <div class="header-page-leiba"></div>
            <!-- /.header-page-leiba -->
          </div>
        </div>
        <!-- /.container -->
      </div>
    </header>

    <?php include_once('footer.php'); ?>