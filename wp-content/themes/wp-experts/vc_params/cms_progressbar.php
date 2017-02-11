<?php
	vc_remove_param('cms_progressbar','cms_template');
	$cms_template_attribute = array(
		'type' => 'cms_template_img',
	    'param_name' => 'cms_template',
	    "shortcode" => "cms_progressbar",
	    "heading" => esc_html__("Shortcode Template","wp-experts"),
	    "admin_label" => true,
	    "group" => esc_html__("Template", "wp-experts"),
		);
	vc_add_param('cms_progressbar',$cms_template_attribute);
?>