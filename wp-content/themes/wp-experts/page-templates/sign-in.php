<?php
/**
 * Template Name: Sign In
 *
 * @package CMSSuperHeroes
 * @subpackage CMS Theme
 * @since 1.0.0
 * @author Fox
 */
get_header(); 
?>
<div id="page-sign-in" class="<?php wp_experts_blog_sidebar(); ?>">
    <div class="container">
        <div class="row">
            <?php if(function_exists('up_get_template_part')): ?>
		        <div class="cms-login-wrap">
		            <div class="cms-form-login">
		                <div class="cms-modal-dialog" role="document">
		                    <div class="cms-modal-content">
		                        <div class="cms-modal-header text-center">
		                            <div class="cms-modal-header-innder">
		                                <i class="icon-OpenedLock"></i>
		                                <h3><?php esc_html_e('Login Area', 'wp-experts'); ?></h3>
		                                <span><?php esc_html_e('Welcome', 'wp-experts'); ?></span>
		                            </div>
		                            
		                        </div>
		                        <div class="cms-modal-body modal-body">
		                            <?php  echo do_shortcode('[user-press layout="" form_type="login" is_logged="profile"]'); ?>
		                        </div>
		                    </div>
		                    <div class="more-sign-up">
		                        <span class="form-sign-up"><?php esc_html_e('Dont have an account?','wp-experts');?></span>
		                        <a href="javascript:void(0)" class="switch_to_sign_up"> <?php esc_html_e('Sign Up','wp-experts');?></a>
		                    </div>
		                </div>
		            </div>
		        </div>
		    <?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>