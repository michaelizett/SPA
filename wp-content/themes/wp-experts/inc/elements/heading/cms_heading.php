<?php
vc_map(array(
    "name" => 'CMS Heading',
    "base" => "cms_heading",
    "icon" => "cs_icon_for_vc",
    "category" => esc_html__('CmsSuperheroes Shortcodes', "wp-experts"),
    "params" => array(
        array(
            "type" => "textfield",
            "heading" => __ ( 'Subtitle', "wp-experts" ),
            "param_name" => "hd_subtitle",
            "value" => '',
            "group" => esc_html__("Heading Settings", "wp-experts")
        ),
        array(
            "type" => "colorpicker",
            "heading" => esc_html__("Sub Color","wp-experts"),
            "param_name" => "sub_color",
            "value" => "",
            "group" => esc_html__("Heading Settings", "wp-experts")
        ),
        array(
            "type" => "textfield",
            "heading" => __ ( 'Title', "wp-experts" ),
            "param_name" => "hd_title",
            "value" => '',
            "group" => esc_html__("Heading Settings", "wp-experts")
        ),
        array(
            "type" => "colorpicker",
            "heading" => esc_html__("Title Color","wp-experts"),
            "param_name" => "title_color",
            "value" => "",
            "group" => esc_html__("Heading Settings", "wp-experts")
        ),
        array(
            "type" => "textarea",
            "heading" => __ ( 'Description', "wp-experts" ),
            "param_name" => "hd_description",
            "value" => '',
            "group" => esc_html__("Heading Settings", "wp-experts")
        ),
        array(
            "type" => "colorpicker",
            "heading" => esc_html__("Description Color","wp-experts"),
            "param_name" => "description_color",
            "value" => "",
            "group" => esc_html__("Heading Settings", "wp-experts")
        ),
        array(
            "type" => "textfield",
            "heading" => __ ( 'Button Text', "wp-experts" ),
            "param_name" => "hd_btn_text",
            "value" => '',
            "group" => esc_html__("Heading Settings", "wp-experts"),
        ),

        array(
            "type" => "vc_link",
            "heading" => __ ( 'Button Link', "wp-experts" ),
            "param_name" => "hd_btn_link",
            "value" => '',
            "group" => esc_html__("Heading Settings", "wp-experts"),
        ),
        array(
            "type" => "dropdown",
            "class" => "",
            "heading" => esc_html__("Content Align", "wp-experts"),
            "admin_label" => true,
            "param_name" => "content_align",
            "value" => array(
                "Center" => "center",
                "Left" => "left",
                "Right" => "right"
            ),
            "group" => esc_html__("Heading Settings", "wp-experts"),
            "dependency" => array(
                "element"=>"cms_template",
                "value"=>array(
                    "cms_heading.php",
                    "cms_heading--style2.php",
                    "cms_heading--style4.php",
                )
            ),
        ),
        array(
            'type' => 'cms_template_img',
            'param_name' => 'cms_template',
            "shortcode" => "cms_heading",
            "heading" => esc_html__("Shortcode Template","wp-experts"),
            "admin_label" => true,
            "group" => esc_html__("Template", "wp-experts"),
        ),
    )
));

class WPBakeryShortCode_cms_heading extends CmsShortCode
{

    protected function content($atts, $content = null)
    {
        return parent::content($atts, $content);
    }
}

?>