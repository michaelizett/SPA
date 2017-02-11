<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package CMSSuperHeroes
 * @subpackage CMS Theme
 * @since 1.0.0
 * @author Fox
 */
$side_bar = wp_experts_page_sidebar();
get_header();

?>
<div id="page-default" class="<?php wp_experts_main_class(); ?> <?php wp_experts_page_class(); ?>">
	<div class="row">
		<div id="primary" class="<?php if($side_bar) { echo 'col-xs-12 col-sm-8 col-md-8 col-lg-8 sidebar-active'; }else  { echo 'col-xs-12 col-sm-12 col-md-12 col-lg-12 page-full-width'; } ?>">
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'single-templates/content', 'page' ); ?>
					<?php wp_experts_page_comment(); ?>
				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->
		<?php if($side_bar) { ?>
	        <div id="sidebar" class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
	            <?php get_sidebar(); ?>
	        </div>
	    <?php } ?>
	</div>
</div>
<?php get_footer(); ?>