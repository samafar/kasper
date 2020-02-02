<?php 
function tiam_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'tiam' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'tiam' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
  ) );
  register_sidebar( array(
		'name'          => esc_html__( 'Left Footer', 'tiam' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'tiam' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
  ) );
  register_sidebar( array(
		'name'          => esc_html__( 'Middle Footer', 'tiam' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'tiam' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
  ) );
  register_sidebar( array(
		'name'          => esc_html__( 'Right Footer', 'tiam' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here.', 'tiam' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'tiam_widgets_init' );
?>