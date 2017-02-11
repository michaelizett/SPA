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
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="sg-case clearfix">
		<div class="sg-case-body <?php if ( is_active_sidebar( 'services' ) ) { echo 'col-xs-12 col-sm-9 col-md-9 col-lg-9'; } else { echo 'col-xs-12 col-sm-12 col-md-12 col-lg-12';} ?>">
			<div class="sg-case-image">
				<?php the_post_thumbnail( 'full' ); ?>
			</div>
			<div class="sg-case-content">
				<?php the_content(); ?>
			</div>
		</div>
		<?php if ( is_active_sidebar( 'services' ) ) { ?>
            <div class="sg-case-sidebar sidebar-post-type col-xs-12 col-sm-3 col-md-3 col-lg-3">
                <?php dynamic_sidebar('services'); ?>
            </div>
        <?php } ?>		
	</div>

</article>
<!-- #post -->
