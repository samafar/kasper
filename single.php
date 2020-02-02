<?php
/**
 * The template for displaying all single posts
 *
 * @link https://github.com/samafar/tiam/blob/master/single.php
 *
 * @package Tiam
 */

get_header();
?>


<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php
get_sidebar();
get_footer();
