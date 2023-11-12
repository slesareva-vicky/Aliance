
<section class="cta">
      <div class="bg-grey">
        <div class="container-vs cta-image-wrapper">
          <img src="/img/cta.png" alt="call to action" class="cta-image" />

          <div class="container cta-form-wrapper">
            <form action="/handler.php" method="POST" class="cta-form">
              <h2 class="section-title cta-form-title">Хотите сотрудничать?</h2>
              <p class="cta-form-text">
                Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время
                ответит на все интересующие вопросы и поможем даже в самых
                сложных случаях!
              </p>
              <div class="input-group-wrapper">
                <div class="input-group">
                  <input
                    id="user-name"
                    name="username"
                    type="text"
                    class="input"
                    placeholder=" "
                    maxlength="100"
                    required
                  />
                  <label class="input-group-label" for="user-name">Имя</label>
                </div>
                <div class="input-group">
                  <input
                    id="user-phone"
                    name="userphone"
                    type="tel"
                    class="input"
                    placeholder=" "
                    maxlength="30"
                    required
                  />
                  <label class="input-group-label" for="user-phone"
                    >Номер телефона
                  </label>
                </div>
              </div>
              <!-- /.input-group-wrapper -->
              <div class="cta-form-footer">
                <button type="submit" class="button cta-form-button">
                  Отправить заявку
                </button>
                <div class="notify">
                  <svg class="notify-icon icon14">
                    <use href="/img/sprite.svg#shield"></use>
                  </svg>
                  <p class="notify-text">
                    Обращаясь к нам вы получаете не только профессиональную
                    работу, но и абсолютную конфиденциальность информации!
                  </p>
                </div>
              </div>
              <!-- /.cta-form-footer -->
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- /.cta -->
    <footer class="footer">
      <div class="footer-block">
        <div class="container">
          <div class="footer-top">
            <svg class="footer-logo">
              <use href="/img/sprite.svg#logo-dark"></use>
            </svg>
            <a href="tel:+79597771014" class="footer-phone"
              >+7 (959) 777-10-14</a
            >
            <div class="footer-info fi-address">
              <svg class="icon24blue">
                <use href="/img/sprite.svg#mark"></use>
              </svg>
              <address class="footer-info-address">
                г. Москва, Холодильный пер. 4к1с8
              </address>
            </div>
            <!-- /.footer-info -->
            <div class="footer-info fi-email">
              <svg class="icon24blue">
                <use href="/img/sprite.svg#mail"></use>
              </svg>
              <a
                href="mailto:a.dragunov@tdaliance.ru"
                class="footer-info-email"
              >
                a.dragunov@tdaliance.ru
              </a>
            </div>
            <!-- /.footer-info -->
            <div class="footer-social">
              <a href="/404" class="footer-social-link">
                <svg class="footer-social-icon icon24blue">
                  <use href="/img/sprite.svg#vk"></use>
                </svg>
              </a>
              <a href="/404" class="footer-social-link">
                <svg class="footer-social-icon icon24blue">
                  <use href="/img/sprite.svg#inst"></use>
                </svg>
              </a>
            </div>
            <!-- /.mobile-info -->
          </div>
          <!-- /.footer-top -->
        </div>
      </div>
      <div class="footer-block">
        <div class="container">
          <div class="footer-bottom">
            <div class="footer-menu-wrapper-contract">
              <a href="/contract" class="footer-menu-title">Контрактное производство</a>
              <ul class="footer-menu-list">
                <li class="footer-menu-item">
                  <a href="/contract/avtohim" class="footer-menu-link">Автомобильная химия</a>
                </li>
                <li class="footer-menu-item">
                  <a href="/404" class="footer-menu-link">Бытовая химия</a>
                </li>
                <li class="footer-menu-item">
                  <a href="/404" class="footer-menu-link">
                    Дезинфицирующие средства
                  </a>
                </li>
                <li class="footer-menu-item">
                  <a href="/404" class="footer-menu-link">Пищевые аэрозоли</a>
                </li>
                <li class="footer-menu-item">
                  <a href="/404" class="footer-menu-link"
                    >Косметическая продукция</a
                  >
                </li>
                <li class="footer-menu-item">
                  <a href="/404" class="footer-menu-link">Краски аэрозольные</a>
                </li>
              </ul>
            </div>
            <!-- /.footer-menu-wrapper -->
            <div class="footer-menu-wrapper-brand">
              <a href="/own" class="footer-menu-title">Собственные марки</a>
              <ul class="footer-menu-list">
                <li class="footer-menu-item">
                  <a href="/own/ag-tech" class="footer-menu-link">Автохимия AG-Tech</a>
                </li>
                <li class="footer-menu-item">
                  <a href="/404" class="footer-menu-link">Автохимия AP</a>
                </li>
              </ul>
            </div>
            <!-- /.footer-menu-wrapper -->
            <div class="footer-menu-wrapper-company">
              <ul class="footer-menu-list">
                <li class="footer-menu-item">
                  <a href="/about" class="footer-menu-link footer-menu-link-bold">
                    О&nbsp;компании
                  </a>
                </li>
                <li class="footer-menu-item">
                  <a href="/404" class="footer-menu-link footer-menu-link-bold">
                    Новости
                  </a>
                </li>
                <li class="footer-menu-item">
                  <a href="/contact" class="footer-menu-link footer-menu-link-bold">
                    Контакты
                  </a>
                </li>
              </ul>
            </div>
            <!-- /.footer-menu-wrapper -->
          </div>
          <!-- /.footer-bottom -->
        </div>
      </div>
      <div class="container">
        <div class="footer-wrapper">
          <div class="footer-legal">
            <p class="footer-copyright">
              &copy; <?php echo date('d.m.Y'); ?> «Aliance Production». Все права защищены.
            </p>
            <a href="/politics" class="footer-policy">Политики конфиденциальности</a>
          </div>
          <div class="footer-author">
            <span class="made-in">Сделано в</span>
            <span class="made-in-mobile">Дизайн и разработка:</span>&nbsp;
            <svg width="52" height="11">
              <use href="/img/sprite.svg#ruso"></use>
            </svg>
          </div>
        </div>
      </div>
    </footer>
    <!-- /.footer -->

    <div id="modal-form" class="modal">
      <div class="modal-dialog">
        <h2 class="modal-title">Есть вопросы?</h2>
        <a href="/404" class="modal-close" data-modal="modal-form">
          <svg class="close-icon icon24">
            <use href="/img/sprite.svg#close"></use>
          </svg>
        </a>
        <p class="modal-text">
          Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время
          ответит на все интересующие вопросы и поможем даже в самых сложных
          случаях!
        </p>
        <form action="/handler.php" method="POST" class="modal-form">
          <div class="input-group-wrapper input-group-vertical">
            <div class="input-group modal-input-group">
              <input
                id="modal-user-name"
                name="username"
                type="text"
                class="input modal-input"
                placeholder=" "
                maxlength="100"
                required
              />
              <label
                class="input-group-label modal-input-label"
                for="modal-user-name"
                >Имя
              </label
              >
            </div>
            <div class="input-group modal-input-group">
              <input
                id="modal-user-phone"
                name="userphone"
                type="tel"
                class="input modal-input"
                placeholder=" "
                maxlength="30"
                required               
              />
              <label
                class="input-group-label modal-input-label"
                for="modal-user-phone"
                >Номер телефона
              </label>
            </div>
          </div>
          <!-- /.input-group-wrapper -->
          <div class="modal-form-footer">
            <button type="submit" class="button modal-form-button">
              Отправить заявку
            </button>
            <div class="notify">
              <svg class="notify-icon icon14">
                <use href="/img/sprite.svg#shield"></use>
              </svg>
              <p class="notify-text">
                Обращаясь к нам вы получаете не только профессиональную работу,
                но и абсолютную конфиденциальность информации!
              </p>
            </div>
          </div>
        </form>
      </div>
    </div>

    <div id="modal-thanks" class="modal">
      <div class="modal-dialog modal-dialog-thanks">
        <a href="#" class="modal-close" data-modal="modal-thanks">
          <svg class="close-icon icon24">
            <use href="/img/sprite.svg#close"></use>
          </svg>
        </a>
        <img src="/img/thanks_illu.png" alt="Спасибо за заявку" />
        <h2 class="modal-title modal-title-thanks">Спасибо за заявку!</h2>
        <p class="modal-text modal-text-thanks">
          Наш менеджер свяжется с Вами в ближайшее время ответит на все
          интересующие вопросы и поможем даже в самых сложных случаях!
        </p>
        <a href="/" class="button modal-form-button modal-form-button-thanks"
          >Вернуться на главную
        </a>
      </div>
    </div>
  </body>
</html>
