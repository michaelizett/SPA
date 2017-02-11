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
global $smof_data;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-blog <?php echo has_post_thumbnail() ? ' has-feature-img' : ' no-feature-img' ; ?>">
		<div class="entry-header clearfix">
		    <div class="entry-feature entry-feature-image">
		    	<?php the_post_thumbnail( 'full' ); ?>
		    	<?php wp_experts_archive_meta_icon(); ?>
		    </div>
		</div>
		<!-- .entry-header -->
		
		<div class="entry-content">
			<div class="blog-detail">
				<?php wp_experts_archive_detail(); ?>
			</div>
			<h2 class="entry-title">
	    		<?php
		    		if(is_sticky()){
		                echo "<i class='fa fa-thumb-tack'></i>";
		            }
		    	?>
		    		<?php the_title(); ?>
		    </h2>
			<div class="entry-content-inner">
				<?php the_content(); ?>
			</div>
			<?php if($smof_data['social_share'] == 'show') { ?>
				<div class="social-shared">
					<?php wp_experts_get_socials_share(); ?>
				</div>
			<?php } ?>
		</div>

		<!-- .entry-content -->

	</div>
	<!-- .entry-blog -->
	<?php wp_experts_post_nav(); ?>
	<?php if($smof_data['about_author'] == 'show') { ?>
		<div class="entry-author">
			<h3 class="cms-title"><?php esc_html_e('About Author', "wp-experts"); ?></h3> 
			<div class="blog-admin-post clearfix">
				<div class="admin-avt">
						<?php echo get_avatar( get_the_author_meta( 'ID' ), 'full' ); ?>
					</div>
				<div class="admin-info">
					<div class="admin-des">
						<?php the_author_meta( 'description' ); ?>
						<?php wp_experts_cms_author_social(); ?>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>
</article>
<!-- #post -->
