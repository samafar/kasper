<?php
/**
 * Tiam functions and definitions
 *
 * @link https://github.com/samafar/tiam/blob/master/functions.php
 *
 * @package Tiam
 */

/**Add theme support */
get_template_part('/functions/add-theme', 'support');

/**Remove menu items from user that is not Admin */
/* get_template_part( 'functions/remove', 'menu' ); */

// Add or remove js and css
get_template_part('/functions/add', 'scripts');

// Add or remove widgets
get_template_part('functions/add', 'widgets');

// Remove junk
get_template_part('/functions/remove', 'junk');

get_template_part('/functions/add', 'tags');
