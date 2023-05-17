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
      <!-- добавляем посты тильды -->
        <?php global $post;
         // Задаем количество постов для отображения и задаем рубрику
        $myposts = get_posts([ 
	        'numberposts' => -1,
          'category_name' => 'tilda',
        ]);
        //Тело поста
        if( $myposts ){
	      foreach( $myposts as $post ){
		      setup_postdata( $post ); ?>
          <!-- Разметка поста -->
            <div class="searchable">
            <a class="main__content-card" href="<?php the_field('link_to_tilda'); ?>">

            <?php the_post_thumbnail( 
              array(306, 108),
              array('class' => 'main__content-img',) 
              ); ?>
              <h3 class="main__card-title"><?php the_title(); ?></h3>

            </a>
          </div>

		    <?php } } 
        wp_reset_postdata(); ?>

        </div>
      </section>
    </main>

<?php get_footer();?>