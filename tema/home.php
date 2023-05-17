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
<a class="main__content-title" href="<?php echo home_url( 'tilda' ); ?>">
<h2>Тильда</h2></a>
<a class="main__link" href="<?php echo home_url( 'tilda' ); ?>">Показать все</a>
</div>
<div class="main__content-card-list">
<!-- добавляем посты тильды -->
<?php global $post;
$myposts = get_posts([ 
'numberposts' => 3,
'category_name' => 'tilda',
]);
if( $myposts ){
foreach( $myposts as $post ){
setup_postdata( $post ); ?>
<!-- Разметка поста -->
<div class="searchable">
<a class="main__content-card" href="<?php the_field('link_to_tilda'); ?>">
<?php the_post_thumbnail( 
      array(306, 108),
      array('class' => 'main__content-img',) ); ?>
<h3 class="main__card-title"><?php the_title(); ?></h3>
</a>
</div>
<?php } } wp_reset_postdata(); ?>
</div>
</section>

<!-- JavaScript -->
<section class="main__content">
<div class="main__content-header">
<a class="main__content-title" href="<?php echo home_url( 'javascript' ); ?>">
<h2>JavaScript</h2></a>
<a class="main__link" href="<?php echo home_url( 'javascript' ); ?>">Показать все</a>
</div>
<div class="main__content-card-list">
<!-- добавляем посты -->
<?php global $post;
$myposts = get_posts([ 
'numberposts' => 3,
'category_name' => 'javascript',
]);
if( $myposts ){
foreach( $myposts as $post ){
setup_postdata( $post ); ?>
<!-- Разметка поста -->
<div class="searchable">
<a class="main__content-card" href="<?php the_field('link_to_js'); ?>">
<?php the_post_thumbnail( 
array(306, 108),
array('class' => 'main__content-img',) 
); ?>
<h3 class="main__card-title"><?php the_title(); ?></h3>
</a>
</div>
<?php } } wp_reset_postdata(); ?>
</div>
</section>

<!-- Генераторы -->
<section class="main__content">
<div class="main__content-header">
<a class="main__content-title" href="<?php echo home_url( 'generatory' ); ?>">
<h2>Генераторы</h2></a>
<a class="main__link" href="<?php echo home_url( 'generatory' ); ?>">Показать все</a>
</div>
<div class="main__content-card-list">
<!-- добавляем посты -->
<?php global $post;
$myposts = get_posts([ 
'numberposts' => 3,
'category_name' => 'generator',
]);
if( $myposts ){
foreach( $myposts as $post ){
setup_postdata( $post ); ?>
<!-- Разметка поста -->
<div class="searchable">
<a class="main__content-card" href="<?php the_field('link_to_generator'); ?>">
<?php the_post_thumbnail( 
array(306, 108),
array('class' => 'main__content-img',) 
); ?>
<h3 class="main__card-title"><?php the_title(); ?></h3>
</a>
</div>
<?php } } wp_reset_postdata(); ?>
</div>
</section>
</main>

<?php get_footer();?>