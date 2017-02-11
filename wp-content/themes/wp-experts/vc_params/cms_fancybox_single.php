<?php
	$params = array(
		array(
			'type' => 'cms_template_img',
		    'param_name' => 'cms_template',
		    "shortcode" => "cms_fancybox_single",
		    "heading" => esc_html__("Shortcode Template","wp-experts"),
		    "admin_label" => true,
		    "group" => esc_html__("Template", "wp-experts"),
		),
        array(
            "type" => "colorpicker",
            "heading" => esc_html__("Icon Color","wp-experts"),
            "param_name" => "icon_color",
            "value" => "",
            "template" => array(
                "cms_fancybox_single--layout1.php",
                "cms_fancybox_single--layout2.php",
                "cms_fancybox_single--layout4.php",
            ),
            "group" => esc_html__("Template", "wp-experts"),
        ),
        array(
            "type" => "colorpicker",
            "heading" => esc_html__("Title Color","wp-experts"),
            "param_name" => "title_color",
            "value" => "",
            "template" => array(
                "cms_fancybox_single--layout1.php",
                "cms_fancybox_single--layout2.php",
                "cms_fancybox_single--layout4.php",
            ),
            "group" => esc_html__("Template", "wp-experts"),
        ),
        array(
            "type" => "colorpicker",
            "heading" => esc_html__("Description Color","wp-experts"),
            "param_name" => "description_color",
            "value" => "",
            "template" => array(
                "cms_fancybox_single--layout1.php",
                "cms_fancybox_single--layout2.php",
                "cms_fancybox_single--layout4.php",
            ),
            "group" => esc_html__("Template", "wp-experts"),
        ),
		array(
			"type" => "textfield",
			"heading" => esc_html__("Custom Icon -  Add Class Icon","wp-experts"),
			"param_name" => "icon_custom",
			"value" => "",
			"group" => esc_html__("Template", "wp-experts"),
		),
		array(
            "type" => "dropdown",
            "heading" => esc_html__("Box Shadow", "wp-experts"),
            "param_name" => "box_shadow",
            "value" => array(
            	"No" => "no", 
                "Yes" => "yes"              
            ),
            "template" => array(
            	"cms_fancybox_single.php",
            ),
            "group" => esc_html__("Template", "wp-experts"),
        ),
        array(
            "type" => "colorpicker",
            "heading" => esc_html__("Box Color","wp-experts"),
            "param_name" => "box_color",
            "value" => "",
            "template" => array(
                "cms_fancybox_single.php",
            ),
            "group" => esc_html__("Template", "wp-experts"),
        ),
        array(
            "type" => "dropdown",
            "heading" => esc_html__("Box Align", "wp-experts"),
            "param_name" => "box_align",
            "value" => array(
            	"Left" => "left", 
                "Center" => "center",              
                "Right" => "right",              
            ),
            "template" => array(
            	"cms_fancybox_single--layout1.php",
            ),
            "group" => esc_html__("Template", "wp-experts"),
        ),
        array(
            "type" => "dropdown",
            "heading" => esc_html__("Box Icon", "wp-experts"),
            "param_name" => "box_icon",
            "value" => array(
                "No" => "no", 
                "Yes" => "yes",              
            ),
            "template" => array(
                "cms_fancybox_single--layout1.php",
            ),
            "group" => esc_html__("Template", "wp-experts"),
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__("Order box",'wp-experts'),
            "param_name" => "cms_fancybox_order_box",
            "value" => "",
            "group" => esc_html__("Template", 'wp-experts'),
            "description" => esc_html__("Enter number.", 'wp-experts'),
            'dependency' => array(
                "element"=>"cms_template",
                "value"=>array(
                    "cms_fancybox_single--layout3.php"
                )
            ),
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__("Subtitle", 'wp-experts'),
            "param_name" => "cms_fancybox_subtitle",
            "template" => array(
                "cms_fancybox_single--layout3.php",
            ),
        ),
	);
    /** Remove pamrams **/
    vc_remove_param( "cms_fancybox_single", "title" );
    vc_remove_param( "cms_fancybox_single", "description" );
    vc_remove_param( "cms_fancybox_single", "content_align" );
?>