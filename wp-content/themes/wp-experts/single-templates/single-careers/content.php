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

	<div class="sg-careers clearfix">	
		<div class="sg-careers-body col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="sg-careers-image">
				<?php the_post_thumbnail( 'full' ); ?>
			</div>
			<?php the_content(); ?>
		</div>
	</div>

</article>
<!-- #post -->
