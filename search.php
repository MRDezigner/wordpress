<?php
/**
 * O modelo para exibir páginas de resultados de pesquisa
 *
 * @package WordPress
 * @subpackage WordPress
 * @since WordPress 1.0
 */

get_header(); ?>

<div class="col-md-12">
												
<form class="search-form" role="search" method="get" action="<?php echo home_url( '/' ); ?>">
    <div class="input-group">
        <input type="search" class="form-control" placeholder="<?php echo esc_attr_x( 'Procurar …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" id="s">
        <span class="input-group-addon">
            <button type="submit" value="<?php echo esc_attr_x( '', 'submit button' ) ?>"><i class="icon icon-Search"></i></button>
        </span>
    </div>
</form>

</div>

<?php get_footer(); ?>
