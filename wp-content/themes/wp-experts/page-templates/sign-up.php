<?php
/**
 * Template Name: Sign Up
 *
 * @package CMSSuperHeroes
 * @subpackage CMS Theme
 * @since 1.0.0
 * @author Fox
 */
get_header(); 
?>
<div id="page-sign-up" class="<?php wp_experts_blog_sidebar(); ?>">
    <div class="container">
        <div class="row">
            <?php if(function_exists('up_get_template_part')): ?>
		        <div class="cms-register-wrap">
		            <div class="cms-form-register">
		                <div class="cms-modal-dialog" role="document">
		                    <div class="cms-modal-content">
		                        <div class="cms-modal-header text-center">
		                            <div class="cms-modal-header-innder">
		                                <i class="icon-ClosedLock"></i>
		                                <h3><?php esc_html_e('Register New Account', 'wp-experts'); ?></h3>
		                                <span><?php esc_html_e('Hello', 'wp-experts'); ?></span>
		                            </div>
		                        </div>
		                        <div class="cms-modal-body modal-body">
		                            <?php up_get_template_part('default/form', 'register'); ?>
		                        </div>
		                    </div>
		                    <div class="more-sign-in">
		                        <span class="form-sign-in"><?php esc_html_e('have an account,','wp-experts');?></span>
		                        <a href="javascript:void(0)" class="switch_to_login"> <?php esc_html_e('Sign In Here','wp-experts');?></a>
		                    </div>
		                </div>
		            </div>
		        </div>
		    <?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>