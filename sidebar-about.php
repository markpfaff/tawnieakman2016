<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package tawni
 */

if ( ! is_active_sidebar( 'sidebar-2' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area about-sidebar" role="complementary">
	<?php dynamic_sidebar( 'sidebar-2' ); ?>
</div><!-- #secondary -->
