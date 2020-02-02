<?php
/**
 * The template for displaying archive pages
 *
 * @link https://github.com/samafar/tiam/blob/master/archive.php
 *
 * @package Tiam
 */

get_header();
?>
<?php if (have_posts()): ?>

<?php
the_archive_title('<h1', '</h1>');
the_archive_description('<div class="archive-description">', '</div>');
?>

<?php
while (have_posts()):
    the_post();

    get_template_part('template-parts/content', get_post_type());

endwhile;

the_posts_navigation();

else:

    get_template_part('template-parts/content', 'none');

endif;
?>

<?php
get_sidebar();
get_footer();