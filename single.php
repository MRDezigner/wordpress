<?php
/**
 * O modelo para exibir todas os posts individuais e anexos.
 * Ele tem um sidebar.
 *
 * @package WordPress
 * @subpackage WordPress
 * @since WordPress 1.0
 */

get_header(); ?>

		<div class="col-md-8">

			<?php /* The loop */ ?>
		    <?php while ( have_posts() ): the_post(); ?>
		    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope="" itemtype="http://schema.org/BlogPosting">
				  <div class="post_featured">
					  <?php the_post_thumbnail( 'medium_large', array( 'class' => 'img-responsive' ) ); ?>
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
				  
				    <!-- Eu uso o Disqus pra gerenciar os comentários -->
				    <?php disqus_embed('nomenodisqus'); ?>
				  
		      </article>

		    <!-- Navegação entre posts -->
		    <nav>
			    <div class="col-md-6 text-left">
			    	<span aria-hidden="true">&larr; Anterior:</span><br>
		    		<?php previous_post_link('%link'); ?>
			    </div>
			    <div class="col-md-6 text-right">
			    	<span aria-hidden="true">&rarr; Próximo:</span><br>
			    	<?php next_post_link('%link'); ?>
			    </div>
			  </nav>

		    <?php endwhile; ?>

		</div>
		
		<div class="col-md-4">
		  <?php get_sidebar(); ?>
		</div>
		
<?php get_footer(); ?>
