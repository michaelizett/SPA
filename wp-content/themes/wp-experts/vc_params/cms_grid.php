<?php
	$params = array(
        array(
            "type" => "textfield",
            "heading" => esc_html__("Grid Item Space - Font Size", 'wp-experts'),
            "param_name" => "gird_item_space",
            "description" => esc_html__("px, Default: 0px", 'wp-experts'),
            "template" => array(
                "cms_grid--layout-gallery1.php",
            ),
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__("Title Case", 'wp-experts'),
            "param_name" => "gird_title_case",
            "description" => esc_html__("", 'wp-experts'),
            "template" => array(
                "cms_grid--layout-case1.php",
                "cms_grid--layout-case2.php",
            ),
        ),
        array(
            "type" => "dropdown",
            "heading" => esc_html__("Crop Images",'wp-experts'),
            "param_name" => "gird_crop_image",
            "description" => esc_html__("Apply Layout Type: Masonry", 'wp-experts'),
            "value" => array(
                    "No" => "",
                    "Yes" => "yes",
            ),
            "template" => array(
                "cms_grid--layout-project1.php",
            ),
        ),
        array(
            "type" => "dropdown",
            "heading" => esc_html__("Show/Hide Navigation", "wp-experts"),
            "param_name" => "show_hide_navigation",
            "value" => array(
                "Yes" => "yes",
                "No" => "",                          
            ),
            "template" => array(
                "cms_grid--layout-team1.php",
                "cms_grid--layout-team2.php",
                "cms_grid--layout-team3.php",
                "cms_grid--layout-case1.php",
                "cms_grid--layout-case2.php",
            ),
            "group" => esc_html__("Template", "wp-experts"),
        ),

        array(
            "type" => "dropdown",
            "heading" => esc_html__("Hide Icon", "wp-experts"),
            "param_name" => "hide_icon_services",
            "value" => array(
                "No" => "show-icon",
                "Hidden Icon Style 1" => "hidden-icon-style1",                
                "Hidden Icon Style 2" => "hidden-icon-style2",                
            ),
            "template" => array(
                "cms_grid--layout-services2.php",
            ),
            "group" => esc_html__("Template", "wp-experts"),
        ),
        array(
            "type" => "colorpicker",
            "heading" => esc_html__("Title Color","wp-experts"),
            "param_name" => "color_pricing_title",
            "value" => "",
            "template" => array(
                "cms_grid--layout-pricing2.php",
                "cms_grid--layout-pricing3.php",
            ),
            "group" => esc_html__("Template", "wp-experts"),
        ),
        array(
            "type" => "colorpicker",
            "heading" => esc_html__("BG Header","wp-experts"),
            "param_name" => "bg_pricing_header",
            "value" => "",
            "template" => array(
                "cms_grid--layout-pricing2.php",
                "cms_grid--layout-pricing3.php",
            ),
            "group" => esc_html__("Template", "wp-experts"),
        ),
        array(
            "type" => "dropdown",
            "heading" => esc_html__("Hide Content", "wp-experts"),
            "param_name" => "pricing_hidden_content",
            "value" => array(
                "No" => "show",
                "Yes" => "yes"                
            ),
            "template" => array(
                "cms_grid--layout-pricing2.php",
            ),
            "group" => esc_html__("Template", "wp-experts"),
        ),
	);
	vc_remove_param('cms_grid','cms_template');
	$cms_template_attribute = array(
		'type' => 'cms_template_img',
	    'param_name' => 'cms_template',
	    "shortcode" => "cms_grid",
	    "heading" => esc_html__("Shortcode Template","wp-experts"),
	    "admin_label" => true,
	    "group" => esc_html__("Template", "wp-experts"),
		);
	vc_add_param('cms_grid',$cms_template_attribute);
?>