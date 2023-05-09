<?php

// Добавление стилей
add_action( 'wp_enqueue_scripts', function () {
  wp_enqueue_style( 'normalize', get_template_directory_uri() . '/assets/styles/normalize.css' );
  wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/styles/style.css' );
	wp_enqueue_style( 'prism', get_template_directory_uri() . '/assets/styles/prism.css' );
  wp_enqueue_style( 'post', get_template_directory_uri() . '/assets/styles/post.css' );
  wp_enqueue_style( 'political', get_template_directory_uri() . '/assets/styles/style-gen-politica.css' );



	// wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
});

?>