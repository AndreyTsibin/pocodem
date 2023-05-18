<?php
/*
Template Name: contact
*/
?>
<?php get_header(); ?>

<!-- Content -->
<main class="content">
      <!-- Обложка главной -->
      <section class="main__slider-pages" style="background-color: rgb(43, 88, 167);">
        <img class="main__logo-pages" src="<?php bloginfo('template_url'); ?>/assets/images/contact-icon.svg" alt="Иконка письмо">
        <h1 class="main__slider-title">Контакты</h1>
      </section>

      <!-- Контакты -->
      <section class="post post__mobile">
        <div class="header__contact">
          <h2 class="main__content-title">Сообщение в службу поддержки</h2>
          <p style="opacity: 0.5;">Ваше обращение будет рассмотрено в течение 24 часов</p>
        </div>
        <div class="form__contact">
          <form class="form" action="#" method="POST">
            <label class="label" for="name">Ваше имя:</label>
            <input type="text" class="name input" name="name" required>

            <label class="label" for="email">Email:</label>
            <input type="email" class="email input" name="email" required>

            <label class="label" for="message">Текст сообщения:</label>
            <textarea class="message textarea" name="message" rows="4" required></textarea>

            <input class="input" style="background: #1565ef; color: #fff;" type="submit" value="Отправить">
          </form>

        </div>
      </section>
    </main>
<?php get_footer();?>