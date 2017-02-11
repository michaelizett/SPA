<?php
/*
 * VC
 */

if (shortcode_exists('contact-form-7')) {
    vc_add_param("contact-form-7", array(
        "type" => "dropdown",
        "class" => "",
        "heading" => esc_html__("Contact Style", 'wp-serenity-spa'),
        "param_name" => "html_class",
        "value" => array(
            'Default' => 'style-default',
            'Service' => 'style-service',
            'BG Gray' => 'bg-gray',
        ),
    ));
}