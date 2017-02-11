<?php
vc_map(array(
    "name" => 'CMS Process',
    "base" => "cms_process",
    "icon" => "cs_icon_for_vc",
    "category" => esc_html__('CmsSuperheroes Shortcodes', 'wp-experts'),
    "params" => array(

        array(
            "type" => "textfield",
            "heading" => esc_html__("Year", 'wp-experts'),
            "param_name" => "year1",
            "description" => esc_html__("", 'wp-experts'),
            "group" => esc_html__("Item 1", 'wp-experts'),
        ),

        array(
            "type" => "textfield",
            "heading" => esc_html__("Title", 'wp-experts'),
            "param_name" => "process_title1",
            "description" => esc_html__("", 'wp-experts'),
            "group" => esc_html__("Item 1", 'wp-experts'),
        ),
        array(
            "type" => "textarea",
            "heading" => esc_html__("Description", 'wp-experts'),
            "param_name" => "process_description1",
            "description" => esc_html__("", 'wp-experts'),
            "group" => esc_html__("Item 1", 'wp-experts'),
        ),

        array(
            "type" => "textfield",
            "heading" => esc_html__("Year", 'wp-experts'),
            "param_name" => "year2",
            "description" => esc_html__("", 'wp-experts'),
            "group" => esc_html__("Item 2", 'wp-experts'),
        ),

        array(
            "type" => "textfield",
            "heading" => esc_html__("Title", 'wp-experts'),
            "param_name" => "process_title2",
            "description" => esc_html__("", 'wp-experts'),
            "group" => esc_html__("Item 2", 'wp-experts'),
        ),

        array(
            "type" => "textarea",
            "heading" => esc_html__("Description", 'wp-experts'),
            "param_name" => "process_description2",
            "description" => esc_html__("", 'wp-experts'),
            "group" => esc_html__("Item 2", 'wp-experts'),
        ),

        array(
            "type" => "textfield",
            "heading" => esc_html__("Year", 'wp-experts'),
            "param_name" => "year3",
            "description" => esc_html__("", 'wp-experts'),
            "group" => esc_html__("Item 3", 'wp-experts'),
        ),

        array(
            "type" => "textfield",
            "heading" => esc_html__("Title", 'wp-experts'),
            "param_name" => "process_title3",
            "description" => esc_html__("", 'wp-experts'),
            "group" => esc_html__("Item 3", 'wp-experts'),
        ),
        array(
            "type" => "textarea",
            "heading" => esc_html__("Description", 'wp-experts'),
            "param_name" => "process_description3",
            "description" => esc_html__("", 'wp-experts'),
            "group" => esc_html__("Item 3", 'wp-experts'),
        ),

        array(
            "type" => "textfield",
            "heading" => esc_html__("Year", 'wp-experts'),
            "param_name" => "year4",
            "description" => esc_html__("", 'wp-experts'),
            "group" => esc_html__("Item 4", 'wp-experts'),
        ),

        array(
            "type" => "textfield",
            "heading" => esc_html__("Title", 'wp-experts'),
            "param_name" => "process_title4",
            "description" => esc_html__("", 'wp-experts'),
            "group" => esc_html__("Item 4", 'wp-experts'),
        ),
        array(
            "type" => "textarea",
            "heading" => esc_html__("Description", 'wp-experts'),
            "param_name" => "process_description4",
            "description" => esc_html__("", 'wp-experts'),
            "group" => esc_html__("Item 4", 'wp-experts'),
        ),

        array(
            "type" => "textfield",
            "heading" => esc_html__("Year", 'wp-experts'),
            "param_name" => "year5",
            "description" => esc_html__("", 'wp-experts'),
            "group" => esc_html__("Item 5", 'wp-experts'),
        ),

        array(
            "type" => "textfield",
            "heading" => esc_html__("Title", 'wp-experts'),
            "param_name" => "process_title5",
            "description" => esc_html__("", 'wp-experts'),
            "group" => esc_html__("Item 5", 'wp-experts'),
        ),
        array(
            "type" => "textarea",
            "heading" => esc_html__("Description", 'wp-experts'),
            "param_name" => "process_description5",
            "description" => esc_html__("", 'wp-experts'),
            "group" => esc_html__("Item 5", 'wp-experts'),
        ),

    )
));

class WPBakeryShortCode_cms_process extends CmsShortCode
{

    protected function content($atts, $content = null)
    {
        return parent::content($atts, $content);
    }
}

?>