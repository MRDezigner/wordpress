<?php
/**
 * O modelo para exibir páginas arquivadas
 *
 * UUsado para exibir páginas do tipo do arquivo, se nada mais específico correspondem a uma consulta.
 * Por exemplo, reúne páginas baseadas em data se nenhum arquivo date.php exister.
 *
 * Se você gostaria de personalizar ainda mais esses modos de exibição de arquivo, você pode criar um
 * novo arquivo de modelo para cada um. Por exemplo, tag.php (Tag arquivos),
 * category.php (arquivos da Category), author.php (arquivos do Author), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage WordPress
 * @since WordPress 1.0
 */

get_header(); ?>

	<div class="col-md-8">

		<?php query_posts('showposts=6');?>
    	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<div class="col-md-12">
			<?php the_post_thumbnail('medium_large', array( 'class'	=> "img-responsive")); ?>
			<h4 class="post_title entry-title">
				<a href="<?php the_Permalink()?>" rel="bookmark"><?php the_title()?></a>
			</h4>
			<div class="post_meta">
				<span class="post_date">
					<a href="<?php the_Permalink()?>"><?php the_time('d M Y');?></a>
				</span>
				<div class="post_counters post_counters_blog">
					<a href="<?php the_Permalink()?>/#respond" class="post_counters_comments">
						<span class="post_counters_number"><?php comments_popup_link('0 ','1 ','% ');?></span>
						<span class="post_counters_label">Comentário(s)</span>
					</a>
				</div>
			</div>
			<div class="post_content entry-content">
				<?php the_excerpt();?>
				<p>
					<a class="more-link" href="<?php the_Permalink()?>">Continue lendo</a>
				</p>
			</div>
		</div>
		<?php endwhile; else:?>
    <?php endif;?>
		
	</div>

	<div class="col-md-4">
		<?php get_sidebar(); ?>
	</div>

<?php get_footer(); ?>
