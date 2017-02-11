<?php
/**
 * @name : Default
 * @package : CMSSuperHeroes
 * @author : Fox
 */
global $smof_data, $wp_experts_meta; 
?>
<div id="cshero-header-left" class="header-21">
    <div id="cshero-header-left-wrapper">
        <div id="cshero-header-left-logo">
            <?php 
                if(is_page() && isset($wp_experts_meta->_cms_custom_logo) && $wp_experts_meta->_cms_custom_logo) {
                    if (is_page() && isset($wp_experts_meta->_cms_header_logo_page) && $wp_experts_meta->_cms_header_logo_page) {
                        $smof_data['main_logo']['url'] = wp_get_attachment_url($wp_experts_meta->_cms_header_logo_page);
                    }
                }
            ?>
            <a class="logo-main" href="<?php echo esc_url(home_url('/')); ?>">
                <img alt="" src="<?php echo esc_url($smof_data['main_logo']['url']); ?>">
            </a>
        </div>

        <div id="cshero-header-left-menu">
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
                if ( has_nav_menu( 'primary' ) ) {
                    wp_nav_menu( $attr );
                } else { ?>
                    <div class="new-item-menu"><a href="<?php echo get_admin_url(); ?>nav-menus.php"><?php esc_html_e('Creat New Menu', 'wp-experts'); ?></a></div>
                <?php } ?>
            </nav>
        </div>

        <div id="cshero-header-left-footer">
            <div class="cshero-header-left-social">
                <?php wp_experts_cms_footer_social(); ?>
            </div>
        </div>
    </div>
</div>

<div id="cshero-menu-left-mobile">
    <a href="javascript:void(0)" class="popup_menu medium fade_push_text_right"><span class="popup_menu_inner"><i class="line"></i></span></a>
</div>