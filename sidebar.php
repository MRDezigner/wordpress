<?php
/**
 * O modelo para a barra lateral que contém a área widget principal
 *
 * @package WordPress
 * @subpackage WordPress
 * @since WordPress 1.0
 */
?>

<?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>

	<aside id="secondary" class="sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</aside><!-- .sidebar .widget-area -->
	
<?php endif; ?>
