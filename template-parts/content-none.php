<?php
/**
 * A parte do modelo para exibir uma mensagem que as mensagens não podem ser encontrados
 *
 * @package WordPress
 * @subpackage WordPress
 * @since WordPress 1.0
 */
?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php _e( 'Nada encontrado', 'wordpress' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( __( 'Pronto para publicar o seu primeiro post? <a href="%1$s">Comece aqui</a>.', 'wordpress' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php _e( 'Desculpe, mas nada combina com seus termos de pesquisa. Por favor, tente novamente com algumas palavras-chave diferentes.', 'wordpress' ); ?></p>
			<?php get_search_form(); ?>

		<?php else : ?>

			<p><?php _e( 'Parece que não conseguimos encontrar o que você está procurando. Talvez a pesquisa possa ajudar.', 'wordpress' ); ?></p>
			<?php get_search_form(); ?>

		<?php endif; ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
