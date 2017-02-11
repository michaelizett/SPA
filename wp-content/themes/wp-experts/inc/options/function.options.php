<?php
global $wp_experts_base;

/**
 * Header Options
 * 
 * @author Fox
 */
$this->sections[] = array(
    'title' => esc_html__('Header', 'wp-experts'),
    'icon' => 'el-icon-credit-card',
    'fields' => array(
        array(
            'id' => 'header_layout',
            'title' => esc_html__('Layouts', 'wp-experts'),
            'subtitle' => esc_html__('Select a layout for header', 'wp-experts'),
            'default' => '1',
            'type' => 'image_select',
            'options' => array(
                '1' => get_template_directory_uri().'/inc/options/images/header/header1.jpg',
                '2' => get_template_directory_uri().'/inc/options/images/header/header2.jpg',
                '3' => get_template_directory_uri().'/inc/options/images/header/header3.jpg',
                '4' => get_template_directory_uri().'/inc/options/images/header/header4.jpg',
                '5' => get_template_directory_uri().'/inc/options/images/header/header5.jpg',
                '6' => get_template_directory_uri().'/inc/options/images/header/header6.jpg',
                '7' => get_template_directory_uri().'/inc/options/images/header/header7.jpg',
                '8' => get_template_directory_uri().'/inc/options/images/header/header8.jpg',
                '9' => get_template_directory_uri().'/inc/options/images/header/header9.jpg',
                '10' => get_template_directory_uri().'/inc/options/images/header/header10.jpg',
                '11' => get_template_directory_uri().'/inc/options/images/header/header11.jpg',
                '12' => get_template_directory_uri().'/inc/options/images/header/header12.jpg',
                '13' => get_template_directory_uri().'/inc/options/images/header/header13.jpg',
                '14' => get_template_directory_uri().'/inc/options/images/header/header14.jpg',
                '15' => get_template_directory_uri().'/inc/options/images/header/header15.jpg',
                '17' => get_template_directory_uri().'/inc/options/images/header/header17.jpg',
                '18' => get_template_directory_uri().'/inc/options/images/header/header18.jpg',
                '19' => get_template_directory_uri().'/inc/options/images/header/header19.jpg',
                '20' => get_template_directory_uri().'/inc/options/images/header/header20.jpg',
                '21' => get_template_directory_uri().'/inc/options/images/header/header21.jpg',
                '22' => get_template_directory_uri().'/inc/options/images/header/header22.jpg',
            )
        ),
        array(
            'subtitle' => esc_html__('Enable header sticky.', 'wp-experts'),
            'id' => 'menu_sticky',
            'type' => 'switch',
            'title' => esc_html__('Header Sticky', 'wp-experts'),
            'default' => false,
        ),
        array(
            'subtitle' => esc_html__('', 'wp-experts'),
            'id' => 'show_search_icon',
            'type' => 'switch',
            'title' => esc_html__('Show Search Icon', 'wp-experts'),
            'default' => true,
        ),
        array(
            'id' => 'show_cart_icon',
            'type' => 'switch',
            'title' => esc_html__('Show Cart Icon', 'wp-experts'),
            'default' => false,
        ),
        array(
            'title' => esc_html__('Favicon Icon', 'wp-experts'),
            'subtitle' => esc_html__('Select a favicon icon (.png, .jpg).', 'wp-experts'),
            'id' => 'favicon_icon',
            'type' => 'media',
            'url' => false,
            'default' => array(
                'url'=>get_template_directory_uri().'/assets/images/favicon.png'
            )

        ),
    )
);

/**
 * Top Bar
 * 
 * @author Fox
 */
$this->sections[] = array(
    'title' => esc_html__('Top Bar', 'wp-experts'),
    'icon' => 'el el-resize-horizontal',
    'subsection' => true,
    'fields' => array(
        array(
            'id'      => 'cms_top_social',
            'type'    => 'sorter',
            'title'   => 'Social',
            'desc'    => 'Choose which social networks are displayed and edit where they link to.',
            'options' => array(
                'enabled'  => array(
                    'facebook'  => 'Facebook', 
                    'twitter'   => 'Twitter', 
                    'linkedin'  => 'inkedin',
                    'rss'       => 'RSS', 
                ),
                'disabled' => array(
                    'youtube'   => 'Youtube', 
                    'vimeo'     => 'Vimeo', 
                    'tumblr'    => 'Tumblr', 
                    'skype'     => 'Skype', 
                    'google'    => 'Google',
                    'pinterest' => 'Pinterest',
                    'instagram' => 'Instagram',
                    'yelp'      => 'Yelp',
                    'viadeo'      => 'Viadeo'
                )
            ),
        ),
        array(
            'subtitle' => esc_html__('Apply header layout 19', 'wp-experts'),
            'id' => 'top_wellcome',
            'type' => 'text',
            'title' => esc_html__('Tab Wellcome', 'wp-experts'),
            'default' => '',
        ),
        array(
            'subtitle' => esc_html__('', 'wp-experts'),
            'id' => 'top_button_text',
            'type' => 'text',
            'title' => esc_html__('Appointment - Button Text', 'wp-experts'),
            'default' => '',
        ),
        array(
            'subtitle' => esc_html__('', 'wp-experts'),
            'id' => 'top_button_link',
            'type' => 'text',
            'title' => esc_html__('Appointment - Button URL', 'wp-experts'),
            'default' => '',
        ),
        array(
            'title' => __('Contact', 'wp-experts'),
            'type'  => 'section',
            'subtitle' => __('', 'wp-experts'),
            'id' => 'section-start',
            'indent' => true
        ),
        array(
            'subtitle' => esc_html__('', 'wp-experts'),
            'id' => 'top_email',
            'type' => 'text',
            'title' => esc_html__('Email', 'wp-experts'),
            'default' => '7oroof@7oroof.com',
        ),
        array(
            'subtitle' => esc_html__('', 'wp-experts'),
            'id' => 'top_phone',
            'type' => 'text',
            'title' => esc_html__('Phone', 'wp-experts'),
            'default' => '002 01065370701',
        ),
        array(
            'subtitle' => esc_html__('Apply header layout 19', 'wp-experts'),
            'id' => 'top_visit',
            'type' => 'text',
            'title' => esc_html__('Visit', 'wp-experts'),
            'default' => 'Tanta AlGharbia, Egypt.',
        ),
    )
);

/* Logo */
$this->sections[] = array(
    'title' => esc_html__('Logo', 'wp-experts'),
    'icon' => 'el-icon-picture',
    'subsection' => true,
    'fields' => array(
        array(
            'title' => esc_html__('Logo', 'wp-experts'),
            'subtitle' => esc_html__('Select an image file for your logo.', 'wp-experts'),
            'id' => 'main_logo',
            'type' => 'media',
            'url' => false,
            'default' => array(
                'url'=>get_template_directory_uri().'/assets/images/logo.png'
            )
        ),
        array(
            'subtitle' => esc_html__('in pixels.', 'wp-experts'),
            'id' => 'main_logo_height',
            'title' => 'Logo Height',
            'type' => 'dimensions',
            'units' => array( 'px' ), 
            'width' => false,
            'output' => array('#cshero-header-inner #cshero-header #cshero-header-logo a img'),
            'default' => array(
                'height' => '',
            )
        ),

        array(
            'title' => esc_html__('Logo Sticky', 'wp-experts'),
            'subtitle' => esc_html__('Select an image file for your logo.', 'wp-experts'),
            'id' => 'sticky_logo',
            'type' => 'media',
            'url' => false,
            'default' => array(
                'url'=>get_template_directory_uri().'/assets/images/logo_sticky.png'
            )
        ),

        array(
            'subtitle' => esc_html__('in pixels.', 'wp-experts'),
            'id' => 'sticky_logo_height',
            'title' => 'Sticky Logo Height',
            'type' => 'dimensions',
            'units' => array( 'px' ), 
            'width' => false,
            'output' => array('#cshero-header-inner #cshero-header.header-fixed #cshero-header-logo a img'),
            'default' => array(
                'height' => '',
            )
        ),
    )
);

/**
 * Page Title Options
 * 
 * @author Fox
 */
$this->sections[] = array(
    'title' => esc_html__('Page Title', 'wp-experts'),
    'icon' => 'el el-map-marker',
    'fields' => array(
        array(
            'id' => 'page_title_layout',
            'title' => esc_html__('Layouts', 'wp-experts'),
            'subtitle' => esc_html__('Select a layout for page title', 'wp-experts'),
            'default' => '1',
            'type' => 'image_select',
            'options' => array(
                '' => get_template_directory_uri().'/inc/options/images/pagetitle/p0.png',
                '1' => get_template_directory_uri().'/inc/options/images/pagetitle/p1.jpg',
                '2' => get_template_directory_uri().'/inc/options/images/pagetitle/p2.jpg',
                '3' => get_template_directory_uri().'/inc/options/images/pagetitle/p3.jpg',
                '4' => get_template_directory_uri().'/inc/options/images/pagetitle/p4.jpg',
                '5' => get_template_directory_uri().'/inc/options/images/pagetitle/p5.jpg',
                '6' => get_template_directory_uri().'/inc/options/images/pagetitle/p6.jpg',
                '7' => get_template_directory_uri().'/inc/options/images/pagetitle/p7.jpg',
                '8' => get_template_directory_uri().'/inc/options/images/pagetitle/p8.jpg',
                '9' => get_template_directory_uri().'/inc/options/images/pagetitle/p9.jpg',
            )
        ),
        array(
            'title' => esc_html__('Select Background Image', 'wp-experts'),
            'subtitle' => esc_html__('Select an image file for background page title.', 'wp-experts'),
            'id' => 'bg_image_page_title',
            'type' => 'media',
            'url' => false,
            'default' => array(
                'url'=>get_template_directory_uri().'/assets/images/bg-page-title.jpg'
            )
        ),
        array(
            'id'             => 'page_title_padding',
            'type'           => 'spacing',
            'output'         => array('body #page-title.page-title'),
            'mode'           => 'padding',
            'units'          => array('px'),
            'units_extended' => 'false',
            'title'          => __('Page Title Padding', 'wp-experts'),
            'default'            => '',
            'subtitle' => esc_html__('Enter number', 'wp-experts'),
        ),
        array(
            'id'             => 'page_title_margin',
            'type'           => 'spacing',
            'output'         => array('body #page-title.page-title'),
            'mode'           => 'margin',
            'units'          => array('px'),
            'units_extended' => 'false',
            'title'          => __('Page Title Margin', 'wp-experts'),
            'default'            => '',
            'subtitle' => esc_html__('Enter number', 'wp-experts'),
        )
    )
);

/**
 * Body
 *
 * @author Fox
 */
$this->sections[] = array(
    'title' => esc_html__('Body', 'wp-experts'),
    'icon' => 'el-icon-website',
    'fields' => array(
        array(
            'subtitle' => esc_html__('Set layout boxed default(Wide).', 'wp-experts'),
            'id' => 'body_layout',
            'type' => 'switch',
            'title' => esc_html__('Boxed Layout', 'wp-experts'),
            'default' => false,
        ),
        array(
            'id'       => 'body_background',
            'type'     => 'background',
            'title'    => esc_html__( 'Background', 'wp-experts' ),
            'subtitle' => esc_html__( 'body background with image, color, etc.', 'wp-experts' ),
            'output'   => array('body'),
            'required' => array(
                0 => 'body_layout',
                1 => '=',
                2 => 1
            )
        ),
        array(
            'id'             => 'body_margin',
            'type'           => 'spacing',
            'output'         => array('body #page-wrapper.cs-boxed'),
            'right'   => false,
            'left'    => false,
            'mode'           => 'margin',
            'units'          => array('px'),
            'units_extended' => 'false',
            'title'          => esc_html__('Margin', 'wp-experts'),
            'desc'           => esc_html__('', 'wp-experts'),
            'default'            => array(
                'margin-top'   => '',  
                'margin-bottom'   => '',  
                'units'          => 'px', 
            ),
            'required' => array(
                0 => 'body_layout',
                1 => '=',
                2 => 1
            )
        ),
        array(
            'subtitle' => esc_html__('', 'wp-experts'),
            'id' => 'body_border',
            'type' => 'switch',
            'title' => esc_html__('Body Border', 'wp-experts'),
            'default' => false,
        ),

        array(
            'id'       => 'body_border_width',
            'type'     => 'dimensions',
            'height'     => false,
            'units'    => array('px'),
            'title'    => __('Border Width', 'wp-experts'),
            'default'  => array(
                'Width'   => '',
            ),
            'required' => array(
                0 => 'body_border',
                1 => '=',
                2 => 1
            )
        ),
        array(
            'id'       => 'body_border_color',
            'type'     => 'color',
            'height'     => false,
            'units'    => array('px'),
            'title'    => __('Border Color', 'wp-experts'),
            'default'  => '',
            'required' => array(
                0 => 'body_border',
                1 => '=',
                2 => 1
            )
        ),
    )
);

/**
 * Page Loadding
 * 
 * 
 * @author Fox
 */
$this->sections[] = array(
    'title' => esc_html__('Page Loadding', 'wp-experts'),
    'icon' => 'el-icon-compass',
    'subsection' => true,
    'fields' => array(
        array(
            'subtitle' => esc_html__('Enable page loadding.', 'wp-experts'),
            'id' => 'enable_page_loadding',
            'type' => 'switch',
            'title' => esc_html__('Enable Page Loadding', 'wp-experts'),
            'default' => false,
        ),
    )
);


/**
 * Footer
 *
 * @author Fox
 */
$this->sections[] = array(
    'title' => esc_html__('Footer', 'wp-experts'),
    'icon' => 'el-icon-credit-card',
    'fields' => array(
        array(
            'id' => 'footer_layout',
            'title' => esc_html__('Layouts', 'wp-experts'),
            'subtitle' => esc_html__('Select a layout for footer', 'wp-experts'),
            'default' => '5',
            'type' => 'image_select',
            'options' => array(
                '1' => get_template_directory_uri().'/inc/options/images/footer/footer1.jpg',
                '2' => get_template_directory_uri().'/inc/options/images/footer/footer2.jpg',
                '3' => get_template_directory_uri().'/inc/options/images/footer/footer3.jpg',
                '4' => get_template_directory_uri().'/inc/options/images/footer/footer4.jpg',
                '5' => get_template_directory_uri().'/inc/options/images/footer/footer5.jpg',
                '6' => get_template_directory_uri().'/inc/options/images/footer/footer6.jpg',
                '7' => get_template_directory_uri().'/inc/options/images/footer/footer7.jpg',
                '8' => get_template_directory_uri().'/inc/options/images/footer/footer8.jpg',
            )
        ),
        
        array(
            'id'=>'cms-copyright',
            'type' => 'textarea',
            'title' => esc_html__('Copyright', 'wp-experts'), 
            'subtitle' => esc_html__('', 'wp-experts'),
            'desc' => esc_html__('', 'wp-experts'),
            'validate' => 'html_custom',
            'default' => '(c) 2016 - 2017 Exports. With Love by <a href="#">7oroof.com</a>',
            'allowed_html' => array(
                'a' => array(
                    'href' => array(),
                    'title' => array()
                ),
                'br' => array(),
                'em' => array(),
                'strong' => array()
            )
        ),

        array(
            'id'=>'cms-footer-menu',
            'type' => 'textarea',
            'title' => esc_html__('Copyright Menu', 'wp-experts'), 
            'subtitle' => esc_html__('', 'wp-experts'),
            'desc' => esc_html__('', 'wp-experts'),
            'validate' => 'html_custom',
            'default' => ' <a href="#">About</a>
                <a href="#">Blog</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Terms</a>
                <a href="#">Contact</a>',
            'allowed_html' => array(
                'a' => array(
                    'href' => array(),
                    'title' => array()
                ),
                'br' => array(),
                'em' => array(),
                'strong' => array()
            )
        ),

        array(
            'subtitle' => esc_html__('Enable button back to top.', 'wp-experts'),
            'id' => 'footer_botton_back_to_top',
            'type' => 'switch',
            'title' => esc_html__('Back To Top', 'wp-experts'),
            'default' => true,
        ),

        array(
            'title' => __('Call To Action', 'wp-experts'),
            'type'  => 'section',
            'subtitle' => __('Apply footer layout 8.', 'wp-experts'),
            'id' => 'section-start',
            'indent' => true
        ),
        array(
            'subtitle' => esc_html__('', 'wp-experts'),
            'id' => 'f_cta_title',
            'type' => 'text',
            'title' => esc_html__('Title', 'wp-experts'),
        ),
        array(
            'subtitle' => esc_html__('', 'wp-experts'),
            'id' => 'f_cta_subtitle',
            'type' => 'text',
            'title' => esc_html__('Sub Title', 'wp-experts'),
        ),
        array(
            'subtitle' => esc_html__('', 'wp-experts'),
            'id' => 'f_cta_btn_text',
            'type' => 'text',
            'title' => esc_html__('Button Text', 'wp-experts'),
        ),
        array(
            'subtitle' => esc_html__('', 'wp-experts'),
            'id' => 'f_cta_btn_link',
            'type' => 'text',
            'title' => esc_html__('Button Link', 'wp-experts'),
        ),


    )
);

/* Feature */
$this->sections[] = array(
    'title' => esc_html__('Feature', 'wp-experts'),
    'icon' => 'el el-idea-alt ',
    'subsection' => true,
    'fields' => array(
        array(
            'subtitle' => esc_html__('', 'wp-experts'),
            'id' => 'hd_feature_1',
            'type' => 'text',
            'title' => esc_html__('Heading One', 'wp-experts'),
            'default' => 'Call Us Now',
        ),
        array(
            'id'=>'cms-call-us',
            'type' => 'textarea',
            'title' => esc_html__('Column One', 'wp-experts'), 
            'subtitle' => esc_html__('', 'wp-experts'),
            'desc' => esc_html__('', 'wp-experts'),
            'validate' => 'html_custom',
            'default' => 'Office Telephone : 002 01065370701 <br/>Mobile : 002 01065370701',
            'allowed_html' => array(
                'a' => array(
                    'href' => array(),
                    'title' => array()
                ),
                'br' => array(),
                'em' => array(),
                'strong' => array()
            )
        ),
        array(
            'subtitle' => esc_html__('', 'wp-experts'),
            'id' => 'hd_feature_2',
            'type' => 'text',
            'title' => esc_html__('Heading Two', 'wp-experts'),
            'default' => 'Come Visit Us',
        ),
        array(
            'id'=>'cms-come-visit',
            'type' => 'textarea',
            'title' => esc_html__('Column Two', 'wp-experts'), 
            'subtitle' => esc_html__('', 'wp-experts'),
            'desc' => esc_html__('', 'wp-experts'),
            'validate' => 'html_custom',
            'default' => 'Alnahas Building, 2 AlBahr St, Tanta<br/> AlGharbia, Egypt.',
            'allowed_html' => array(
                'a' => array(
                    'href' => array(),
                    'title' => array()
                ),
                'br' => array(),
                'em' => array(),
                'strong' => array()
            )
        ),
        array(
            'subtitle' => esc_html__('', 'wp-experts'),
            'id' => 'hd_feature_3',
            'type' => 'text',
            'title' => esc_html__('Heading Three', 'wp-experts'),
            'default' => 'Send Us A Message',
        ),
        array(
            'id'=>'cms-send-us',
            'type' => 'textarea',
            'title' => esc_html__('Column Three', 'wp-experts'), 
            'subtitle' => esc_html__('', 'wp-experts'),
            'desc' => esc_html__('', 'wp-experts'),
            'validate' => 'html_custom',
            'default' => 'Main Email : 7oroof@7oroof.com<br/> Inquiries : Info@7oroof.com',
            'allowed_html' => array(
                'a' => array(
                    'href' => array(),
                    'title' => array()
                ),
                'br' => array(),
                'em' => array(),
                'strong' => array()
            )
        ),

    )
);


/* Social */
$this->sections[] = array(
    'title' => esc_html__('Social', 'wp-experts'),
    'icon' => 'el el-smiley',
    'subsection' => true,
    'fields' => array(
        array(
            'id'      => 'cms_footer_social',
            'type'    => 'sorter',
            'title'   => 'Social',
            'desc'    => 'Choose which social networks are displayed and edit where they link to.',
            'options' => array(
                'enabled'  => array(
                    'facebook'  => 'Facebook', 
                    'twitter'   => 'Twitter', 
                    'linkedin'  => 'inkedin',
                    'pinterest' => 'Pinterest',
                    'rss'       => 'RSS', 
                ),
                'disabled' => array(
                    'youtube'   => 'Youtube', 
                    'vimeo'     => 'Vimeo', 
                    'tumblr'    => 'Tumblr', 
                    'skype'     => 'Skype', 
                    'google'    => 'Google',
                    'instagram' => 'Instagram',
                    'yelp'      => 'Yelp',
                    'viadeo'      => 'Viadeo'
                )
            ),
        ),

    )
);

/**
 * Styling
 * 
 * css color.
 * @author Fox
 */
$this->sections[] = array(
    'title' => esc_html__('Styling', 'wp-experts'),
    'icon' => 'el-icon-adjust',
    'fields' => array(
        array(
            'subtitle' => esc_html__('Set color primary color.', 'wp-experts'),
            'id' => 'primary_color',
            'type' => 'color',
            'title' => esc_html__('Primary Color', 'wp-experts'),
            'default' => '#1bb580'
        ),
        array(
            'subtitle' => esc_html__('Set color secondary color.', 'wp-experts'),
            'id' => 'secondary_color',
            'type' => 'color',
            'title' => esc_html__('Secondary Color', 'wp-experts'),
            'default' => '#222222'
        ),
        array(
            'subtitle' => esc_html__('Set color for tags <a></a>.', 'wp-experts'),
            'id' => 'link_color',
            'type' => 'color',
            'title' => esc_html__('Link Color', 'wp-experts'),
            'output'  => array('a'),
            'default' => '#222222'
        ),
        array(
            'subtitle' => esc_html__('Set color for tags <a></a>.', 'wp-experts'),
            'id' => 'link_color_hover',
            'type' => 'color',
            'title' => esc_html__('Link Color Hover', 'wp-experts'),
            'output'  => array('a:hover'),
            'default' => '#1bb580'
        )
    )
);

/**
 * Typography
 * 
 * @author Fox
 */
$this->sections[] = array(
    'title' => esc_html__('Typography', 'wp-experts'),
    'icon' => 'el-icon-text-width',
    'subsection' => false,
    'fields' => array(
        array(
            'id' => 'font_body',
            'type' => 'typography',
            'title' => esc_html__('Body Font', 'wp-experts'),
            'google' => true,
            'font-backup' => true,
            'all_styles' => true,
            'output' => array(
                'body'
            ),
            'units' => 'px',
            'default' => array(
                'color' => '#9e9e9e',
                'font-style' => 'normal',
                'font-weight' => '500',
                'font-family' => 'Raleway',
                'google' => true,
                'font-size' => '15px',
                'line-height' => '24px',
                'text-align' => ''
            ),
            'subtitle' => esc_html__('Typography option with each property can be called individually.', 'wp-experts')
        ),
        array(
            'id' => 'font_menu',
            'type' => 'typography',
            'title' => esc_html__('Menu Font', 'wp-experts'),
            'google' => true,
            'font-backup' => true,
            'all_styles' => true,
            'color' => false,
            'font-style' => false,
            'line-height' => false,
            'text-align' => false,
            'output' => array(
                '.main-navigation ul li a'
            ),
            'units' => 'px',
            'default' => array(
                'font-weight' => '700',
                'font-family' => 'Open Sans',
                'google' => true,
                'font-size' => '13px',
            ),
            'subtitle' => esc_html__('Typography option with each property can be called individually.', 'wp-experts')
        ),
        array(
            'id' => 'font_h1',
            'type' => 'typography',
            'title' => esc_html__('H1', 'wp-experts'),
            'google' => true,
            'font-backup' => true,
            'all_styles' => true,
            'output'  => array('h1'),
            'units' => 'px',
            'default' => array(
                'color' => '#2f2f2f',
                'font-style' => 'normal',
                'font-weight' => '700',
                'font-family' => 'Montserrat',
                'google' => true,
                'font-size' => '32px',
                'line-height' => '46px',
                'text-align' => ''
            ),
        ),
        array(
            'id' => 'font_h2',
            'type' => 'typography',
            'title' => esc_html__('H2', 'wp-experts'),
            'google' => true,
            'font-backup' => true,
            'all_styles' => true,
            'output'  => array('h2'),
            'units' => 'px',
            'default' => array(
                'color' => '#2f2f2f',
                'font-style' => 'normal',
                'font-weight' => '700',
                'font-family' => 'Montserrat',
                'google' => true,
                'font-size' => '28px',
                'line-height' => '36px',
                'text-align' => ''
            ),
        ),
        array(
            'id' => 'font_h3',
            'type' => 'typography',
            'title' => esc_html__('H3', 'wp-experts'),
            'google' => true,
            'font-backup' => true,
            'all_styles' => true,
            'output'  => array('h3'),
            'units' => 'px',
            'default' => array(
                'color' => '#2f2f2f',
                'font-style' => 'normal',
                'font-weight' => '700',
                'font-family' => 'Montserrat',
                'google' => true,
                'font-size' => '25px',
                'line-height' => '30px',
                'text-align' => ''
            ),
        ),
        array(
            'id' => 'font_h4',
            'type' => 'typography',
            'title' => esc_html__('H4', 'wp-experts'),
            'google' => true,
            'font-backup' => true,
            'all_styles' => true,
            'output'  => array('h4'),
            'units' => 'px',
            'default' => array(
                'color' => '#2f2f2f',
                'font-style' => 'normal',
                'font-weight' => '700',
                'font-family' => 'Montserrat',
                'google' => true,
                'font-size' => '22px',
                'line-height' => '26px',
                'text-align' => ''
            ),
        ),
        array(
            'id' => 'font_h5',
            'type' => 'typography',
            'title' => esc_html__('H5', 'wp-experts'),
            'google' => true,
            'font-backup' => true,
            'all_styles' => true,
            'output'  => array('h5'),
            'units' => 'px',
            'default' => array(
                'color' => '#2f2f2f',
                'font-style' => 'normal',
                'font-weight' => '700',
                'font-family' => 'Montserrat',
                'google' => true,
                'font-size' => '18px',
                'line-height' => '24px',
                'text-align' => ''
            ),
        ),
        array(
            'id' => 'font_h6',
            'type' => 'typography',
            'title' => esc_html__('H6', 'wp-experts'),
            'google' => true,
            'font-backup' => true,
            'all_styles' => true,
            'output'  => array('h6'),
            'units' => 'px',
            'default' => array(
                'color' => '#2f2f2f',
                'font-style' => 'normal',
                'font-weight' => '700',
                'font-family' => 'Montserrat',
                'google' => true,
                'font-size' => '16px',
                'line-height' => '18px',
                'text-align' => ''
            ),
        )
    )
);

/* Extra Font */
$this->sections[] = array(
    'title' => esc_html__('Extra Fonts', 'wp-experts'),
    'icon' => 'el el-fontsize',
    'subsection' => true,
    'fields' => array(
        array(
            'id' => 'google-font-1',
            'type' => 'typography',
            'title' => esc_html__('Font 1', 'wp-experts'),
            'google' => true,
            'font-backup' => false,
            'font-style' => true,
            'color' => false,
            'text-align'=> false,
            'line-height'=>false,
            'font-size'=> false,
            'subsets'=> false,
            'default' => array(
                'font-weight' => '',
                'font-family' => ''
            )
        ),
        array(
            'id' => 'google-font-selector-1',
            'type' => 'textarea',
            'title' => esc_html__('Selector 1', 'wp-experts'),
            'subtitle' => esc_html__('add html tags ID or class (body,a,.class,#id)', 'wp-experts'),
            'validate' => 'no_html',
            'default' => '',
        ),
        array(
            'id' => 'google-font-2',
            'type' => 'typography',
            'title' => esc_html__('Font 2', 'wp-experts'),
            'google' => true,
            'font-backup' => false,
            'font-style' => false,
            'color' => false,
            'text-align'=> false,
            'line-height'=>false,
            'font-size'=> false,
            'subsets'=> false,
            'default' => array(
                'font-weight' => '',
                'font-family' => ''
            )
        ),
        array(
            'id' => 'google-font-selector-2',
            'type' => 'textarea',
            'title' => esc_html__('Selector 2', 'wp-experts'),
            'subtitle' => esc_html__('add html tags ID or class (body,a,.class,#id)', 'wp-experts'),
            'validate' => 'no_html',
            'default' => '',
        ),
        array(
            'id' => 'google-font-3',
            'type' => 'typography',
            'title' => esc_html__('Font 3', 'wp-experts'),
            'google' => true,
            'font-backup' => false,
            'font-style' => false,
            'color' => false,
            'text-align'=> false,
            'line-height'=>false,
            'font-size'=> false,
            'subsets'=> false,
            'default' => array(
                'font-weight' => '',
                'font-family' => ''
            )
        ),
        array(
            'id' => 'google-font-selector-3',
            'type' => 'textarea',
            'title' => esc_html__('Selector 3', 'wp-experts'),
            'subtitle' => esc_html__('add html tags ID or class (body,a,.class,#id)', 'wp-experts'),
            'validate' => 'no_html',
            'default' => '',
        ),
        array(
            'id' => 'google-font-4',
            'type' => 'typography',
            'title' => esc_html__('Font 4', 'wp-experts'),
            'google' => true,
            'font-backup' => false,
            'font-style' => false,
            'color' => false,
            'text-align'=> false,
            'line-height'=>false,
            'font-size'=> false,
            'subsets'=> false,
            'default' => array(
                'font-weight' => '',
                'font-family' => ''
            )
        ),
        array(
            'id' => 'google-font-selector-4',
            'type' => 'textarea',
            'title' => esc_html__('Selector 4', 'wp-experts'),
            'subtitle' => esc_html__('add html tags ID or class (body,a,.class,#id)', 'wp-experts'),
            'validate' => 'no_html',
            'default' => '',
        ),
    )
);

/**
 * Blog Option
 *
 * css color.
 * 
 * @author CMS
 */
$this->sections[] = array(
    'title' => esc_html__('Blog', 'wp-experts'),
    'icon' => 'el el-blogger',
    'fields' => array(
        array(
            'id' => 'blog_sidebar',
            'type' => 'switch',
            'title' => esc_html__('Show Sidebar Blog', 'wp-experts'),
            'subtitle' => esc_html__('Show / Hide sidebar on page template - blog.', 'wp-experts'),
            'default' => true
        ),
        array(
            'id'       => 'blog_sidebar_position',
            'type'     => 'select',
            'title'    => esc_html__('Blog Category - Sidebar Position', 'wp-experts'), 
            'subtitle' => esc_html__('', 'wp-experts'),
            'desc'     => esc_html__('', 'wp-experts'),
            'options'  => array(
                'sidebar-right' => 'Sidebar Right',
                'sidebar-left' => 'Sidebar Left',
            ),
            'default'  => 'sidebar-right',
            'required' => array(
                0 => 'blog_sidebar',
                1 => '=',
                2 => 1
            )
        ),
        array(
            'id' => 'post_full_width',
            'type' => 'switch',
            'title' => esc_html__('Post Full Width', 'wp-experts'),
            'subtitle' => esc_html__('Show single post full width no sidebar.', 'wp-experts'),
            'default' => false
        ),
        array(
            'id' => 'post_sidebar_left',
            'type' => 'switch',
            'title' => esc_html__('Enable Post Sidebar Left', 'wp-experts'),
            'subtitle' => esc_html__('Default post blog sidebar Right.', 'wp-experts'),
            'default' => false
        ),
        array(
            'id'       => 'social_share',
            'type'     => 'button_set',
            'title'    => esc_html__('Social Share', 'wp-experts'),
            'subtitle' => esc_html__('', 'wp-experts'),
            'options' => array(
                'show' => 'Show',
                'hide' => 'Hide',
             ), 
            'default' => 'show'
        ),
        array(
            'id'       => 'about_author',
            'type'     => 'button_set',
            'title'    => esc_html__('About Author', 'wp-experts'),
            'subtitle' => esc_html__('', 'wp-experts'),
            'options' => array(
                'show' => 'Show',
                'hide' => 'Hide',
             ), 
            'default' => 'hide'
        ),
    )
);

/* Author Font */
$this->sections[] = array(
    'title' => esc_html__('Author Social', 'wp-experts'),
    'icon' => 'el el-group',
    'subsection' => true,
    'fields' => array(
        array(
            'id'      => 'cms_author_social',
            'type'    => 'sorter',
            'title'   => 'Social',
            'desc'    => 'Choose which social networks are displayed and edit where they link to.',
            'options' => array(
                'enabled'  => array(
                    'facebook'  => 'Facebook', 
                    'twitter'   => 'Twitter', 
                    'linkedin'  => 'inkedin',
                    'rss'       => 'RSS', 
                ),
                'disabled' => array(
                    'youtube'   => 'Youtube', 
                    'vimeo'     => 'Vimeo', 
                    'tumblr'    => 'Tumblr', 
                    'skype'     => 'Skype', 
                    'google'    => 'Google',
                    'pinterest' => 'Pinterest',
                    'instagram' => 'Instagram',
                    'yelp'      => 'Yelp',
                    'viadeo'      => 'Viadeo'
                )
            ),
        ),
    )
);


/**
 * Services Option
 *
 * css color.
 * 
 * @author CMS
 */
$this->sections[] = array(
    'title' => esc_html__('Services', 'wp-experts'),
    'icon' => 'el el-group',
    'fields' => array(
        array(
            'id'       => 'service_layout',
            'type'     => 'select',
            'title'    => esc_html__('Single Service Layout', 'wp-experts'), 
            'subtitle' => esc_html__('', 'wp-experts'),
            'desc'     => esc_html__('', 'wp-experts'),
            'options'  => array(
                'layout1' => 'Layout 1',
                'layout2' => 'Layout 2',
                'layout3' => 'Layout 3',
            ),
            'default'  => 'layout1',
        ),
    )
);
/* Page Title - Single Service */
$this->sections[] = array(
    'title' => esc_html__('Page Title', 'wp-experts'),
    'icon' => 'el el-map-marker',
    'subsection' => true,
    'fields' => array(
        array(
            'title' => esc_html__('Select Background Image', 'wp-experts'),
            'subtitle' => esc_html__('Select an image file for background page title - apply services single', 'wp-experts'),
            'id' => 'bg_image_page_title_services',
            'type' => 'media',
            'url' => true,
            'default' => array(
                'url'=>get_template_directory_uri().'/assets/images/bg-page-title_services.jpg'
            )
        ),
    )
);


/**
 * Shop Option
 *
 * css color.
 * 
 * @author CMS
 */
$this->sections[] = array(
    'title' => esc_html__('Shop', 'wp-experts'),
    'icon' => 'el el-shopping-cart',
    'fields' => array(
        array(
            'subtitle' => 'Shop Category Layout',
            'id' => 'shop_layout',
            'type' => 'image_select',
            'default' => 'right-sidebar',
            'options' => array(
                'full-width' => get_template_directory_uri().'/assets/images/1col.png',
                'right-sidebar' => get_template_directory_uri().'/assets/images/2cr.png',
                'left-sidebar' => get_template_directory_uri().'/assets/images/2cl.png'
            ),
            'title' => 'Shop Category Layout',
        ),
        array(
            'title' => esc_html__('Products displayed per page', 'wp-experts'),
            'id' => 'product_per_page',
            'type' => 'slider',
            'subtitle' => esc_html__('Number product to show', 'wp-experts'),
            'default' => 6,
            'min'  => 6,
            'step' => 1,
            'max' => 50,
        ),
    )
);
/* Page Title - Shop Post */
$this->sections[] = array(
    'title' => esc_html__('Page Title', 'wp-experts'),
    'icon' => 'el el-map-marker',
    'subsection' => true,
    'fields' => array(
        array(
            'title' => esc_html__('Select Background Image', 'wp-experts'),
            'subtitle' => esc_html__('Select an image file for background page title - apply product single', 'wp-experts'),
            'id' => 'bg_image_page_title_product',
            'type' => 'media',
            'url' => true,
            'default' => array(
                'url'=>get_template_directory_uri().'/assets/images/bg-page-title_product.jpg'
            )
        ),
    )
);

/**
 * Page Option
 *
 * css color.
 * 
 * @author CMS
 */
$this->sections[] = array(
    'title' => esc_html__('Page', 'wp-experts'),
    'icon' => 'el-icon-edit',
    'fields' => array(
        array(
            'id' => 'page_comment',
            'type' => 'switch',
            'title' => esc_html__('Show Comment', 'wp-experts'),
            'subtitle' => esc_html__('Show / Hide comment on page.', 'wp-experts'),
            'default' => true
        ),
        array(
            'id' => 'show_call_to_action',
            'type' => 'switch',
            'title' => esc_html__('Show Comment', 'wp-experts'),
            'subtitle' => esc_html__('Show / Hide comment on page.', 'wp-experts'),
            'default' => true
        )
    )
);

/* 404 Page */
$this->sections[] = array(
    'title' => esc_html__('404', 'wp-experts'),
    'icon' => 'el el-flag-alt',
    'subsection' => true,
    'fields' => array(
        array(
            'id'=>'cms-404-notification',
            'type' => 'textarea',
            'title' => esc_html__('Notification', 'wp-experts'), 
            'subtitle' => esc_html__('', 'wp-experts'),
            'desc' => esc_html__('', 'wp-experts'),
            'validate' => 'html_custom',
            'default' => 'With any financial product that you buy, it is important that you know you are getting the best advice from a reputable company as often you will have to provide sensitive information online or over the internet.',
            'allowed_html' => array(
                'a' => array(
                    'href' => array(),
                    'title' => array()
                ),
                'br' => array(),
                'em' => array(),
                'strong' => array()
            )
        ),
        array(
            'title' => esc_html__('Select Background Image Page Title', 'wp-experts'),
            'subtitle' => esc_html__('Select an image file for background page title - apply 404 page', 'wp-experts'),
            'id' => 'bg_image_page_title_404',
            'type' => 'media',
            'url' => true,
            'default' => array(
                'url'=>get_template_directory_uri().'/assets/images/bg-page-title.jpg'
            )
        ),
    )
);
/* Social Media */
$this->sections[] = array(
    'title' => esc_html__('Social Media', 'wp-experts'),
    'icon' => 'el el-twitter',
    'subsection' => false,
    'fields' => array(
        array(
            'subtitle' => esc_html__('', 'wp-experts'),
            'id' => 'social_facebook_url',
            'type' => 'text',
            'title' => esc_html__('Facebook URL', 'wp-experts'),
            'default' => '',
        ),
        array(
            'subtitle' => esc_html__('', 'wp-experts'),
            'id' => 'social_twitter_url',
            'type' => 'text',
            'title' => esc_html__('Twitter URL', 'wp-experts'),
            'default' => '',
        ),
        array(
            'subtitle' => esc_html__('', 'wp-experts'),
            'id' => 'social_inkedin_url',
            'type' => 'text',
            'title' => esc_html__('Inkedin URL', 'wp-experts'),
            'default' => '',
        ),
        array(
            'subtitle' => esc_html__('', 'wp-experts'),
            'id' => 'social_rss_url',
            'type' => 'text',
            'title' => esc_html__('Rss URL', 'wp-experts'),
            'default' => '',
        ),
        array(
            'subtitle' => esc_html__('', 'wp-experts'),
            'id' => 'social_instagram_url',
            'type' => 'text',
            'title' => esc_html__('Instagram URL', 'wp-experts'),
            'default' => '',
        ),
        array(
            'subtitle' => esc_html__('', 'wp-experts'),
            'id' => 'social_google_url',
            'type' => 'text',
            'title' => esc_html__('Google URL', 'wp-experts'),
            'default' => '',
        ),
        array(
            'subtitle' => esc_html__('', 'wp-experts'),
            'id' => 'social_skype_url',
            'type' => 'text',
            'title' => esc_html__('Skype URL', 'wp-experts'),
            'default' => '',
        ),
        array(
            'subtitle' => esc_html__('', 'wp-experts'),
            'id' => 'social_pinterest_url',
            'type' => 'text',
            'title' => esc_html__('Pinterest URL', 'wp-experts'),
            'default' => '',
        ),
        array(
            'subtitle' => esc_html__('', 'wp-experts'),
            'id' => 'social_vimeo_url',
            'type' => 'text',
            'title' => esc_html__('Vimeo URL', 'wp-experts'),
            'default' => '',
        ),
        array(
            'subtitle' => esc_html__('', 'wp-experts'),
            'id' => 'social_youtube_url',
            'type' => 'text',
            'title' => esc_html__('Youtube URL', 'wp-experts'),
            'default' => '',
        ),
        array(
            'subtitle' => esc_html__('', 'wp-experts'),
            'id' => 'social_yelp_url',
            'type' => 'text',
            'title' => esc_html__('Yelp URL', 'wp-experts'),
            'default' => '',
        ),
        array(
            'subtitle' => esc_html__('', 'wp-experts'),
            'id' => 'social_tumblr_url',
            'type' => 'text',
            'title' => esc_html__('Tumblr URL', 'wp-experts'),
            'default' => '',
        ),

        array(
            'subtitle' => esc_html__('', 'wp-experts'),
            'id' => 'social_viadeo_url',
            'type' => 'text',
            'title' => esc_html__('Viadeo URL', 'wp-experts'),
            'default' => '',
        ),

    )
);

/**
 * Services Option
 *
 * css color.
 * 
 * @author CMS
 */
$this->sections[] = array(
    'title' => esc_html__('Call To Action', 'wp-experts'),
    'icon' => 'el el-hand-right',
    'fields' => array(
        array(
            'id' => 'show_cta_service_post',
            'type' => 'switch',
            'title' => esc_html__('Show Call To Action', 'wp-experts'),
            'subtitle' => esc_html__('', 'wp-experts'),
            'default' => false,
            'description' => 'Apply single ( Service, Team, Case )',
        ),
        array(
            'subtitle' => esc_html__('', 'wp-experts'),
            'id' => 'cta_title',
            'type' => 'text',
            'title' => esc_html__('Title', 'wp-experts'),
            'default' => 'Worried about debt?',
            'required' => array(
                0 => 'show_cta_service_post',
                1 => '=',
                2 => 1
            )
        ),
        array(
            'subtitle' => esc_html__('', 'wp-experts'),
            'id' => 'cta_desc',
            'type' => 'text',
            'title' => esc_html__('Description', 'wp-experts'),
            'default' => 'Find out where to get free help now!',
            'required' => array(
                0 => 'show_cta_service_post',
                1 => '=',
                2 => 1
            )
        ),
        array(
            'subtitle' => esc_html__('', 'wp-experts'),
            'id' => 'cta_text_button',
            'type' => 'text',
            'title' => esc_html__('Text Button', 'wp-experts'),
            'default' => 'Get Started',
            'required' => array(
                0 => 'show_cta_service_post',
                1 => '=',
                2 => 1
            )
        ),
        array(
            'subtitle' => esc_html__('', 'wp-experts'),
            'id' => 'cta_link_button',
            'type' => 'text',
            'title' => esc_html__('Link Button', 'wp-experts'),
            'default' => '#',
            'required' => array(
                0 => 'show_cta_service_post',
                1 => '=',
                2 => 1
            )
        ),
    )
);
/**
 * Custom CSS
 * 
 * extra css for customer.
 * @author Fox
 */
$this->sections[] = array(
    'title' => esc_html__('Custom CSS', 'wp-experts'),
    'icon' => 'el-icon-bulb',
    'fields' => array(
        array(
            'id' => 'custom_css',
            'type' => 'ace_editor',
            'title' => esc_html__('CSS Code', 'wp-experts'),
            'subtitle' => esc_html__('create your css code here.', 'wp-experts'),
            'mode' => 'css',
            'theme' => 'monokai',
        )
    )
);

/**
 * Optimal Core
 * 
 * Optimal options for theme. optimal speed
 * @author Fox
 */
$this->sections[] = array(
    'title' => esc_html__('Optimal Core', 'wp-experts'),
    'icon' => 'el-icon-idea',
    'fields' => array(
        array(
            'subtitle' => esc_html__('no minimize , generate css over time...', 'wp-experts'),
            'id' => 'dev_mode',
            'type' => 'switch',
            'title' => esc_html__('Dev Mode (not recommended)', 'wp-experts'),
            'default' => false
        )
    )
);