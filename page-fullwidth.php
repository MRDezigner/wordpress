<?php
/**
 * Template Name: Full-Width Template
 *
 * Este é o modelo que exibe as páginas que não tem sidebar.
 * Qdo criar a página no seu CMS não esqueça de escolher o modelo da página.
 *
 * @package WordPress
 * @subpackage WordPress
 * @since WordPress 1.0
 */

get_header(); ?>

	<div class="col-md-12">

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

	    <?php endwhile; ?>

	</div>

<?php get_footer(); ?>
