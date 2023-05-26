<?php
/*
Template Name: links
*/
?>
<?php get_header(); ?>
<!-- Content -->
<main class="content">
<!-- Обложка главной -->
<section class="main__slider-pages" style="background-color: rgb(70, 112, 189);">
<img class="main__logo-pages" src="<?php bloginfo('template_url'); ?>/assets/images/link.svg" alt="Ссылки логотип">
<h1 class="main__slider-title">Библиотека полезных ресурсов для веб-дизайнера</h1>
</section>

<!-- Ссылки -->
<section class="main__content">
<div class="main__content-card-list">

<!-- добавляем посты -->
<?php global $post;

$myposts = get_posts([ 
'numberposts' => -1,
'category_name' => 'links',
]);

if( $myposts ){
foreach( $myposts as $post ){
setup_postdata( $post ); ?>

<!-- Разметка поста -->
<div class="searchable">
<a class="main__content-card" href="<?php the_field('link_to_links'); ?>" target="_blank" rel="noopener noreferrer">

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