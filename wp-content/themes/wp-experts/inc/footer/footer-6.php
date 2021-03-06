<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package CMSSuperHeroes
 * @subpackage CMS Theme
 * @since 1.0.0
 */
global $smof_data;
?>
        </div><!-- #main -->
            <footer>
                <div id="cshero-footer" class="cshero-footer6">
                    <div id="cshero-footer-top"> 
                        <div class="container">
                            <div class="row">
                                <div class="cshero-footer-top1 col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                    <?php dynamic_sidebar('footer-top-1'); ?>
                                    <?php wp_experts_cms_footer_social(); ?>
                                </div>
                                <div class="cshero-footer-top2 col-xs-12 col-sm-6 col-md-3 col-lg-3"><?php dynamic_sidebar('footer-top-2'); ?></div>
                                <div class="cshero-footer-top3 col-xs-12 col-sm-6 col-md-3 col-lg-3"><?php dynamic_sidebar('footer-top-3'); ?></div>
                                <div class="cshero-footer-top4 col-xs-12 col-sm-6 col-md-3 col-lg-3"><?php dynamic_sidebar('footer-top-4'); ?></div>
                            </div>
                        </div>
                    </div>
                    <div id="cshero-footer-bottom"> 
                       <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-center-xs">
                                    <div class="cms-copyright">
                                        <?php echo $smof_data['cms-copyright']; ?>
                                    </div>  
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-center-xs text-right">
                                    <div class="cms-footer-menu">
                                        <?php echo $smof_data['cms-footer-menu']; ?>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer><!-- #site-footer -->
        </div><!-- #page -->
    <?php wp_footer(); ?>