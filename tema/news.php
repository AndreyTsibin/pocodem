<?php
/*
Template Name: news
*/
?>
<?php get_header(); ?>

<!-- Content -->
<main class="content">

<!-- Обложка главной -->
<section class="main__slider-pages" style="background-color: rgb(66, 104, 211);">
<img class="main__logo-pages" src="<?php bloginfo('template_url'); ?>/assets/images/notificationw.svg" alt="Новости логотип">
<h1 class="main__slider-title">Новости из мира IT</h1>
</section>

<!-- Блок новостей -->
<section class="main__content">
<div class="main__news-card-list">

<!-- добавляем посты -->
<?php global $post;

$myposts = get_posts([ 
'numberposts' => -1,
'category_name' => 'news',
]);

if( $myposts ){
foreach( $myposts as $post ){
setup_postdata( $post ); ?>

<!-- Разметка поста -->
<div class="searchable">
  <a class="main__news-card" href="<?php the_field('link_card_news'); ?>">

    <?php the_post_thumbnail( 
      array(306, 264),
      array('class' => 'main__news-img',) 
      ); ?>

    <div class="news__description">
      <!-- Заголовок -->
      <h2 class="news__title"><?php the_title(); ?></h2>

      <!-- Описание -->
      <p class="news__subtitle"><?php the_field('description_news'); ?></p>

       <!-- Кнопка -->
      <button class="news__btn">Подробнее</button>
    </div>

  </a>
</div>

<?php } } wp_reset_postdata(); ?>

</div>
</section>
</main>

<?php get_footer();?>