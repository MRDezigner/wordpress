<?php
/**
 * O modelo para exibir páginas
 *
 * Este é o modelo que exibe todas as páginas por padrão.
 * Por favor note que este é a construção de páginas do WordPress e 
 * que outras "páginas" em seu site poderão usar um modelo diferente.
 * Essa página tem um sidebar.
 *
 * @package WordPress
 * @subpackage WordPress
 * @since WordPress 1.0
 */

get_header(); ?>
  
  <!-- Conteúdo Inicio -->
	<div class="col-md-8>

		<?php /* The loop */ ?>
	    <?php while ( have_posts() ): the_post(); ?>

	    <article id="post-<?php the_ID(); ?>" <?php post_class('post_item_single post_type_post post_format_ itemscope format-standard tag-image tag-post-formats tag-standard '); ?>>
			<div class="post_featured">
				<?php the_post_thumbnail( 'medium', array( 'class' => 'img-responsive' ) ); ?>
			</div>

			<div class="post_header entry-header">
				<h2 class="post_title entry-title" itemprop="headline"><?php the_title()?></h2>
				<div class="post_date">
					<span class="date updated" itemprop="datePublished"><?php the_time('d M Y');?></span>
				</div>
			</div>
			<div class="post_content entry-content" itemprop="articleBody">
				<?php the_content(); ?>
			</div>

	    </article>

	    <?php // comment_template(); ?>
	    <?php endwhile; ?>

	</div><!-- Conteúdo Fim -->
	
	<!-- Sidebar Inicio -->
	<div class="col-md-4">
	  <?php get_sidebar(); ?>
	</div>
	<!-- Sidebar Fim -->

<?php get_footer(); ?>
