<?php
/**
 * O modelo para exibir o rodapé.
 *
 * Contém o fechamento da div "container" e todo o conteúdo após.
 *
 * @package WordPress
 * @subpackage WordPress
 * @since WordPress 1.0
 */
?>

	</div><!-- row -->
</div><!-- container -->

<footer class="footer_wrap widget_area footer_fullwidth">
	<div class="footer_wrap_inner widget_area_inner">
		<aside id="text-2" class="widget widget_text">
			<h5 class="widget_title">Siga-me no Instagram</h5>
			<div class="textwidget">
                <?php dynamic_sidebar( 'instagram' ); ?>
			</div>
		</aside>
	</div>	<!-- /.footer_wrap_inner -->
</footer>	<!-- /.footer_wrap -->

<div class="copyright_wrap">
	<div class="copyright_wrap_inner">
		<div class="content_wrap">

			<div class="copyright_text">
				<a href="<?php echo get_settings('home'); ?>"><?php $blog_title = get_bloginfo(); ?></a> © <?php the_time('Y');?>. Todos os Direitos Reservados.
			</div>

			<div class="socials_wrap">
				<span class="social_item">
					<a href="#" target="_blank" class="social_icons">
						<i class="fa fa-twitter" aria-hidden="true"></i>
					</a>
				</span>
				<span class="social_item">
					<a href="#" target="_blank" class="social_icons">
						<i class="fa fa-facebook" aria-hidden="true"></i>
					</a>
				</span>
				<span class="social_item">
					<a href="#" target="_blank" class="social_icons">
						<i class="fa fa-google-plus" aria-hidden="true"></i>
					</a>
				</span>
				<span class="social_item">
					<a href="#" target="_blank" class="social_icons">
						<i class="fa fa-instagram" aria-hidden="true"></i>
					</a>
				</span>
			</div>
			
		</div>
	</div>
</div>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.js"></script>

<?php wp_footer(); ?>

</body>
</html>
