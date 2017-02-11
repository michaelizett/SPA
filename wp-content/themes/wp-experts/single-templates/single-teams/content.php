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

	<div class="sg-teams clearfix">
		<div class="sg-teams-wrapper <?php if ( is_active_sidebar( 'team' ) ) { echo 'col-xs-12 col-sm-9 col-md-9 col-lg-9'; } else { echo 'col-xs-12 col-sm-12 col-md-12 col-lg-12';} ?>">
			<div class="sg-teams-header clearfix">
				<div class="sg-teams-image">
					<?php the_post_thumbnail( 'full' ); ?>
					<div class="sg-teams-social">
	                    <?php
	                    	$team_meta = wp_experts_post_meta_data();
	                        for($i=1;$i<5;$i++){
	                            $icon = $team_meta->{"_cms_icon".$i};
	                            $link = $team_meta->{"_cms_link".$i};
	                            if(!empty($icon) && !empty($link)): ?>
	                                <a class="<?php echo esc_attr($icon);?>" href="<?php echo esc_url($link);?>"></a> 
	                            <?php endif;
	                        }
	                    ?>
	                </div>
				</div>
				<div class="sg-teams-excerpt">
					<h3 class="cms-team-title"><?php the_title();?></h3>
                    <div class="cms-team-position line-wrap">
                        <?php echo  esc_attr($team_meta->_cms_team_position); ?>
                        <div class="line-icon2"></div>
                    </div>
					<?php echo get_the_excerpt(); ?>
				</div>
			</div>
			<div class="sg-teams-content">
				<?php the_content(); ?>
			</div>
		</div>
		<?php if ( is_active_sidebar( 'team' ) ) { ?>
            <div class="sg-teams-sidebar sidebar-post-type col-xs-12 col-sm-3 col-md-3 col-lg-3">
                <?php dynamic_sidebar('team'); ?>
            </div>
        <?php } ?>		
	</div>

</article>
<!-- #post -->
