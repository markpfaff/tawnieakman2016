<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package tawni
 */

if ( ! is_active_sidebar( 'sidebar-3' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area portfolio-sidebar" role="complementary">
	<?php dynamic_sidebar( 'sidebar-3' ); ?>
</div><!-- #secondary -->
