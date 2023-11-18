<?php  
  $page_head_mode['style'] = 'bg-grey';
?> 
<style>
  .founder-button-link {
    display: none;
  }
  .section.clients {
    margin-top: 150px;
  }
  @media (max-width: 576px) {
    .section.founder {
      margin-top: 69px;
    }
    .founder-photo {
      margin-bottom: 13px;
    }
    .section.clients {
      margin-top: 99px;
    }
  }
</style>

<?php  include_once ('include/page-head.php'); ?>

<section class="section expert">
  <div class="container-vs expert-img">
    <picture>
      <source type="image/webp" srcset="/img/expert.webp" >
      <source type="image/jpeg" srcset="/img/expert.png" >
      <img src="/img/expert.png" alt="Фото экспертов" class="expert-photo" />
    </picture>    
  </div>
  <!-- /.container-vs expert-img -->
  <div class="container">
    <div class="expert-content-wrapper">
      <div class="expert-content">
        <div class="separator"></div>
        <h2 class="section-title">
          мы - эксперты в области производства химии
        </h2>
        <p class="expert-text">
          Разнообразный и богатый опыт говорит нам, что перспективное
          планирование однозначно фиксирует необходимость поставленных
          обществом задач! Есть над чем задуматься: ключевые особенности
          структуры проекта могут быть объединены в целые кластеры себе
          подобных. Интерактивные прототипы, которые представляют собой
          яркий пример континентально-европейского типа политической
          культуры, будут описаны максимально подробно. Значимость этих
          проблем настолько очевидна, что перспективное планирование играет
          важную роль в формировании системы массового участия.
        </p>
      </div>
    </div>
  </div>
  <!-- /.container -->
</section>
<!-- /.section expert -->

<div class="features features_black">
  <?php include_once ('include/features.php'); ?>
</div>
<!-- /.features -->

<section class="factory">
  <div class="container">
    <div class="factory-wrapper">
      <div class="factory-content">
        <div class="separator"></div>
        <h2 class="factory-title">Наше производство</h2>
        <div class="factory-img">
          <picture>
            <source type="image/webp" srcset="/img/factory.webp" >
            <source type="image/jpeg" srcset="/img/factory.png" >
            <img src="/img/factory.png" alt="Фото сотрудницы" />
          </picture>          
        </div>
        <p class="factory-text">
          Предварительные выводы неутешительны: разбавленное изрядной долей
          эмпатии, рациональное мышление обеспечивает широкому кругу
          (специалистов) участие в формировании глубокомысленных
          рассуждений. Но граница обучения кадров создаёт необходимость
          включения в производственный план целого ряда внеочередных
          мероприятий с учётом комплекса кластеризации усилий.
        </p>
        <p class="factory-text">
          Реализация намеченных плановых заданий, а также свежий взгляд на
          привычные вещи - безусловно открывает новые горизонты для
          соответствующих условий активизации. Предварительные выводы
          неутешительны: экономическая повестка сегодняшнего дня требует
          анализа анализа существующих паттернов поведения.
        </p>
        <ul class="factory-list">
          <li class="factory-list-item">
            <svg class="icon30">
              <use href="/img/sprite.svg#car"></use>
            </svg>
            Автомобильная химия
          </li>
          <li class="factory-list-item">
            <svg class="icon30">
              <use href="/img/sprite.svg#home"></use>
            </svg>
            Бытовая химия
          </li>
          <li class="factory-list-item">
            <svg class="icon30">
              <use href="/img/sprite.svg#dis"></use>
            </svg>
            Дезинфицирующие средства
          </li>
          <li class="factory-list-item">
            <svg class="icon30">
              <use href="/img/sprite.svg#aerosol"></use>
            </svg>
            Пищевые аэрозоли
          </li>
          <li class="factory-list-item">
            <svg class="icon30">
              <use href="/img/sprite.svg#cosmetic"></use>
            </svg>
            Косметическая продукция
          </li>
          <li class="factory-list-item">
            <svg class="icon30">
              <use href="/img/sprite.svg#brush"></use>
            </svg>
            Краски аэрозольные
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- /.container -->
</section>
<!-- /.factory -->

<section class="section founder">
  <?php include_once ('include/founder.php'); ?>
</section>
<!-- /.section founder -->    

<section class="centr">
  <?php include_once ('include/centr.php'); ?>
</section>
<!-- /.centr -->

<section class="section clients">
  <?php include_once ('include/clients.php'); ?>
</section>
<!-- /.section clients -->


