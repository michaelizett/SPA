<?php
/**
 * The Template for displaying all single posts
 *
 * @package CMSSuperHeroes
 * @subpackage CMS Theme
 * @since 1.0.0
 */
get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
    <?php $temp_post = $post; ?>
    <div class="container">
        <div class="row">
            <div class="single-careers-wrap <?php echo wp_experts_single_service_layout(); ?> clearfix">
                <div class="single-careers-inner clearfix">
                    <div id="primary">
                        <div id="content" role="main">
                            <?php get_template_part( 'single-templates/single-careers/content', get_post_format() ); ?>
                        </div><!-- #content -->
                    </div><!-- #primary -->
                </div>
            </div>
        </div>
    </div>
<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>