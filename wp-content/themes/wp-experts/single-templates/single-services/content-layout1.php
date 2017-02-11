<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package CMSSuperHeroes
 * @subpackage CMS Theme
 * @since 1.0.0
 */
global $smof_data, $post, $wp_experts_meta;
$services_meta = wp_experts_post_meta_data();

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="sg-services clearfix">
		<?php if ( is_active_sidebar( 'services' ) ) { ?>
            <div class="sg-services-sidebar col-xs-12 col-sm-3 col-md-3 col-lg-3">
                <?php dynamic_sidebar('services'); ?>
            </div>
        <?php } ?>		
		<div class="sg-services-body <?php if ( is_active_sidebar( 'services' ) ) { echo 'col-xs-12 col-sm-9 col-md-9 col-lg-9'; } else { echo 'col-xs-12 col-sm-12 col-md-12 col-lg-12';} ?>">
			<div class="sg-services-image">
				<?php the_post_thumbnail( 'full' ); ?>
			</div>
			<?php the_content(); ?>
		</div>
	</div>

</article>
<!-- #post -->
