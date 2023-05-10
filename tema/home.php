<?php
/*
Template Name: home
*/
?>
<?php get_header(); ?>


    <!-- Content -->
    <main class="content">
      <!-- Обложка -->
      <section class="main__slider">
        <img class="main__logo" src="<?php bloginfo('template_url'); ?>/assets/images/logo.svg" alt="Логотип">
        <h1 class="heading">Инструменты для разработки веб-сайтов</h1>
      </section>
      <!-- Тильда -->
      <section class="main__content">
        <div class="main__content-header">
          <a class="main__content-title" href="./pages/tilda.html">
            <h2>Тильда</h2>
          </a>
          <a class="main__link" href="./pages/tilda.html">Показать все</a>
        </div>
        <div class="main__content-card-list">

          <div class="searchable">
            <a class="main__content-card" href="post/kak-zakrepit-shapku-v-zero.html">
              <img class="main__content-img" src="<?php bloginfo('template_url'); ?>/assets/images/timg1.svg" alt="Тильда">
              <h3 class="main__card-title">Как сделать фиксированное меню в Zero Block?</h3>
            </a>
          </div>

          <div class="searchable">
            <a class="main__content-card" href="#">
              <img class="main__content-img" src="<?php bloginfo('template_url'); ?>/assets/images/timg2.svg" alt="Тильда">
              <h3 class="main__card-title">Как скруглить углы у стандартного pop-up на Тильде</h3>
            </a>
          </div>

          <div class="searchable">
            <a class="main__content-card" href="#">
              <img class="main__content-img" src="<?php bloginfo('template_url'); ?>/assets/images/timg3.svg" alt="Тильда">
              <h3 class="main__card-title">Как заменить цвета шапки в Zero блок по скроллу на Тильде</h3>
            </a>
          </div>

        </div>
      </section>
      <!-- JavaScript -->
      <section class="main__content">
        <div class="main__content-header">
          <a class="main__content-title" href="pages/javascript.html">
            <h2>JavaScript</h2>
          </a>
          <a class="main__link" href="pages/javascript.html">Показать все</a>
        </div>
        <div class="main__content-card-list">

          <div class="searchable">
            <a class="main__content-card" href="#">
              <img class="main__content-img" src="<?php bloginfo('template_url'); ?>/assets/images/js-1.svg" alt="JavaScript">
              <h3 class="main__card-title">Генерация случайных чисел в JavaScript</h3>
            </a>
          </div>

          <div class="searchable">
            <a class="main__content-card" href="#">
              <img class="main__content-img" src="<?php bloginfo('template_url'); ?>/assets/images/js-2.svg" alt="JavaScript">
              <h3 class="main__card-title">Как объединить массивы в JavaScript</h3>
            </a>
          </div>

          <div class="searchable">
            <a class="main__content-card" href="#">
              <img class="main__content-img" src="<?php bloginfo('template_url'); ?>/assets/images/js-3.svg" alt="JavaScript">
              <h3 class="main__card-title">Как сложить все числа в массиве JavaScript?</h3>
            </a>
          </div>

        </div>
      </section>
      <!-- Генератор -->
      <section class="main__content">
        <div class="main__content-header">
          <a class="main__content-title" href="pages/generator.html">
            <h2>Генераторы</h2>
          </a>
          <a class="main__link" href="pages/generator.html">Показать все</a>
        </div>
        <div class="main__content-card-list">

          <div class="searchable">
            <a class="main__content-card" href="post/generator-politiki.html">
              <img class="main__content-img" src="<?php bloginfo('template_url'); ?>/assets/images/g-1.svg" alt="JavaScript">
              <h3 class="main__card-title">Генератор политики конфиденциальности</h3>
            </a>
          </div>

          <div class="searchable">
            <a class="main__content-card" href="#">
              <img class="main__content-img" src="<?php bloginfo('template_url'); ?>/assets/images/g-2.svg" alt="JavaScript">
              <h3 class="main__card-title">CSS генератор тени для сайта box shadow</h3>
            </a>
          </div>

          <div class="searchable">
            <a class="main__content-card" href="#">
              <img class="main__content-img" src="<?php bloginfo('template_url'); ?>/assets/images/g-3.svg" alt="JavaScript">
              <h3 class="main__card-title">CSS-генератор эффекта матового стекла Glassmorphism</h3>
            </a>
          </div>

        </div>
      </section>
    </main>

<?php get_footer();?>