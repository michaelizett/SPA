<?php
	$params = array(
		array(
            "type" => "dropdown",
            "heading" => esc_html__("Navigation Position", "wp-experts"),
            "param_name" => "nav_custom",
            "value" => array(
                "Default" => "nav-custom-df",              
                "Bottom Right" => "nav-custom-br",              
            ),
            "template" => array(
                "cms_carousel--layout-teatimonial1.php",
            ),
            "group" => esc_html__("Template", "wp-experts"),
        ),
        array(
            "type" => "colorpicker",
            "heading" => esc_html__("Title Color","wp-experts"),
            "param_name" => "title_color",
            "value" => "",
            "template" => array(
                "cms_carousel--layout-teatimonial1.php",
            ),
            "group" => esc_html__("Template", "wp-experts"),
        ),
        array(
            "type" => "colorpicker",
            "heading" => esc_html__("Position Color","wp-experts"),
            "param_name" => "position_color",
            "value" => "",
            "template" => array(
                "cms_carousel--layout-teatimonial1.php",
            ),
            "group" => esc_html__("Template", "wp-experts"),
        ),
        array(
            "type" => "dropdown",
            "heading" => esc_html__("Show/Hide Feature Image", "wp-experts"),
            "param_name" => "show_hide_image",
            "value" => array(
                "Yes" => "yes",              
                "No" => "No",              
            ),
            "template" => array(
                "cms_carousel--layout-services3.php",
            ),
            "group" => esc_html__("Template", "wp-experts"),
        ),
	);
    
    vc_remove_param('cms_carousel','l_icon_type');
    vc_remove_param('cms_carousel','l_icon_fontawesome');
    vc_remove_param('cms_carousel','l_icon_openiconic');
    vc_remove_param('cms_carousel','l_icon_typicons');
    vc_remove_param('cms_carousel','l_icon_entypo');
    vc_remove_param('cms_carousel','l_icon_glyphicons');
    vc_remove_param('cms_carousel','l_icon_rticon');
    vc_remove_param('cms_carousel','l_icon_pe7stroke');
    vc_remove_param('cms_carousel','l_icon_pixelicons');
    vc_remove_param('cms_carousel','l_icon_linecons');

    vc_remove_param('cms_carousel','r_icon_type');
    vc_remove_param('cms_carousel','r_icon_type');
    vc_remove_param('cms_carousel','r_icon_fontawesome');
    vc_remove_param('cms_carousel','r_icon_openiconic');
    vc_remove_param('cms_carousel','r_icon_typicons');
    vc_remove_param('cms_carousel','r_icon_entypo');
    vc_remove_param('cms_carousel','r_icon_glyphicons');
    vc_remove_param('cms_carousel','r_icon_rticon');
    vc_remove_param('cms_carousel','r_icon_pe7stroke');
    vc_remove_param('cms_carousel','r_icon_pixelicons');
    vc_remove_param('cms_carousel','r_icon_linecons');
    
	vc_remove_param('cms_carousel','cms_template');
	$cms_template_attribute = array(
		'type' => 'cms_template_img',
	    'param_name' => 'cms_template',
	    "shortcode" => "cms_carousel",
	    "heading" => esc_html__("Shortcode Template","wp-experts"),
	    "admin_label" => true,
	    "group" => esc_html__("Template", "wp-experts"),
		);
	vc_add_param('cms_carousel',$cms_template_attribute);
?>