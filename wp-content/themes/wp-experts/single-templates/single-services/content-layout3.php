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
		<div class="sg-services-body col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<?php the_content(); ?>
		</div>
	</div>

</article>
<!-- #post -->
