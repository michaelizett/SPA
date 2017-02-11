<?php
/**
 * Template Name: Blog Standard
 *
 * @package CMSSuperHeroes
 * @subpackage CMS Theme
 * @since 1.0.0
 * @author Fox
 */
get_header(); 
?>
<div id="page-blog-standard" class="<?php wp_experts_blog_sidebar(); ?>">
    <div class="container">
        <div class="row">
            <?php wp_experts_blog_sidebar_left(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>