<?php
/**
 * The template for displaying 404 pages (Not Found)
 * 
 * @package CMSSuperHeroes
 * @subpackage CMS Theme
 * @since 1.0.0
 */

get_header(); ?>

	<div id="primary" class="site-content container">
		<div class="row">
			<div id="content" role="main" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			
				<article id="post-0" class="post cms-error404 no-results not-found">
					<header class="entry-header">
						<h1 class="ft-droid"><?php esc_html_e( '404', "wp-experts" ); ?></h1>
					</header>

					<div class="entry-content">
						<div class="text ft-droid"><?php echo wp_experts_cms_404_page(); ?></div>
						<a class="btn btn-default btn-lg" href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Back To Homepage','wp-experts'); ?></a>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			</div><!-- #content -->
		</div>
	</div><!-- #primary -->

<?php get_footer(); ?>