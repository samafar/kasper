<?php 
function kasper_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'kasper' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'kasper' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
  ) );
  register_sidebar( array(
		'name'          => esc_html__( 'Left Footer', 'kasper' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'kasper' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
  ) );
  register_sidebar( array(
		'name'          => esc_html__( 'Middle Footer', 'kasper' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'kasper' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
  ) );
  register_sidebar( array(
		'name'          => esc_html__( 'Right Footer', 'kasper' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here.', 'kasper' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'kasper_widgets_init' );
?>