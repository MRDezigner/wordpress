<?php
/**
 * A parte do modelo para exibir uma biografia de Autor
 *
 * @package WordPress
 * @subpackage WordPress
 * @since WordPress 1.0
 */
?>

<div class="author-info">
	<div class="author-avatar">
		<?php
		/**
		 * Filtro do tamanho do avatar do autor e bio do tema Wordpress.
		 *
		 * @since Wordpress 1.0
		 *
		 * @param int $size A altura e largura do avatar em pixels.
		 */
		$author_bio_avatar_size = apply_filters( 'wordpress_author_bio_avatar_size', 42 );

		echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size );
		?>
	</div><!-- .author-avatar -->

	<div class="author-description">
		<h2 class="author-title"><span class="author-heading"><?php _e( 'Author:', 'wordpress' ); ?></span> <?php echo get_the_author(); ?></h2>

		<p class="author-bio">
			<?php the_author_meta( 'description' ); ?>
			<a class="author-link" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
				<?php printf( __( 'View all posts by %s', 'wordpress' ), get_the_author() ); ?>
			</a>
		</p><!-- .author-bio -->
	</div><!-- .author-description -->
</div><!-- .author-info -->
