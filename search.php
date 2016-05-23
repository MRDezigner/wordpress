<?php
/**
 * O modelo para exibir páginas de resultados de pesquisa
 *
 * @package WordPress
 * @subpackage WordPress
 * @since WordPress 1.0
 */

get_header(); ?>

<div class="col-md-12">
												
	<?php if ( have_posts() ) : ?>
		<?php
		// Inicio do loop.
		while ( have_posts() ) : the_post();

			/**
			 * Executar o laço para a pesquisa para saída dos resultados.
			 * Se você quer sobrecarregar isso em um tema filho, em seguida, incluir um arquivo
			 * chamado de content-search.php e que será usado no lugar.
			 */
			get_template_part( 'template-parts/content', 'search' );

		// Fim do loop.
		endwhile;

	// If no content, include the "No posts found" template.
	else :
		get_template_part( 'template-parts/content', 'none' );

	endif;
	?>

</div>

<?php get_footer(); ?>
