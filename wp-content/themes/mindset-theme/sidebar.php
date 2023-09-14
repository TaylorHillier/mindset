<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package FWD_Starter_Theme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}


?>

<aside id="secondary" class="widget-area">
<?php if ( is_page() ) { // Check if it's a Page template
    dynamic_sidebar( 'sidebar-2' ); // Display the Secondary Sidebar
} else {
    dynamic_sidebar( 'sidebar-1' ); // Display the Main Sidebar for other templates
} ?>

<?php get_template_part('template-parts/work', 'categories'); ?>
<?php get_template_part('template-parts/testimonial', 'random'); ?>
</aside><!-- #secondary -->




