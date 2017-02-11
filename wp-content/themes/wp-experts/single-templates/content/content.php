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
	<div class="entry-blog <?php echo has_post_thumbnail() ? ' has-feature-img' : ' no-feature-img' ; ?>">
		<div class="entry-header clearfix">
		    <div class="entry-feature entry-feature-image">
		    	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'full' ); ?></a>
		    	<?php wp_experts_archive_meta_icon(); ?>
		    </div>
		</div>
		<!-- .entry-header -->
		
		<div class="entry-content">
			<div class="blog-detail">
				<?php wp_experts_archive_detail(); ?>
			</div>
			<h2 class="entry-title">
		    	<a href="<?php the_permalink(); ?>">
		    		<?php
			    		if(is_sticky()){
			                echo "<i class='fa fa-thumb-tack'></i>";
			            }
			    	?>
		    		<?php the_title(); ?>
		    	</a>
		    </h2>
			<div class="entry-content-inner">
				<?php echo substr(get_the_excerpt(), 0,300); ?>...
			</div>
			<?php
	    		wp_link_pages( array(
	        		'before'      => '<div class="pagination loop-pagination"><span class="page-links-title">' . esc_html__( 'Pages:',"wp-experts") . '</span>',
	        		'after'       => '</div>',
	        		'link_before' => '<span class="page-numbers">',
	        		'link_after'  => '</span>',
	    		) );
			?>
			<div class="entry-readmore">
				<?php wp_experts_archive_readmore(); ?>
			</div>
		</div>

		<!-- .entry-content -->
	</div>
	<!-- .entry-blog -->
</article>
<!-- #post -->
