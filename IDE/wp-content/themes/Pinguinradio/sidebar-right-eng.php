<?php
/**
 * The sidebar containing the main widget area.
 *
 * If no active widgets in sidebar, let's hide it completely.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<?php if ( is_active_sidebar( 'sidebar-right-eng' ) ) : ?>
		<aside class="threecol last" role="complementary">
			<?php dynamic_sidebar( 'sidebar-right-eng' ); ?>
		</aside><!-- #secondary -->
	<?php endif; ?>