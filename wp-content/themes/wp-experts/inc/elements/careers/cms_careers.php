<?php
vc_map(array(
    "name" => 'CMS Careers',
    "base" => "cms_careers",
    "icon" => "cs_icon_for_vc",
    "category" => esc_html__('CmsSuperheroes Shortcodes', "wp-marxs"),
    "params" => array(
        array(
            'type' => 'cms_template_img',
            'param_name' => 'cms_template',
            "shortcode" => "cms_careers",
            "heading" => esc_html__("Shortcode Template","wp-marxs"),
            "admin_label" => true,
            "group" => esc_html__("Template", "wp-marxs"),
        ),
    )
));

class WPBakeryShortCode_cms_careers extends CmsShortCode
{

    protected function content($atts, $content = null)
    {
        return parent::content($atts, $content);
    }
}

?>