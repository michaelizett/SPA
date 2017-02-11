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
    <div class="<?php wp_experts_main_class(); ?> pt-single-post <?php wp_experts_single_post_full_width(); ?>">
        <div class="row">
            <div class="single-post-wrap clearfix">
                <?php wp_experts_single_post_sidebar_left(); ?>
            </div>
        </div>
    </div>
<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>