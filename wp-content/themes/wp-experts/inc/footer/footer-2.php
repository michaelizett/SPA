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
                <div id="cshero-footer" class="cshero-footer2">
                    <div id="cshero-footer-top"> 
                        <div class="container">
                            <div class="row">
                                <div class="cshero-footer-top1 col-xs-12 col-sm-6 col-md-3 col-lg-3"><?php dynamic_sidebar('footer-top-1'); ?></div>
                                <div class="cshero-footer-top2 col-xs-12 col-sm-6 col-md-3 col-lg-3"><?php dynamic_sidebar('footer-top-2'); ?></div>
                                <div class="cshero-footer-top2 col-xs-12 col-sm-6 col-md-3 col-lg-3"><?php dynamic_sidebar('footer-top-3'); ?></div>
                                <div class="cshero-footer-top2 col-xs-12 col-sm-6 col-md-3 col-lg-3"><?php dynamic_sidebar('footer-top-4'); ?></div>
                            </div>
                        </div>
                    </div>
                    <div id="cshero-footer-feature-top">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 footer-feature-item">
                                    <h3><?php echo esc_attr($smof_data['hd_feature_1']); ?></h3>
                                    <?php echo $smof_data['cms-call-us']; ?>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 footer-feature-item">
                                    <h3><?php echo esc_attr($smof_data['hd_feature_2']); ?></h3>
                                    <?php echo $smof_data['cms-come-visit']; ?>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 footer-feature-item">
                                    <h3><?php echo esc_attr($smof_data['hd_feature_3']); ?></h3>
                                    <?php echo $smof_data['cms-send-us']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="cshero-footer-bottom"> 
                       <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center-xs">
                                    <div class="cms-copyright">
                                        <?php echo $smof_data['cms-copyright']; ?>
                                    </div>  
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                    <div class="cms-footer-menu">
                                        <?php echo $smof_data['cms-footer-menu']; ?>
                                    </div> 
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center-xs text-right">
                                    <?php wp_experts_cms_footer_social(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer><!-- #site-footer -->
        </div><!-- #page -->
    <?php wp_footer(); ?>