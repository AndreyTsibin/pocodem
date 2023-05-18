<?php
/*
Template Name: development
*/
?>
<?php get_header(); ?>

    <!-- Content -->
    <main class="content">
      <!-- Карточки услуг -->
      <section class="post">
        <h1 class="design__title">Заказать разработку веб-сайта под ключ</h1>
        <div class="design__content">
          <div class="design__content-item" href="#">
            <img class="main__content-img-development none__cursor" src="<?php bloginfo('template_url'); ?>/assets/images/site1.png" alt="Макет сайта">
            <div class="design__wrapper" style="padding-left: 10px; padding-right: 10px;">
              <h3 class="design__content-title">Лендинг</h3>
              <p class="design__content-description">Одностраничный сайт. Цель которого превращать посетителей в
                клиентов.
                Основной задачей лендинга является сбор контактных данных целевой аудитории.</p>
              <div class="design__contact">
                <h3 class="design__contact-title">26 000 ₽</h3>
                <button class="design__btn">Заказать</button>
              </div>
              <p class="note">
                Нажмите
                на кнопку "Заказать" чтобы обсудить
                детали проекта и
                узнать конечную стоимость веб-сайта</p>
            </div>
          </div>
          <div class="design__content-item" href="#">
            <img class="main__content-img-development none__cursor" src="<?php bloginfo('template_url'); ?>/assets/images/site2.png" alt="Макет сайта">
            <div class="design__wrapper" style="padding-left: 10px; padding-right: 10px;">
              <h3 class="design__content-title">Интернет магазин</h3>
              <p class="design__content-description">Сайт который позволяет пользователям онлайн, в своём браузере,
                сформировать заказ на покупку, выбрать способ оплаты и доставки заказа, оплатить заказ.</p>
              <div class="design__contact">
                <h3 class="design__contact-title">140 000 ₽</h3>
                <button class="design__btn">Заказать</button>
              </div>
              <p class="note">
                Нажмите
                на кнопку "Заказать" чтобы обсудить
                детали проекта и
                узнать конечную стоимость веб-сайта</p>
            </div>
          </div>
        </div>
      </section>
    </main>

    <!-- Модальное окно -->
    <div class="modal-overlay">
      <button class="modal-close" aria-label="Закрыть окно"></button>
      <div class="modal">
        <div class="modal-header">
          <h2 style="color: black; text-align: center;">Напишите чтобы обсудить проект</h2>
          <img src="<?php bloginfo('template_url'); ?>/assets/images/avatar.png" alt="аватар" style="margin-bottom: 10px;">
          <a class="telegram-button" href="https://t.me/andrejtsibin">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/telegram-icon.svg" alt="Telegram">
            Написать
          </a>

        </div>
      </div>
    </div>

<?php get_footer();?>