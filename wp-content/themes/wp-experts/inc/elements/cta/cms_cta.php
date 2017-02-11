<?php
vc_map(array(
    "name" => 'CMS Call To Action',
    "base" => "cms_cta",
    "icon" => "cs_icon_for_vc",
    "category" => esc_html__('CmsSuperheroes Shortcodes', "wp-experts"),
    "params" => array(
        array(
            "type" => "textarea",
            "heading" => __ ( 'Call to action Title', "wp-experts" ),
            "param_name" => "cta_title",
            "value" => '',
            "group" => esc_html__("Settings", "wp-experts")
        ),
        array(
            "type" => "colorpicker",
            "heading" => esc_html__("Call to action Title color","wp-experts"),
            "param_name" => "cta_title_color",
            "value" => "",
            "group" => esc_html__("Settings", "wp-experts")
        ),
        array(
            "type" => "textarea",
            "heading" => __ ( 'Call to action description', "wp-experts" ),
            "param_name" => "cta_desc",
            "value" => '',
            "group" => esc_html__("Settings", "wp-experts"),
        ),
        array(
            "type" => "colorpicker",
            "heading" => esc_html__("Call to action description color","wp-experts"),
            "param_name" => "cta_desc_color",
            "value" => "",
            "group" => esc_html__("Settings", "wp-experts"),
        ),
        array(
            "type" => "textfield",
            "heading" => __ ( 'Text on the button', "wp-experts" ),
            "param_name" => "button_text",
            "value" => 'button',
            "group" => esc_html__("Settings", "wp-experts")
        ),
        array(
            "type" => "vc_link",
            "class" => "",
            "heading" => esc_html__("Link button", "wp-experts"),
            "param_name" => "link_button",
            "value" => '',
            "group" => esc_html__("Settings", "wp-experts")
        ),
        /* Start Icon */
        array(
            'type' => 'dropdown',
            'heading' => esc_html__( 'Icon library', "wp-experts" ),
            'value' => array(
                esc_html__( 'Font Awesome', "wp-experts" ) => 'fontawesome',
                esc_html__( 'Open Iconic', "wp-experts" ) => 'openiconic',
                esc_html__( 'Typicons', "wp-experts" ) => 'typicons',
                esc_html__( 'Entypo', "wp-experts" ) => 'entypo',
                esc_html__( 'Linecons', "wp-experts" ) => 'linecons',
                esc_html__( 'Pixel', "wp-experts" ) => 'pixelicons',
                esc_html__( 'P7 Stroke', "wp-experts" ) => 'pe7stroke',
                esc_html__( 'RT Icon', "wp-experts" ) => 'rticon',
            ),
            'param_name' => 'icon_type',
            'description' => esc_html__( 'Select icon library.', "wp-experts" ),
            "group" => esc_html__("Settings", "wp-experts"),
        ),
        array(
            'type' => 'iconpicker',
            'heading' => esc_html__( 'Icon Item', "wp-experts" ),
            'param_name' => 'icon_fontawesome',
            'value' => '',
            'settings' => array(
                'emptyIcon' => true, // default true, display an "EMPTY" icon?
                'type' => 'fontawesome',
                'iconsPerPage' => 200, // default 100, how many icons per/page to display
            ),
            'dependency' => array(
                'element' => 'icon_type',
                'value' => 'fontawesome',
            ),
            'description' => esc_html__( 'Select icon from library.', "wp-experts" ),
            "group" => esc_html__("Settings", "wp-experts"),
        ),
        array(
            'type' => 'iconpicker',
            'heading' => esc_html__( 'Icon Item', "wp-experts" ),
            'param_name' => 'icon_openiconic',
            'value' => '',
            'settings' => array(
                'emptyIcon' => true, // default true, display an "EMPTY" icon?
                'type' => 'openiconic',
                'iconsPerPage' => 200, // default 100, how many icons per/page to display
            ),
            'dependency' => array(
                'element' => 'icon_type',
                'value' => 'openiconic',
            ),
            'description' => esc_html__( 'Select icon from library.', "wp-experts" ),
            "group" => esc_html__("Settings", "wp-experts"),
        ),
        array(
            'type' => 'iconpicker',
            'heading' => esc_html__( 'Icon Item', "wp-experts" ),
            'param_name' => 'icon_typicons',
            'value' => '',
            'settings' => array(
                'emptyIcon' => true, // default true, display an "EMPTY" icon?
                'type' => 'typicons',
                'iconsPerPage' => 200, // default 100, how many icons per/page to display
            ),
            'dependency' => array(
                'element' => 'icon_type',
                'value' => 'typicons',
            ),
            'description' => esc_html__( 'Select icon from library.', "wp-experts" ),
            "group" => esc_html__("Settings", "wp-experts"),
        ),
        array(
            'type' => 'iconpicker',
            'heading' => esc_html__( 'Icon Item', "wp-experts" ),
            'param_name' => 'icon_entypo',
            'value' => '',
            'settings' => array(
                'emptyIcon' => true, // default true, display an "EMPTY" icon?
                'type' => 'entypo',
                'iconsPerPage' => 200, // default 100, how many icons per/page to display
            ),
            'dependency' => array(
                'element' => 'icon_type',
                'value' => 'entypo',
            ),
            'description' => esc_html__( 'Select icon from library.', "wp-experts" ),
            "group" => esc_html__("Settings", "wp-experts"),
        ),
        array(
            'type' => 'iconpicker',
            'heading' => esc_html__( 'Icon Item', "wp-experts" ),
            'param_name' => 'icon_linecons',
            'value' => '',
            'settings' => array(
                'emptyIcon' => true, // default true, display an "EMPTY" icon?
                'type' => 'linecons',
                'iconsPerPage' => 200, // default 100, how many icons per/page to display
            ),
            'dependency' => array(
                'element' => 'icon_type',
                'value' => 'linecons',
            ),
            'description' => esc_html__( 'Select icon from library.', "wp-experts" ),
            "group" => esc_html__("Settings", "wp-experts"),
        ),
        array(
            'type' => 'iconpicker',
            'heading' => esc_html__( 'Icon Item', "wp-experts" ),
            'param_name' => 'icon_pixelicons',
            'value' => '',
            'settings' => array(
                'emptyIcon' => true, // default true, display an "EMPTY" icon?
                'type' => 'pixelicons',
                'iconsPerPage' => 200, // default 100, how many icons per/page to display
            ),
            'dependency' => array(
                'element' => 'icon_type',
                'value' => 'pixelicons',
            ),
            'description' => esc_html__( 'Select icon from library.', "wp-experts" ),
            "group" => esc_html__("Settings", "wp-experts"),
        ),
        array(
            'type' => 'iconpicker',
            'heading' => esc_html__( 'Icon Item', "wp-experts" ),
            'param_name' => 'icon_pe7stroke',
            'value' => '',
            'settings' => array(
                'emptyIcon' => true, // default true, display an "EMPTY" icon?
                'type' => 'pe7stroke',
                'iconsPerPage' => 200, // default 100, how many icons per/page to display
            ),
            'dependency' => array(
                'element' => 'icon_type',
                'value' => 'pe7stroke',
            ),
            'description' => esc_html__( 'Select icon from library.', "wp-experts" ),
            "group" => esc_html__("Settings", "wp-experts"),
        ),
        array(
            'type' => 'iconpicker',
            'heading' => esc_html__( 'Icon Item', "wp-experts" ),
            'param_name' => 'icon_rticon',
            'value' => '',
            'settings' => array(
                'emptyIcon' => true, // default true, display an "EMPTY" icon?
                'type' => 'rticon',
                'iconsPerPage' => 200, // default 100, how many icons per/page to display
            ),
            'dependency' => array(
                'element' => 'icon_type',
                'value' => 'rticon',
            ),
            'description' => esc_html__( 'Select icon from library.', "wp-experts" ),
            "group" => esc_html__("Settings", "wp-experts"),
        ),
        /* End Icon */
        array(
            "type" => "dropdown",
            "class" => "",
            "heading" => esc_html__("Icon Align", "wp-experts"),
            "admin_label" => true,
            "param_name" => "icon_align",
            "value" => array(
                "Left" => "left",
                "Right" => "right"
            ),
            "group" => esc_html__("Settings", "wp-experts"),
        ),
        array(    
            'type' => 'dropdown',
            'heading' => esc_html__("Button Style", "wp-experts"),
            'param_name' => 'button_style',
            'value' => array(
                'Theme Default' => 'btn',    
                'Button Primary Color' => 'btn-primary',
                'Button Primary White Alt' => 'btn-primary-white-alt',
                'Button Secondary Color' => 'btn-secondary',             
                'Button Default White' => 'btn-default-white',        
                'Button Default White Alt' => 'btn-default-white-alt',        
            ),
            "group" => esc_html__("Settings", "wp-experts"),
        ),  
        array(    
            'type' => 'dropdown',
            'heading' => esc_html__("Button Size", "wp-experts"),
            'param_name' => 'button_size',
            'value' => array(
                'Default' => 'size-default',        
                'Large' => 'btn-lg',        
                'Medium' => 'btn-md',        
                'Mini' => 'btn-xs',        
            ),
            "group" => esc_html__("Settings", "wp-experts"),
        ),  
        array(    
            'type' => 'dropdown',
            'heading' => esc_html__("Button Align", "wp-experts"),
            'param_name' => 'button_align',
            'value' => array(
                'Right' => 'cta-right',   
                'Left' => 'cta-left',        
            ),
            "group" => esc_html__("Settings", "wp-experts"),
        ),  
        array(
            "type" => "textfield",
            "heading" => __ ( "Extra class name", "wp-experts" ),
            "param_name" => "el_class",
            "description" => __ ( "If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "wp-experts" ),
            "group" => esc_html__("Settings", "wp-experts"),
        ), 
        array(
            'type' => 'cms_template_img',
            'param_name' => 'cms_template',
            "shortcode" => "cms_cta",
            "heading" => esc_html__("Shortcode Template","wp-experts"),
            "admin_label" => true,
            "group" => esc_html__("Template", "wp-experts"),
            "defautl" => "cms_cta.php",
        ),
    )
));

class WPBakeryShortCode_cms_cta extends CmsShortCode
{

    protected function content($atts, $content = null)
    {
        return parent::content($atts, $content);
    }
}

?>