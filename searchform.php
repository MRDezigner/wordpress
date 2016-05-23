<?php
/**
 * Modelo para exibir formulários de pesquisa em Wordpress
 *
 * @package WordPress
 * @subpackage WordPress
 * @since WordPress 1.0
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo _x( 'Procurar por:', 'label', 'wordpress' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'wordpress' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	</label>
	<button type="submit" class="search-submit"><span class="screen-reader-text"><?php echo _x( 'Enviar', 'submit button', 'wordpress' ); ?></span></button>
</form>
