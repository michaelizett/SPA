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
            <div class="single-services-wrap <?php echo wp_experts_single_service_layout(); ?> clearfix">
                <div class="single-services-inner clearfix">
                    <div id="primary">
                        <div id="content" role="main">
                            <?php get_template_part( 'single-templates/single-services/content', wp_experts_single_service_layout()); ?>
                        </div><!-- #content -->
                    </div><!-- #primary -->
                </div>
            </div>
        </div>
    </div>
    <div class="cta-post">
        <?php wp_experts_cta_service_post(); ?>
    </div>
<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>