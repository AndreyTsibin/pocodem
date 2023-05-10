<?php
/*
Template Name: tilda
*/
?>
<?php get_header(); ?>

    <!-- Content -->
    <main class="content">
      <!-- Обложка главной -->
      <section class="main__slider-pages" style="background-color: rgb(59, 97, 178);">
        <img class="main__logo-pages" src="<?php bloginfo('template_url'); ?>/assets/images/tilda.svg" alt="Тильда логотип">
        <h1 class="main__slider-title">Библиотека модификаций и скриптов для Тильды</h1>
      </section>

      <!-- Тильда -->
      <section class="main__content">
        <div class="main__content-card-list">

          <div class="searchable">
            <a class="main__content-card" href="#">
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
    </main>

<?php get_footer();?>