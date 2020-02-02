<?php 
if ( ! function_exists( 'tiam_setup' ) ) :

function tiam_setup() {
  
  if ( ! isset( $content_width ) )
    $content_width = 900;

  add_theme_support( 'title-tag' );

  add_theme_support( 'post-thumbnails' );
  add_post_type_support( 'personal', 'thumbnail' );
  add_post_type_support( 'case', 'thumbnail' );


    // This theme uses wp_nav_menu() in one location.
  register_nav_menus( 
    array(
      'tiam' => esc_html__( 'Primary', 'tiam' ),
      'extra-menu' => esc_html__( 'Extra', 'tiam' )
  ) );
  
  add_theme_support( 'html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ) );
  
  add_theme_support( 'custom-background', apply_filters( 'tiam_custom_background_args', array(
    'default-color' => 'ffffff',
    'default-image' => '',
  ) ) );

  $args = array (
    'before'            => '<div class="page-links-XXX"><span class="page-link-text">' . __( 'More pages: ', 'tiam' ) . '</span>',
    'after'             => '</div>',
    'link_before'       => '<span class="page-link">',
    'link_after'        => '</span>',
    'next_or_number'    => 'next',
    'separator'         => ' | ',
    'nextpagelink'      => __( 'Next &raquo', 'tiam' ),
    'previouspagelink'  => __( '&laquo Previous', 'tiam' ),
  );
  
  wp_link_pages( $args );
  
  add_theme_support( 'customize-selective-refresh-widgets' );

  add_theme_support( 'custom-logo', array(
    'height'      => 250,
    'width'       => 250,
    'flex-width'  => true,
    'flex-height' => true,
  ) );
}
endif;
add_action( 'after_setup_theme', 'tiam_setup' );

comments_template(  $file = 'comments.php',  $separate_comments = false ); 

add_theme_support( 'automatic-feed-links' );
?>