<?php
/**
 * The sidebar containing the main widget area
 *
 * @link 
 *
 * @package Kasper
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside>