<?php
/**
 * Template funções e definições
 *
 * Configurar o tema e fornecer algumas funções auxiliares, que são utilizados no
 * tema como tags de modelo personalizado. Outros estão ligados à ação e 
 * filtro ganchos no WordPress para alterar a funcionalidade do núcleo.
 *
 * Ao usar um tema filho que você pode substituir certas funções (aqueles envolvido 
 * em uma function_exists() call), definindo-os pela primeira vez no arquivo functions.php 
 * do seu tema filho. O arquivo functions.php do tema filho está incluído antes do arquivo do tema pai, 
 * então seria usado as funções do tema filho.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Funções que não são conectáveis (não embalados em function_exists()) são
 * em vez disso ligado a um filtro de gancho ou de ação.
 *
 * Para mais informações sobre ganchos, ações e filtros,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage WordPress
 * @since WordPress 1.0
 */

/**
 * WordPress só funciona no WordPress 4.4 ou posterior.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.4-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

/**
 * Coloque o código abaixo no arquivo functions.php do seu tema. 
 * O número 250 é a quantidade de caracteres a exibir.
*/
function get_excerpt(){
	$excerpt = get_the_content();
	$excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
	$excerpt = strip_shortcodes($excerpt);
	$excerpt = strip_tags($excerpt);
	$excerpt = substr($excerpt, 0, 250);
	$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
	$excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
	return $excerpt;
}

/*
* Enable support for Post Thumbnails on posts and pages.
*
* @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
*/
/*  Image thumbnail sizes
/* ------------------------------------ */
add_theme_support( 'post-thumbnails' );

add_image_size( 'thumbnail', 75, 75, true );
add_image_size( 'medium', 370, 208 );
add_image_size( 'medium_large', 720, 404 );
add_image_size( 'large', 1280, 720 );
add_image_size( 'full', 1280, 9999 );
	
// Add default posts and comments RSS feed links to head.
add_theme_support( 'automatic-feed-links' );

/*
 * Let WordPress manage the document title.
 * By adding theme support, we declare that this theme does not use a
 * hard-coded <title> tag in the document head, and expect WordPress to
 * provide it for us.
 */
add_theme_support( 'title-tag' );

/*
 * Switch default core markup for search form, comment form, and comments
 * to output valid HTML5.
 */
add_theme_support( 'html5', array(
	'search-form',
	'comment-form',
	'comment-list',
	'gallery',
	'caption',
) );

/*
 * Enable support for Post Formats.
 *
 * See: https://codex.wordpress.org/Post_Formats
 */
add_theme_support( 'post-formats', array(
	'aside',
	'image',
	'video',
	'quote',
	'link',
	'gallery',
	'status',
	'audio',
	'chat',
) );

/**
 * Remove WordPress Tags
 * RETIRANDO A METATAG WORDPRESS GENERATOR
 */
remove_action('wp_head', 'wp_generator');

/**
 * TIRAR A BARRA DE ADMIN
 */
add_filter('show_admin_bar', '__return_false');

/**
 * Add default posts and comments RSS feed links to head.
 */
add_theme_support( 'automatic-feed-links' );

/*
* Enable support for Excerpt on Pages.
* See http://codex.wordpress.org/Excerpt
*/
add_post_type_support( 'page', 'excerpt' );

/*
* Remove o filtro wpautop. Este filtro adiciona paragrafos automaticamente 
* ao wordpress quando a função ‘the_content’ é executada na exibição do POST.
*/
remove_filter ("the_content", "wpautop");

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');


// This theme uses wp_nav_menu() in two locations.
register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'wordpress' ),
	'social'  => __( 'Social Links Menu', 'wordpress' ),
) );

/**
 * Registers a widget area.
 *
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 *
 * @since Wordpress 1.0
 */
function jacintacavalcante_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'wordpress' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'wordpress' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar 2', 'wordpress' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'wordpress' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar 3', 'wordpress' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'wordpress' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Sidebar 4', 'wordpress' ),
		'id'            => 'sidebar-4',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'wordpress' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar 5', 'wordpress' ),
		'id'            => 'sidebar-5',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'wordpress' ),
		'before_widget' => '<aside id="text-5" class="widget widget_text"><div class="textwidget">',
		'after_widget'  => '</div></aside>',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => __( 'Fullbanner', 'wordpress' ),
		'id'            => 'fullbanner',
		'description'   => __( 'Banner Principal de destaque', 'wordpress' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	register_sidebar( array(
		'name'          => __( 'Position 1', 'wordpress' ),
		'id'            => 'position-1',
		'description'   => __( 'Widget no Head', 'wordpress' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Position 2', 'wordpress' ),
		'id'            => 'position-2',
		'description'   => __( 'Widget no Footer', 'wordpress' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Instagram', 'wordpress' ),
		'id'            => 'instagram',
		'description'   => __( 'Widget acima do Footer', 'wordpress' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );	
}
add_action( 'widgets_init', 'wordpress_widgets_init' );

/**
 * Add Disqus ao seu site
 */
function disqus_embed($disqus_shortname) {
    global $post;
    wp_enqueue_script('disqus_embed','http://'.$disqus_shortname.'.disqus.com/embed.js');
    echo '<div id="disqus_thread"></div>
    <script type="text/javascript">
        var disqus_shortname = "'.$disqus_shortname.'";
        var disqus_title = "'.$post->post_title.'";
        var disqus_url = "'.get_permalink($post->ID).'";
        var disqus_identifier = "'.$disqus_shortname.'-'.$post->ID.'";
    </script>';
}
