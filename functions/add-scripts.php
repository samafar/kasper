<?php 
function kasper_scripts() {

wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Poppins:400,500|Roboto:400&display=swap' );

//wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/inc/css/bootstrap-grid.min.css' );

wp_enqueue_style( 'kasper-style', get_stylesheet_uri() );

#wp_deregister_script('jquery');
#wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.4.1.min.js', array(), null, true); 

wp_enqueue_script( 'custom', get_template_directory_uri() . '/inc/scripts/custom.js', null, null, true);

if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
  wp_enqueue_script( 'comment-reply' );
}
}
add_action( 'wp_enqueue_scripts', 'kasper_scripts' );

?>