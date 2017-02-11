<?php
/**
 * @name : Default
 * @package : CMSSuperHeroes
 * @author : Fox
 */
?>
<?php global $smof_data, $wp_experts_meta; ?>
<div id="cshero-header-inner" class="header-2 m-style">
    <div id="cshero-header-wrapper">
        <div id="cshero-header-top" class="hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-center-xs">
                        <div class="top-contact">
                            <a href="mailto:<?php echo esc_attr($smof_data['top_email']); ?>"><span><i class="fa fa-envelope"></i><?php echo esc_attr($smof_data['top_email']); ?></span></a>
                            <span><i class="fa fa-phone"></i><?php echo esc_attr($smof_data['top_phone']); ?></span>
                        </div>
                        <?php if(!empty($smof_data['top_button_text'])) { ?>
                            <div class="top-media">
                                <a class="top-button" href="<?php echo esc_url($smof_data['top_button_link']); ?>"><?php echo esc_attr($smof_data['top_button_text']); ?></a>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-right text-center-xs">
                        <?php wp_experts_cms_top_social(); ?>
                    </div>
                </div>
                <div class="h-line"></div>
            </div>
        </div>
        <div id="cshero-header" class="cshero-main-header <?php if (!empty($wp_experts_meta->_cms_one_page)) {echo 'active-menu-onepage';} ?> <?php if (!$smof_data['menu_sticky']) {echo 'no-sticky';} ?>">
            <div class="container">
                <div class="row">
                    <div id="cshero-header-logo" class="col-xs-12 col-sm-5 col-md-3 col-lg-3">
                        <?php 
                            if(is_page() && isset($wp_experts_meta->_cms_custom_logo) && $wp_experts_meta->_cms_custom_logo) {
                                if (is_page() && isset($wp_experts_meta->_cms_header_logo_page) && $wp_experts_meta->_cms_header_logo_page) {
                                    $smof_data['main_logo']['url'] = wp_get_attachment_url($wp_experts_meta->_cms_header_logo_page);
                                }
                            }
                            if(is_page() && isset($wp_experts_meta->_cms_custom_logo) && $wp_experts_meta->_cms_custom_logo) {
                                if (is_page() && isset($wp_experts_meta->_cms_header_logo_page_sticky) && $wp_experts_meta->_cms_header_logo_page_sticky) {
                                    $smof_data['sticky_logo']['url'] = wp_get_attachment_url($wp_experts_meta->_cms_header_logo_page_sticky);
                                }
                            }
                        ?>
                        <a class="logo-main" href="<?php echo esc_url(home_url('/')); ?>">
                            <img alt="" src="<?php echo esc_url($smof_data['main_logo']['url']); ?>">
                        </a>
                        <a class="logo-sticky" href="<?php echo esc_url(home_url('/')); ?>">
                            <img alt="" src="<?php echo esc_url($smof_data['sticky_logo']['url']); ?>">
                        </a>
                    </div>
                    <div id="cshero-header-navigation" class="col-xs-12 col-sm-7 col-md-9 col-lg-9">
                        <div class="navigation-main">
                            <div class="cshero-navigation-right hidden-xs hidden-sm">
                                <div class="nav-button-icon">
                                    <?php if ($smof_data['show_search_icon']) { ?>
                                        <div class="h-search-wrapper">
                                            <i class="search fa fa-search"></i>
                                            <div class="widget-search-header">
                                                <?php get_search_form (); ?>
                                            </div>   
                                        </div>
                                    <?php } ?>
                                    
                                    <?php if ($smof_data['show_cart_icon']) { ?>
                                        <span class="h-cart-wrapper">
                                            <i class="cart fa fa-shopping-cart"></i>
                                            <?php if(class_exists('Woocommerce')){ ?>
                                                <span class="couter_items"><?php echo sprintf (_n( '%d', '%d', WC()->cart->cart_contents_count, "wp-experts" ), WC()->cart->cart_contents_count ); ?></span>
                                            <?php } ?>
                                        </span>
                                        <?php if ( class_exists( 'WC_Widget_Cart' ) ): ?>
                                            <div class="widget_shopping_cart">
                                                <div class="widget_shopping_cart_content">
                                                    <?php woocommerce_mini_cart(); ?>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php } ?>
                                    
                                    <?php if ( is_active_sidebar( 'hidden-sidebar' ) ) { ?>
                                        <i class="hidden-sidebar fa fa-bars"></i>
                                    <?php } ?>
                                </div>
                            </div>
                            <nav id="site-navigation" class="main-navigation">
                                <?php
                                
                                $attr = array(
                                    'menu' =>wp_experts_menu_location(),
                                    'menu_class' => 'nav-menu menu-main-menu',
                                );
                                
                                $menu_locations = get_nav_menu_locations();
                                
                                if(!empty($menu_locations['primary'])){
                                    $attr['theme_location'] = 'primary';
                                }
                                
                                /* enable mega menu. */
                                if(class_exists('HeroMenuWalker')){ $attr['walker'] = new HeroMenuWalker(); }
                                
                                /* main nav. */
                                wp_nav_menu( $attr ); ?>
                            </nav>
                            
                        </div>
                    </div>
                    <div id="cshero-menu-mobile" class="collapse navbar-collapse">
                        <i class="cms-icon-menu pe-7s-menu"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>