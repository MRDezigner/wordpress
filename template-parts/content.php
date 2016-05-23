<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Jacinta_Cavalcante
 * @since Jacinta Cavalcante 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post_header entry-header">
		<h3 class="post_title entry-title">
			<a href="<?php the_Permalink()?>" rel="bookmark"><?php the_title()?></a>
		</h3>
		<div class="post_meta">
			<span class="post_date">
				<a href="<?php the_Permalink()?>"><?php the_time('d M Y');?></a>
			</span>
			<div class="post_counters post_counters_blog">
				<a href="http://main.blog-cv.axiomthemes.com/standard-post-with-featured-image/#comments" class="post_counters_item post_counters_comments trx_addons_icon-comment">
					<span class="post_counters_number"><?php comments_popup_link('0','1 ','% ');?></span>
					<span class="post_counters_label">Comentário(s)</span>
				</a>

				<!-- Compartilhar -->
				<div class="post_counters_item post_share">
					<div class="socials_wrap socials_share socials_size_tiny socials_drop">
						<a href="#" class="socials_caption inited">
							<span class="socials_caption_label">Compartilhar</span>
						</a>
						<span class="social_items inited">
							<span class="social_item social_item_popup">
								<a href="#" class="social_icons social_twitter" data-link="#" data-count="twitter">
									<span class="trx_addons_icon-twitter"></span><i>twitter</i>
								</a>
							</span>
							<span class="social_item social_item_popup">
								<a href="#" class="social_icons social_facebook" data-link="#" data-count="facebook">
									<span class="trx_addons_icon-facebook"></span><i>facebook</i></a>
							</span>
							<span class="social_item social_item_popup">
								<a href="#" class="social_icons social_gplus" data-link="#" data-count="gplus">
									<span class="trx_addons_icon-gplus"></span><i>gplus</i>
								</a>
							</span>
							<span class="social_item social_item_popup">
								<a href="#" class="social_icons social_tumblr" data-link="#" data-count="tumblr">
									<span class="trx_addons_icon-tumblr"></span><i>tumblr</i>
								</a>
							</span>
							<span class="social_item social_item_popup">
								<a href="mailto:contato@jacintacavalcante.com.br" class="social_icons social_mail" data-link="mailto:contato@jacintacavalcante.com.br" data-count="mail">
									<span class="trx_addons_icon-mail"></span><i>mail</i>
								</a>
							</span>
						</span>
					</div>
				</div><!-- Compartilhar -->
			</div>
		</div><!-- .post_meta -->
	</div><!-- .post_header -->
	
	<div class="post_featured with_thumb">
		<?php the_post_thumbnail( 'medium', array( 'class' => 'attachment-cindy_j-thumb-med size-cindy_j-thumb-med wp-post-image' ) ); ?>
		<div class="mask"></div>
		<div class="icons">
			<a href="<?php the_Permalink()?>" aria-hidden="true" class="icon-link"></a>
			<?php the_post_thumbnail( 'large', array( 'class' => 'icon-search inited' ) ); ?>
		</div>
	</div>
	<?php if (have_posts()): while (have_posts()) : the_post();?>
	<div class="post_content entry-content">
		<?php the_content();?>
	</div><!-- .entry-content -->
	<?php endwhile; else:?>
	<?php endif;?>
</article>

<div class="nav-links-old">
	<span class="nav-prev"><?php previous_post_link('%link'); ?></span>
	<span class="nav-next"><?php next_post_link('%link'); ?></span>
</div>
