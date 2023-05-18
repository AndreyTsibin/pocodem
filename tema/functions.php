<?php

// Добавление стилей
add_action( 'wp_enqueue_scripts', function () {
  wp_enqueue_style( 'normalize', get_template_directory_uri() . '/assets/styles/normalize.css' );
  wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/styles/style.css' );
	wp_enqueue_style( 'prism', get_template_directory_uri() . '/assets/styles/prism.css' );
  wp_enqueue_style( 'post', get_template_directory_uri() . '/assets/styles/post.css' );
  wp_enqueue_style( 'political', get_template_directory_uri() . '/assets/styles/style-gen-politica.css' );
  
//Подключаем стили для страницы контакты
  if( is_page( 'kontakty' ) ){
    wp_enqueue_style( 'contact', get_template_directory_uri() . '/assets/styles/contact-forma.css' );
}

//Подключаем скрипты
  wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/scripts/script.js', array('jquery'), '1.0.0', true );
  wp_enqueue_script( 'prism-script', get_template_directory_uri() . '/assets/scripts/prism.js', array('jquery'), '1.0.0', true );
  wp_enqueue_script( 'modal', get_template_directory_uri() . '/assets/scripts/modal.js', array('jquery'), '1.0.0', true);

//Копируем код из инструкции
if( is_single() ){
  wp_enqueue_script( 'code', get_template_directory_uri() . '/assets/scripts/copy-code.js', array('jquery'), '1.0.0', true);
}
  
});

add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo' );
set_post_thumbnail_size(full, full, true);
?>