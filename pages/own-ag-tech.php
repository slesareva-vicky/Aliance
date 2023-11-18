<?php  
  $page_head_mode['style'] = 'bg-grey';
  $page_head_mode['leiba_src'] = "/img/in_page";
  $page_head_mode['leiba_alt'] = "графитовая смазка";
?>
<style>
  section.centr {
    margin-top: 149px;
  }
  section.clients {
    margin-top: 151px;
  }
  @media (max-width: 768px) {
    section.section-light {
      margin-top: 101px;
    }
  }
  @media (max-width: 576px) {
    section.centr {
      margin-top: 99px;
    }
  }

  @media (max-width: 992px) {
    section.clients {
      margin-top: 100px;
    }
  }
</style>

<?php  include_once ('include/page-head.php'); ?>

<section class="ag-tech">
  <div class="container">
    <div class="ag-tech-wrapper">
      <div class="ag-tech-img">
        <picture>
          <source type="image/webp" srcset="/img/ag-tech.webp" >
          <source type="image/jpeg" srcset="/img/ag-tech.png" >
          <img
            src="/img/ag-tech.png"
            alt="Фото ag-tech производства"
            class="ag-tech-img-desktop"
          />
        </picture>    
        
        <picture>
          <source type="image/webp" srcset="/img/ag-tech-mb.webp" >
          <source type="image/jpeg" srcset="/img/ag-tech-mb.jpg" >
          <img
            src="/img/ag-tech-mb.jpg"
            alt="Фото ag-tech производства"
            class="ag-tech-img-mobile"
          />          
        </picture>        
      </div>
      <div class="ag-tech-content">
        <div class="separator"></div>
        <h2 class="section-title">
          Собственное производство автохимия AG-Tech
        </h2>
        <div class="ag-tech-text">
          <p class="ag-tech-text-paragraph">
            Прежде всего, начало повседневной работы по формированию позиции
            однозначно фиксирует необходимость приоритизации разума над
            эмоциями. Кстати, представители современных социальных резервов
            неоднозначны и будут описаны максимально подробно.
          </p>
          <p class="ag-tech-text-paragraph">
            Но социально-экономическое развитие напрямую зависит от
            поставленных обществом задач! Безусловно, постоянный
            количественный рост и сфера нашей активности предоставляет
            широкие возможности для системы обучения кадров, соответствующей
            насущным потребностям. В целом, конечно, выбранный нами
            инновационный путь обеспечивает широкому кругу (специалистов)
            участие в формировании своевременного выполнения сверхзадачи. А
            ещё элементы политического процесса представлены в исключительно
            положительном свете. Высокий уровень вовлечения представителей
            целевой аудитории является четким доказательством простого
            факта: высокотехнологичная концепция общественного уклада
            создаёт предпосылки для глубокомысленных рассуждений. В своём
            стремлении повысить качество жизни, они забывают, что дальнейшее
            развитие различных форм деятельности, а также свежий взгляд на
            привычные вещи - безусловно открывает новые горизонты для
            поставленных обществом задач.
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- /.containet -->
</section>
<!-- /.ag-tech -->

<div class="features features_black">
  <?php include_once ('include/features.php'); ?>
</div>
<!-- /.features -->

<section class="section book">
  <div class="book-wrapper bg-grey">
    <div class="container-vs book-container">
      <div class="book-content-wrapper">
        <div class="book-content">
          <div class="separator"></div>
          <h2 class="section-title">
            Генеральный дистрибьютор премиальной автохимии
          </h2>
          <p class="book-text">
            Внезапно, активно развивающиеся страны третьего мира могут быть
            объявлены нарушающими общечеловеческие нормы этики и морали.
          </p>
          <ul class="book-list">
            <li class="book-list-item">
              <svg class="icon24_38">
                <use href="/img/sprite.svg#him"></use>
              </svg>
              Полное описание товаров
            </li>
            <li class="book-list-item">
              <svg class="icon24_38">
                <use href="/img/sprite.svg#car"></use>
              </svg>
              Актуальные цены
            </li>
            <li class="book-list-item">
              <svg class="icon24_38">
                <use href="/img/sprite.svg#brush"></use>
              </svg>
              Лаки и краски
            </li>
            <li class="book-list-item">
              <svg class="icon24_38">
                <use href="/img/sprite.svg#him"></use>
              </svg>
              Химические производства
            </li>
          </ul>
        </div>
        <button class="book-button button">
          <svg class="icon24">
            <use href="/img/sprite.svg#download"></use>
          </svg>
          Скачать каталог
        </button>
      </div>
      <picture>
        <source type="image/webp" srcset="/img/book.webp" >
        <source type="image/jpeg" srcset="/img/book.png" >
        <img src="/img/book.png" alt="Фото доктора" class="book-photo" />
      </picture>   
      <picture>
        <source type="image/webp" srcset="/img/book-mb.webp" >
        <source type="image/jpeg" srcset="/img/book-mb.png" >
        <img
          src="/img/book-mb.png"
          alt="Фото доктора"
          class="book-photo-mobile"
        />
      </picture>
    </div>
    <!-- /.container-vs book-img -->
  </div>
</section>
<!-- /.section book -->


<section class="centr">
  <?php include_once ('include/centr.php'); ?>
</section>
<!-- /.centr -->

<section class="section section-light">
  <?php include_once ('include/steps.php'); ?>
</section>
<!-- /.section section-light -->    

<section class="section clients">
  <?php include_once ('include/clients.php'); ?>
</section>
<!-- /.section clients -->    
