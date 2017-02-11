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
                <div id="cshero-footer" class="cshero-footer8">
                    <div id="cshero-footer-top"> 
                        <div class="container">
                            <div class="row">
                                <div class="cshero-footer-cta col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="cms-cta-wrapper cms-style-default style3 clearfix cta-right">
                                        <div class="cms-cta-inner row">
                                            <div class="cms-cta-content col-xs-12 col-sm-12 col-md-9 col-lg-9 text-center-md">
                                                <div class="title"><?php echo esc_attr($smof_data['f_cta_title']); ?></div>
                                                <div class="desc"><?php echo esc_attr($smof_data['f_cta_subtitle']); ?></div>
                                            </div>

                                            <div class="cms-cta-button col-xs-12 col-sm-12 col-md-3 col-lg-3 text-right text-center-md">
                                                <a href="<?php echo esc_url($smof_data['f_cta_btn_link']); ?>" class="btn btn-default-white-alt size-default"><?php echo esc_attr($smof_data['f_cta_btn_text']); ?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="cshero-footer-top1 col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                    <?php dynamic_sidebar('footer-top-1'); ?>
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
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 text-center-xs">
                                    <div class="cms-footer-menu">
                                        <?php echo $smof_data['cms-footer-menu']; ?>
                                    </div> 
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 text-center-xs text-center">
                                    <div class="cms-copyright">
                                        <?php echo $smof_data['cms-copyright']; ?>
                                    </div>  
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 text-center-xs text-right">
                                    <div class="cms-social-bottom">
                                        <?php wp_experts_cms_footer_social(); ?>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer><!-- #site-footer -->
        </div><!-- #page -->
    <?php wp_footer(); ?>