<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link
 *
 * @package Kasper
 */

get_header();
?>
<?php esc_html_e('It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'kasper');?>

<?php
get_search_form();

the_widget('WP_Widget_Recent_Posts');
?>

<h2 class="widget-title"><?php esc_html_e('Most Used Categories', 'kasper');?></h2>
<ul>
  <?php
wp_list_categories(array(
    'orderby' => 'count',
    'order' => 'DESC',
    'show_count' => 1,
    'title_li' => '',
    'number' => 10,
));
?>
</ul>

<?php
/* translators: %1$s: smiley */
$kasper_archive_content = '<p>' . sprintf(esc_html__('Try looking in the monthly archives. %1$s', 'kasper'), convert_smilies(':)')) . '</p>';
the_widget('WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$kasper_archive_content");

the_widget('WP_Widget_Tag_Cloud');
?>


<?php
get_footer();