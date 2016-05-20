<?php
/**
 * O modelo para exibir o cabeçalho
 *
 * Apresenta todas as elemento do header mais o menu.
 * A div "container" inicia aqui e fecha no footer.php.
 *
 * @package WordPress
 * @subpackage WordPress
 * @since WordPress 1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>

	<link rel='stylesheet' href='<?php bloginfo('template_directory'); ?>/css/style.css' type='text/css' media='all' />
	<link rel='stylesheet' href='<?php bloginfo('template_directory'); ?>/css/bootstrap.css' type='text/css' media='all' />
	<link rel='stylesheet' href='<?php bloginfo('template_directory'); ?>/css/font-awesome.css' type='text/css' media='all' />
	<link rel='stylesheet' href='<?php bloginfo('template_directory'); ?>/css/fontello-embedded.min.css' type='text/css' media='all' />

	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/html5.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class() ?>>

<div class="container">
	<div class="row">

		<div class="col-md-12 text-center">
			<a class="logo" href="<?php echo get_settings('home'); ?>">
				<img src="<?php bloginfo('template_directory'); ?>/images/logo-big.png" class="img-responsive" alt="<?php the_title()?>" width="360" height="275">
			</a>
		</div>
		
		<header id="header" class="col-md-12">

			<nav class="navbar navbar-default" role="navigation">
			  <div class="container-fluid">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigationbar">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			    </div>
			    
		        <?php
		            wp_nav_menu( array(
		                'menu'              => 'primary',
		                'theme_location'    => 'primary',
		                'depth'             => 2,
		                'container'         => 'div',
		                'container_class'   => 'navbar-collapse collapse',
		        		    'container_id'      => 'navigationbar',
		                'menu_class'        => 'nav navbar-nav',
		                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
		                'walker'            => new wp_bootstrap_navwalker())
		            );
		        ?>
			    </div>
			</nav>

		</header><!-- /header -->
