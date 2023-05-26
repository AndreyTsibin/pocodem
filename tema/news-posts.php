<?php
/*
Template Name: news-posts
Template Post Type: post
*/
?>
<?php get_header(); ?>
<!-- Content -->
<main class="content">
  <!-- Пост -->
<section class="main__post">
<div class="post">
<div class="post__container">
<div class="post__date">
<div class="post__author">
<img class="post__avatar-photo" src="<?php bloginfo('template_url'); ?>/assets/images/author.svg">
<p class="post__author-name" style="font-weight: 700; opacity: 0.5; font-size: 12px; margin: 0px;">Андрей Цибин</p>
</div>
<p style="opacity: 0.5; font-size: 12px; margin: 0px;"><?php the_date( 'Y-m-d' ); ?></p>
</div>

<h1 class="post__heading-title"><?php the_title(); ?></h1>
<?php the_post_thumbnail( 
array(306, 108),
array('class' => 'post__img',) 
); ?>

<div class="post__text">
  <p><?php the_field('instruction'); ?></p>
</div>
</div>
</div>
</section>
</main>
<?php get_footer();?>