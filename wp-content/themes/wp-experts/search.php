<?php
/**
 * The template for displaying Search Results pages
 *
 * @package CMSSuperHeroes
 * @subpackage CMS Theme
 * @since 1.0.0
 */

get_header(); ?>
<div id="page-search-results">
<div class="container">
    <div class="row">
        <section id="primary" class="col-xs-12 col-sm-8 col-md-8 col-lg-8 sidebar-active">
            <div id="content" role="main">

            <?php if ( have_posts() ) : ?>

                <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php 
                    if(get_post_type() != 'page'){
                        get_template_part( 'single-templates/content/content', get_post_format() ); 
                    } else {
                        get_template_part( 'single-templates/content/search', 'page' );
                    }
                    ?>
                <?php endwhile; ?>

                <?php wp_experts_paging_nav(); ?>

            <?php else : ?>

                <article id="post-0" class="post no-results not-found">
                    <header class="entry-header">
                        <h1 class="entry-title"><?php esc_html_e( 'Nothing Found', "wp-experts" ); ?></h1>
                    </header>

                    <div class="entry-content">
                        <p><?php esc_html_e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', "wp-experts" ); ?></p>
                        <?php get_search_form(); ?>
                    </div><!-- .entry-content -->
                </article><!-- #post-0 -->

            <?php endif; ?>

            </div><!-- #content -->
        </section><!-- #primary -->
        <div id="sidebar" class="rightsidebar col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
</div>
<?php get_footer(); ?>