<?php
	$params = array(
		array(
			'type' => 'cms_template_img',
		    'param_name' => 'cms_template',
		    "shortcode" => "cms_counter_single",
		    "heading" => esc_html__("Shortcode Template","wp-experts"),
		    "admin_label" => true,
		    "group" => esc_html__("Template", "wp-experts"),
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__("Icon Color","wp-experts"),
			"param_name" => "icon_color",
			"value" => "",
			"group" => esc_html__("Template", "wp-experts")
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__("Digit Color","wp-experts"),
			"param_name" => "digit_color",
			"value" => "",
			"group" => esc_html__("Template", "wp-experts")
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__("Title Color","wp-experts"),
			"param_name" => "title_color",
			"value" => "",
			"group" => esc_html__("Template", "wp-experts")
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__("Content Background Color","wp-experts"),
			"param_name" => "bg_color",
			"value" => "",
			"group" => esc_html__("Template", "wp-experts")
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__("Icon Font Size","wp-experts"),
			"param_name" => "icon_fontsize",
			"value" => "",
			"group" => esc_html__("Template", "wp-experts")
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__("Custom Icon -  Add Class Icon","wp-experts"),
			"param_name" => "icon_custom",
			"value" => "",
			"group" => esc_html__("Template", "wp-experts"),
		),
	);
?>