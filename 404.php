<?php
/**
 * O modelo para exibir páginas 404 (não encontrado)
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage WordPress
 * @since WordPress 1.0
 */

get_header(); ?>

	<div class="col-md-12">

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="post_content">
					<h1 class="page_title">404</h1>
					<h2 class="page_subtitle">The requested page cannot be found</h2>
					<p class="page_description">Can't find what you need? Take a moment and do a search below or start from <a href="http://main.blog-cv.axiomthemes.com/">our homepage</a>.</p>
					<div class="page_search">
						<div class="search_wrap search_ajax inited">
							<div class="search_form_wrap">
								<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
									<input type="search" class="search-field" placeholder="Procurar" value="<?php echo get_search_query(); ?>" name="s" />
									<button type="submit" class="search-submit icon-search"><</button>
								</form>
							</div>
							<div class="search_results widget_area">
								<a class="search_results_close icon-cancel"></a>
								<div class="search_results_content"></div>
							</div>
						</div>
					</div>
				</div>
			</article>
	</div>

<?php get_footer(); ?>
