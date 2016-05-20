<?php
/**
 * The main template file
 *
 * Este é o arquivo do templete mais genérico em um tema WordPress
 * e um dos dois arquivos necessários para um tema (o outro é style.css).
 * Ele é usado para exibir uma página quando nada mais específico corresponder a uma consulta.
 * Por exemplo, reúne a página inicial quando não existe nenhum arquivo home.php.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage WordPress
 * @since Wordpress 1.0
 */

get_header(); ?>

  <div class="row">
  
    <div class="col-md-8">
      <!-- Aqui entra o conteúdo ou chamadas das categorias -->
      <!-- NOME DA CATEGORIA = category_name=nomedacategoria -->
      <!-- Showposts = qtidade de post a serem exibidos
      <?php query_posts('showposts=2&category_name=nomedacategoria');?>
      <!-- ABRE O LOOP PARA POSTAGEM  -->
      <?php if (have_posts()): while (have_posts()) : the_post();?>
      
      <div class="col-md-6">
        <article id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>
          <div>
            <a href="<?php the_Permalink()?>"><?php the_post_thumbnail('medium_large', array( 'class' => "img-responsive")); ?></a>
          </div>
          <div class="post_title">
            <h4><a href="<?php the_Permalink()?>" rel="bookmark"><?php the_title()?></a></h4>
          </div>
          <div class="post_meta">
            <span class="post_date"><a href="<?php the_Permalink()?>"><?php the_time('d M Y');?></a></span>
	        	<span class="post_counters_number"><?php comments_popup_link('0 ','1 ','% ');?></span>
	        	<span class="post_counters_label">Comentário(s)</span>
	        </div>
	        <div class="post_content">
	        	<?php echo get_excerpt(); ?>
	        	<br />
	        	<p class="text-center">
							<a class="more-link" href="<?php the_Permalink()?>">Continue lendo</a>
						</p>
	        </div>
        </article>
      </div>
      <?php endwhile; else:?>
      <?php endif;?>
    </div>
    
    <!-- Sidebar Inicio -->
    <div class="col-md-4">
      <!-- Este template tem uma sidebar a direita -->
      <?php get_sidebar(); ?>
    </div>
    <!-- Sidebar Fim -->
  
  </div><!-- .row -->

<?php get_footer(); ?>
