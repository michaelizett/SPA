<?php
/**
 * Meta options
 * 
 * @author Fox
 * @since 1.0.0
 */
class CMSMetaOptions
{
    public function __construct()
    {
        add_action('add_meta_boxes', array($this, 'add_meta_boxes'));
        add_action('admin_enqueue_scripts', array($this, 'admin_script_loader'));
    }
    /* add script */
    function admin_script_loader()
    {
        global $pagenow;
        if (is_admin() && ($pagenow == 'post-new.php' || $pagenow == 'post.php')) {
            wp_enqueue_style('metabox', get_template_directory_uri() . '/inc/options/css/metabox.css');
            
            wp_enqueue_script('easytabs', get_template_directory_uri() . '/inc/options/js/jquery.easytabs.min.js');
            wp_enqueue_script('metabox', get_template_directory_uri() . '/inc/options/js/metabox.js');
        }
    }
    /* add meta boxs */
    public function add_meta_boxes()
    {
        $this->add_meta_box('template_page_options', esc_html__('Setting', 'wp-experts'), 'page');
        $this->add_meta_box('post_options', esc_html__('Post Setting', 'wp-experts'), 'post'); 
        $this->add_meta_box('teams_option', esc_html__('Teams Option', 'wp-experts'), 'teams', 'side','high');
        $this->add_meta_box('teams_page_title', esc_html__('Teams Option', 'wp-experts'), 'teams');
        $this->add_meta_box('case_page_title', esc_html__('Case Option', 'wp-experts'), 'case');
        $this->add_meta_box('social_teams_option', esc_html__('Social Option', 'wp-experts'), 'teams', 'side','high');
        $this->add_meta_box('services_option', esc_html__('Services Option', 'wp-experts'), 'services', 'side','high');
        $this->add_meta_box('services_page_title', esc_html__('Services Option', 'wp-experts'), 'services');
        $this->add_meta_box('testimonial_option', esc_html__('Testimonials Options', 'wp-experts'), 'testimonials', 'side','high');
        $this->add_meta_box('careers_option', esc_html__('Careers Options', 'wp-experts'), 'careers', 'side','high');
        $this->add_meta_box('client_options', esc_html__('Client Option', 'wp-experts'), 'client'); 
        $this->add_meta_box('pricing_options', esc_html__('Pricing Option', 'wp-experts'), 'pricing'); 
        $this->add_meta_box('portfolio_options', esc_html__('Portfolio Option', 'wp-experts'), 'portfolio'); 
        $this->add_meta_box('portfolio_services_overview', esc_html__('Portfolio Overview', 'wp-experts'), 'portfolio'); 
        $this->add_meta_box('portfolio_wishes', esc_html__('Costumers Wishes', 'wp-experts'), 'portfolio'); 
        $this->add_meta_box('portfolio_management', esc_html__('Portfolio Management', 'wp-experts'), 'portfolio');
        $this->add_meta_box('portfolio_goals', esc_html__('Portfolio Goals', 'wp-experts'), 'portfolio');
        $this->add_meta_box('portfolio_gallery', esc_html__('Portfolio Gallery', 'wp-experts'), 'portfolio');
        $this->add_meta_box('cms_demos', esc_html__('Demo Url', 'wp-experts'), 'demos'); 
        $this->add_meta_box('overview_option', esc_html__('Overview Option', 'wp-experts'), 'overview', 'side','high'); 

    }
    
    public function add_meta_box($id, $label, $post_type, $context = 'advanced', $priority = 'default')
    {
        add_meta_box('_cms_' . $id, $label, array($this, $id), $post_type, $context, $priority);
    }

    /* --------------------- POST ---------------------- */
    function post_options(){
        ?>
        <div class="post-full">
            <?php
                cms_options(array(
                    'id' => 'post_icon',
                    'label' => esc_html__('Class Icon','wp-experts'),
                    'type' => 'text',
                    'placeholder' => 'Ex: fa fa-home'
                ));
                cms_options(array(
                    'id' => 'post_full_width',
                    'label' => esc_html__('Post Full Width','wp-experts'),
                    'type' => 'switch',
                    'options' => array('on'=>'1','off'=>'0'),
                ));
                cms_options(array(
                    'id' => 'post_sidebar_left',
                    'label' => esc_html__('Enable Post Sidebar Left','wp-experts'),
                    'type' => 'switch',
                    'options' => array('on'=>'1','off'=>'0'),
                ));
            ?>
        </div>
        <?php
    }
    /* --------------------- Gallery ---------------------- */
    function gallery_options(){
        ?>
        <div class="post-full">
            <?php
                cms_options(array(
                    'id' => 'single_gallery_details',
                    'label' => esc_html__('Item Details','wp-experts'),
                    'type' => 'textarea',
                ));
            ?>
        </div>
        <?php
    }
    /* --------------------- Testimonial ---------------------- */
    function testimonial_option(){
        ?>
        <div class="cms-testimonial">
            <?php
                cms_options(array(
                    'id' => 'testimonial_position',
                    'label' => esc_html__('Testimonial Postion','wp-experts'),
                    'type' => 'text',
                ));
            ?>
        </div>
        <?php
    }
    /* --------------------- Client ---------------------- */
    function client_options(){
        ?>
        <div class="clients">
            <?php
                cms_options(array(
                    'id' => 'client_url',
                    'label' => esc_html__('URL','wp-experts'),
                    'type' => 'text',
                ));
                cms_options(array(
                    'id' => 'client_work',
                    'label' => esc_html__('Field Work','wp-experts'),
                    'type' => 'text',
                ));
            ?>
        </div>
        <?php
    }
    /* --------------------- Pricing ---------------------- */
    function pricing_options(){
        ?>
        <div class="pricing">
            <?php
                cms_options(array(
                    'id' => 'pricing_subtitle',
                    'label' => esc_html__('Subtitle','wp-experts'),
                    'type' => 'text',
                    'placeholder' => ''
                ));
                cms_options(array(
                    'id' => 'pricing_currency',
                    'label' => esc_html__('Currency Unit','wp-experts'),
                    'type' => 'text',
                    'placeholder' => '$'
                ));
                cms_options(array(
                    'id' => 'pricing_price',
                    'label' => esc_html__('Price','wp-experts'),
                    'type' => 'text',
                    'placeholder' => '100'
                ));
                cms_options(array(
                    'id' => 'pricing_time',
                    'label' => esc_html__('Time','wp-experts'),
                    'type' => 'text',
                    'placeholder' => 'month'
                ));
                cms_options(array(
                    'id' => 'pricing_btn_text',
                    'label' => esc_html__('Button Text','wp-experts'),
                    'type' => 'text',
                    'placeholder' => 'Order This Plan'
                ));
                cms_options(array(
                    'id' => 'pricing_btn_link',
                    'label' => esc_html__('Button Url','wp-experts'),
                    'type' => 'text',
                    'placeholder' => '#'
                ));
                cms_options(array(
                    'id' => 'pricing_icon',
                    'label' => esc_html__('Icon','wp-experts'),
                    'type' => 'text',
                    'placeholder' => 'fa fa-home',
                    'desc' => 'Please enter class font icon: Awesome, Ionicon, Linearicons, Stroke-Gap-Icons..'
                ));
                cms_options(array(
                    'id' => 'bg_pricing_header',
                    'label' => esc_html__('Background Pricing Header','wp-experts'),
                    'type' => 'image',
                    'default' => ''
                ));
            ?>
        </div>
        <?php
    }
    /* --------------------- PAGE ---------------------- */
    function template_page_options() {
        ?>
	    <div class="tab-container clearfix">
	        <ul class='etabs clearfix'>
               <li class="tab"><a href="#tabs-header"><?php esc_html_e('Header', 'wp-experts'); ?></a></li>
               <li class="tab"><a href="#tabs-page-title"><?php esc_html_e('Page Title', 'wp-experts'); ?></a></li>
               <li class="tab"><a href="#tabs-body"><?php esc_html_e('Body', 'wp-experts'); ?></a></li>
               <li class="tab"><a href="#tabs-sidebar"><?php esc_html_e('Sidebar', 'wp-experts'); ?></a></li>
	           <li class="tab"><a href="#tabs-footer"><?php esc_html_e('Footer', 'wp-experts'); ?></a></li>
               <li class="tab"><a href="#tabs-one-page"><?php esc_html_e('One Page', 'wp-experts'); ?></a></li>
               <li class="tab"><a href="#tabs-blog"><?php esc_html_e('Blog', 'wp-experts'); ?></a></li>
	           
	        </ul>
	        <div class='panel-container'>
                <div id="tabs-header">
                    <?php
                        /* Header. */
                        cms_options(array(
                            'id' => 'header',
                            'label' => esc_html__('Custom Header','wp-experts'),
                            'type' => 'switch',
                            'options' => array('on'=>'1','off'=>''),
                            'follow' => array('1'=>array('#page_header_enable'))
                        ));
                    ?>  
                    <div id="page_header_enable">
                        <?php
                            global $wp_experts_base;
                            cms_options(array(
                                'id' => 'header_layout',
                                'label' => esc_html__('Layout','wp-experts'),
                                'type' => 'imegesselect',
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
                                    '16' => get_template_directory_uri().'/inc/options/images/header/header16.jpg',
                                    '17' => get_template_directory_uri().'/inc/options/images/header/header17.jpg',
                                    '18' => get_template_directory_uri().'/inc/options/images/header/header18.jpg',
                                    '19' => get_template_directory_uri().'/inc/options/images/header/header19.jpg',
                                    '20' => get_template_directory_uri().'/inc/options/images/header/header20.jpg',
                                    '21' => get_template_directory_uri().'/inc/options/images/header/header21.jpg',
                                    '22' => get_template_directory_uri().'/inc/options/images/header/header22.jpg',
                                )
                            ));
                            cms_options(array(
                                'id' => 'get_revslide',
                                'label' => esc_html__('Revolution','wp-experts'),
                                'type' => 'select',
                                'options' => $wp_experts_base->wp_experts_build_shortcode_rev_slider(),
                                'desc' => 'Apply header layout 16.',
                            ));
                            cms_options(array(
                                'id' => 'custom_logo',
                                'label' => esc_html__('Custom Logo','wp-experts'),
                                'type' => 'switch',
                                'options' => array('on'=>'1','off'=>''),
                                'follow' => array('1'=>array('#custom_logo_page'))
                            ));
                            ?>
                            <div id="custom_logo_page">
                                <?php
                                    cms_options(array(
                                        'id' => 'header_logo_page',
                                        'label' => esc_html__('Logo','wp-experts'),
                                        'type' => 'image',
                                        'default' => ''
                                    ));
                                    cms_options(array(
                                        'id' => 'header_logo_page_sticky',
                                        'label' => esc_html__('Logo Sticky','wp-experts'),
                                        'type' => 'image',
                                        'default' => ''
                                    ));
                                ?>
                            </div>
                            <?php 
                            $menus = array();
                            $menus[''] = 'Default';
                            $obj_menus = wp_get_nav_menus();
                            foreach ($obj_menus as $obj_menu){
                                $menus[$obj_menu->term_id] = $obj_menu->name;
                            }
                            $navs = get_registered_nav_menus();
                            foreach ($navs as $key => $mav){
                                cms_options(array(
                                'id' => $key,
                                'label' => $mav,
                                'type' => 'select',
                                'options' => $menus
                                ));
                            }
                        ?>
                    </div>
                </div>
                <div id="tabs-page-title">
                <?php
                /* page title. */
                cms_options(array(
                    'id' => 'page_title',
                    'label' => esc_html__('Custom Page Title','wp-experts'),
                    'type' => 'switch',
                    'options' => array('on'=>'1','off'=>''),
                    'follow' => array('1'=>array('#page_title_enable'))
                ));
                ?>  <div id="page_title_enable"><?php
                    cms_options(array(
                        'id' => 'page_title_text',
                        'label' => esc_html__('Title','wp-experts'),
                        'type' => 'text',
                    ));
                    cms_options(array(
                        'id' => 'page_title_sub',
                        'label' => esc_html__('Sub Title','wp-experts'),
                        'type' => 'text',
                    ));
                    cms_options(array(
                        'id' => 'page_title_padding',
                        'label' => esc_html__('Page Title Padding','wp-experts'),
                        'type' => 'text',
                    ));
                    cms_options(array(
                        'id' => 'page_title_margin',
                        'label' => esc_html__('Page Title Margin','wp-experts'),
                        'type' => 'text',
                    ));
                    cms_options(array(
                        'id' => 'page_title_type',
                        'label' => esc_html__('Layout','wp-experts'),
                        'type' => 'imegesselect',
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
                    ));
                    cms_options(array(
                        'id' => 'bg_image_page_title',
                        'label' => esc_html__('Select Background Image','wp-experts'),
                        'type' => 'image',
                        'default' => ''
                    ));
                    cms_options(array(
                        'id' => 'page_title_overlay_color',
                        'label' => esc_html__('Overlay Primary Color','wp-experts'),
                        'type' => 'switch',
                        'options' => array('on'=>'1','off'=>''),
                    ));
                    ?>
                    </div>
                </div>
                <div id="tabs-body">
                    <?php
                        cms_options(array(
                            'id' => 'body_custom_class',
                            'label' => esc_html__('Custom Body Class','wp-experts'),
                            'type' => 'text',
                        ));
                        cms_options(array(
                            'id' => 'bg_color_body',
                            'label' => __('Background Color','wp-experts'),
                            'type' => 'color',
                            'default' => '',
                            'desc' => '',
                        ));
                        cms_options(array(
                            'id' => 'page_body_border',
                            'label' => esc_html__('Body Border','wp-experts'),
                            'type' => 'switch',
                            'options' => array('on'=>'1','off'=>''),
                            'follow' => array('1'=>array('#page_body_border'))
                        ));
                        ?>  
                        <div id="page_body_border">
                            <?php
                                cms_options(array(
                                    'id' => 'page_body_border_width',
                                    'label' => esc_html__('Body Body Width','wp-experts'),
                                    'type' => 'text', 
                                    'desc' => 'Enter: ..px',
                                ));
                                cms_options(array(
                                    'id' => 'page_body_border_color',
                                    'label' => __('Body Border Color','wp-experts'),
                                    'type' => 'color',
                                    'default' => '',
                                ));
                            ?>
                        </div>
                        <?php
                        cms_options(array(
                            'id' => 'page_body_layout',
                            'label' => esc_html__('Boxed Layout','wp-experts'),
                            'type' => 'switch',
                            'options' => array('on'=>'1','off'=>''),
                            'follow' => array('1'=>array('#page_body_layout'))
                        ));
                        ?>  
                        <div id="page_body_layout">
                            <?php
                                cms_options(array(
                                    'id' => 'page_body_background',
                                    'label' => esc_html__('Select Body Background Image','wp-experts'),
                                    'type' => 'image',
                                    'default' => ''
                                ));
                                cms_options(array(
                                    'id' => 'page_body_background_repeat',
                                    'label' => __('Background Repeat','wp-experts'),
                                    'type' => 'select',
                                    'options' => array(
                                        'no-repeat' => 'No Repeat',
                                        'repeat' => 'Repeat All',
                                        'repeat-x' => 'Repeat X',
                                        'repeat-y' => 'Repeat Y',
                                    )
                                ));
                                cms_options(array(
                                    'id' => 'page_body_background_size',
                                    'label' => __('Background Size','wp-experts'),
                                    'type' => 'select',
                                    'options' => array(
                                        'inherit' => 'Inherit',
                                        'cover' => 'Cover',
                                    )
                                ));
                                cms_options(array(
                                    'id' => 'page_body_background_attachment',
                                    'label' => __('Background Attachment','wp-experts'),
                                    'type' => 'select',
                                    'options' => array(
                                        'inherit' => 'Inherit',
                                        'fixed' => 'Fixed',
                                        'scroll' => 'Scroll',
                                    )
                                ));
                            ?>
                        </div>
                </div>
                <div id="tabs-sidebar">
                    <?php
                        cms_options(array(
                            'id' => 'show_sidebar',
                            'label' => esc_html__('Show Sidebar','wp-experts'),
                            'type' => 'switch',
                            'options' => array('on'=>'1','off'=>''),
                            'follow' => array('1'=>array('#show_sidebar_page_left'))
                        )); 
                    ?>
                        <div id="show_sidebar_page_left">
                            <?php
                                cms_options(array(
                                    'id' => 'show_sidebar_page_left',
                                    'label' => esc_html__('Show Sidebar Left - Default Sidebar Right','wp-experts'),
                                    'type' => 'switch',
                                    'options' => array('on'=>'1','off'=>''),
                                ));
                            ?>  
                        </div>
                </div>
                <div id="tabs-footer">
                    <?php
                        /* Footer. */
                        cms_options(array(
                            'id' => 'footer',
                            'label' => esc_html__('Custom Footer','wp-experts'),
                            'type' => 'switch',
                            'options' => array('on'=>'1','off'=>''),
                            'follow' => array('1'=>array('#page_footer_enable'))
                        ));
                    ?>  
                    <div id="page_footer_enable">
                        <?php
                            cms_options(array(
                                'id' => 'footer_layout',
                                'label' => esc_html__('Layout','wp-experts'),
                                'type' => 'imegesselect',
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
                            ));
                        ?>
                    </div>
                </div>
                <div id="tabs-one-page">
                    <?php
                    cms_options(array(
                        'id' => 'one_page',
                        'label' => esc_html__('Enable','wp-experts'),
                        'type' => 'switch',
                        'options' => array('on'=>'1','off'=>''),
                        'follow' => array('1'=>array('#one-page-enable'))
                    ));
                    ?>
                    <div id="one-page-enable">
                        <?php
                        cms_options(array(
                            'id' => 'one_page_speed',
                            'label' => esc_html__('Speed','wp-experts'),
                            'type' => 'text',
                            'placeholder' => '1000'
                        ));
                        cms_options(array(
                            'id' => 'one_page_easing',
                            'label' => esc_html__('Easing','wp-experts'),
                            'type' => 'select',
                            'options' => array(
                                '' => '',
                                'def' => 'def',
                                'easeInQuad' => 'easeInQuad',
                                'easeOutQuad' => 'easeOutQuad',
                                'easeInOutQuad' => 'easeInOutQuad',
                                'easeInCubic' => 'easeInCubic',
                                'easeOutCubic' => 'easeOutCubic',
                                'easeInOutCubic' => 'easeInOutCubic',
                                'easeInQuart' => 'easeInQuart',
                                'easeOutQuart' => 'easeOutQuart',
                                'easeInOutQuart' => 'easeInOutQuart',
                                'easeInQuint' => 'easeInQuint',
                                'easeOutQuint' => 'easeOutQuint',
                                'easeInOutQuint' => 'easeInOutQuint',
                                'easeInSine' => 'easeInSine',
                                'easeOutQuad' => 'easeOutQuad',
                                'easeOutSine' => 'easeOutSine',
                                'easeInOutSine' => 'easeInOutSine',
                                'easeInExpo' => 'easeInExpo',
                                'easeOutExpo' => 'easeOutExpo',
                                'easeInOutExpo' => 'easeInOutExpo',
                                'easeInCirc' => 'easeInCirc',
                                'easeOutCirc' => 'easeOutCirc',
                                'easeInOutCirc' => 'easeInOutCirc',
                                'easeInElastic' => 'easeInElastic',
                                'easeOutElastic' => 'easeOutElastic',
                                'easeInOutElastic' => 'easeInOutElastic',
                                'easeInBack' => 'easeInBack',
                                'easeOutBack' => 'easeOutBack',
                                'easeInOutBack' => 'easeInOutBack',
                                'easeInBounce' => 'easeInBounce',
                                'easeOutBounce' => 'easeOutBounce',
                                'easeInOutBounce' => 'easeInOutBounce'
                            )
                        ));
                        ?>
                    </div>
                </div>
                <div id="tabs-blog">
                    <?php
                        cms_options(array(
                            'id' => 'blog_sidebar',
                            'label' => esc_html__('Show Sidebar Blog','wp-experts'),
                            'type' => 'switch',
                            'options' => array('on'=>'1','off'=>''),
                            'follow' => array('1'=>array('#blog-sidebar-position'))
                        ));
                    ?>
                    <div id="blog-sidebar-position">
                        <?php
                            cms_options(array(
                                'id' => 'blog_sidebar_position',
                                'label' => esc_html__('Sidebar Position','wp-experts'),
                                'type' => 'select',
                                'options' => array(
                                    'sidebar-right' => 'Sidebar Right',
                                    'sidebar-left' => 'Sidebar Left',
                                )
                            ));
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
    /* --------------------- Teams Option ---------------------- */
    function teams_option(){
        ?>
        <div class="team-option">
            <?php
                cms_options(array(
                    'id' => 'team_position',
                    'label' => esc_html__('Position','wp-experts'),
                    'type' => 'text',
                    'placeholder' => 'CEO & Manager'
                ));
            ?>
        </div>
        <?php
    }
    
    /* --------------------- Teams Social ---------------------- */
    function social_teams_option(){
        ?>
        <div class="team-social">
            <?php
                cms_options(array(
                    'id' => 'icon1',
                    'label' => esc_html__('Icon 1','wp-experts'),
                    'type' => 'text',
                    'placeholder' => 'ex: fa fa-facebook',
                    'desc' => 'Please enter class font icon: Awesome, Ionicon, Linearicons, Stroke-Gap-Icons..'
                ));
                cms_options(array(
                    'id' => 'link1',
                    'label' => esc_html__('Link 1','wp-experts'),
                    'type' => 'text',
                ));
                cms_options(array(
                    'id' => 'icon2',
                    'label' => esc_html__('Icon 2','wp-experts'),
                    'type' => 'text',
                ));
                cms_options(array(
                    'id' => 'link2',
                    'label' => esc_html__('Link 2','wp-experts'),
                    'type' => 'text',
                )); 
                cms_options(array(
                    'id' => 'icon3',
                    'label' => esc_html__('Icon 3','wp-experts'),
                    'type' => 'text',
                ));
                cms_options(array(
                    'id' => 'link3',
                    'label' => esc_html__('Link 3','wp-experts'),
                    'type' => 'text',
                ));
                cms_options(array(
                    'id' => 'icon4',
                    'label' => esc_html__('Icon 4','wp-experts'),
                    'type' => 'text',
                ));
                cms_options(array(
                    'id' => 'link4',
                    'label' => esc_html__('Link 4','wp-experts'),
                    'type' => 'text',
                ));
            ?>
        </div>
        <?php
    }
    function teams_page_title(){
    ?>
        <div class="pt-teams-option">
            <?php
                /* page title. */
                cms_options(array(
                    'id' => 'team_page_title',
                    'label' => esc_html__('Custom Page Title','wp-experts'),
                    'type' => 'switch',
                    'options' => array('on'=>'1','off'=>''),
                    'follow' => array('1'=>array('#page_title_enable_team'))
                ));
            ?>  
            <div id="page_title_enable_team">
            <?php 
                cms_options(array(
                    'id' => 'team_page_title_type',
                    'label' => esc_html__('Layout','wp-experts'),
                    'type' => 'imegesselect',
                    'options' => array(
                        '1' => get_template_directory_uri().'/inc/options/images/pagetitle/p1.jpg',
                        '2' => get_template_directory_uri().'/inc/options/images/pagetitle/p2.jpg',
                        '3' => get_template_directory_uri().'/inc/options/images/pagetitle/p3.jpg',
                        '4' => get_template_directory_uri().'/inc/options/images/pagetitle/p4.jpg',
                        '5' => get_template_directory_uri().'/inc/options/images/pagetitle/p5.jpg',
                        '6' => get_template_directory_uri().'/inc/options/images/pagetitle/p6.jpg',
                        '7' => get_template_directory_uri().'/inc/options/images/pagetitle/p7.jpg',
                        '8' => get_template_directory_uri().'/inc/options/images/pagetitle/p8.jpg',
                        '9' => get_template_directory_uri().'/inc/options/images/pagetitle/p9.jpg',
                    ),
                    'default' => '7'
                ));
                cms_options(array(
                    'id' => 'team_bg_page_title_single',
                    'label' => esc_html__('Background Imag - Page Title','wp-experts'),
                    'type' => 'image',
                    'default' => ''
                ));
            ?>
            </div>
        </div>
    <?php }

    /* Case Option */
    function case_page_title(){
    ?>
        <div class="pt-case-option">
            <?php
                /* page title. */
                cms_options(array(
                    'id' => 'case_page_title',
                    'label' => esc_html__('Custom Page Title','wp-experts'),
                    'type' => 'switch',
                    'options' => array('on'=>'1','off'=>''),
                    'follow' => array('1'=>array('#page_title_enable_case'))
                ));
            ?>  
            <div id="page_title_enable_case">
            <?php 
                cms_options(array(
                    'id' => 'case_page_title_type',
                    'label' => esc_html__('Layout','wp-experts'),
                    'type' => 'imegesselect',
                    'options' => array(
                        '1' => get_template_directory_uri().'/inc/options/images/pagetitle/p1.jpg',
                        '2' => get_template_directory_uri().'/inc/options/images/pagetitle/p2.jpg',
                        '3' => get_template_directory_uri().'/inc/options/images/pagetitle/p3.jpg',
                        '4' => get_template_directory_uri().'/inc/options/images/pagetitle/p4.jpg',
                        '5' => get_template_directory_uri().'/inc/options/images/pagetitle/p5.jpg',
                        '6' => get_template_directory_uri().'/inc/options/images/pagetitle/p6.jpg',
                        '7' => get_template_directory_uri().'/inc/options/images/pagetitle/p7.jpg',
                        '8' => get_template_directory_uri().'/inc/options/images/pagetitle/p8.jpg',
                        '9' => get_template_directory_uri().'/inc/options/images/pagetitle/p9.jpg',
                    ),
                    'default' => '7'
                ));
                cms_options(array(
                    'id' => 'case_bg_page_title_single',
                    'label' => esc_html__('Background Imag - Page Title','wp-experts'),
                    'type' => 'image',
                    'default' => ''
                ));
            ?>
            </div>
        </div>
    <?php }
    /* --------------------- Services Option ---------------------- */
    function services_option(){
        ?>
        <div class="services-option">
            <?php
                cms_options(array(
                    'id' => 'service_layout_show',
                    'label' => esc_html__('Custom Layout','wp-experts'),
                    'type' => 'switch',
                    'options' => array('on'=>'1','off'=>''),
                    'follow' => array('1'=>array('#service-layout'))
                ));
                ?>
                <div id="service-layout">
                    <?php
                        cms_options(array(
                            'id' => 'service_layout',
                            'label' => esc_html__('Layout','wp-experts'),
                            'type' => 'select',
                            'options' => array(
                                'layout1' => 'Layout 1',
                                'layout2' => 'Layout 2',
                                'layout3' => 'Layout 3',
                            )
                        ));
                    ?>
                </div> <?php
                cms_options(array(
                    'id' => 'services_subtitle',
                    'label' => esc_html__('Subtitle','wp-experts'),
                    'type' => 'text',
                    'placeholder' => '',
                    'desc' => ''
                ));  
                cms_options(array(
                    'id' => 'services_icon',
                    'label' => esc_html__('Icon','wp-experts'),
                    'type' => 'text',
                    'placeholder' => '',
                    'desc' => 'Enter class font icon ( Awesome, Ionicon, Stroke gap icons...)'
                ));             
                cms_options(array(
                    'id' => 'services_image_icon',
                    'label' => esc_html__('Icon Image','wp-experts'),
                    'type' => 'image',
                    'default' => ''
                ));
                cms_options(array(
                    'id' => 'services_description',
                    'label' => esc_html__('Description','wp-experts'),
                    'type' => 'textarea',
                ));
                cms_options(array(
                    'id' => 'services_bg_color_overlay',
                    'label' => __('Overlay Color','wp-experts'),
                    'type' => 'color',
                    'default' => '',
                    'desc' => 'Aplly Carousel Services layout 5',
                ));
                cms_options(array(
                    'id' => 'services_bg_page_title_single',
                    'label' => esc_html__('Background Imag - Page Title','wp-experts'),
                    'type' => 'image',
                    'default' => ''
                ));
                cms_options(array(
                    'id' => 'service_hide_cta',
                    'label' => esc_html__('Hidden Call To Action','wp-experts'),
                    'type' => 'switch',
                    'options' => array('on'=>'1','off'=>''),
                ));
            ?>
        </div>
        <?php
    }
    function services_page_title(){
        ?>
        <div class="services-option">
            <?php
                /* page title. */
                cms_options(array(
                    'id' => 'service_page_title',
                    'label' => esc_html__('Custom Page Title','wp-experts'),
                    'type' => 'switch',
                    'options' => array('on'=>'1','off'=>''),
                    'follow' => array('1'=>array('#page_title_enable'))
                ));
                ?>  <div id="page_title_enable"><?php
                cms_options(array(
                    'id' => 'service_page_title_type',
                    'label' => esc_html__('Layout','wp-experts'),
                    'type' => 'imegesselect',
                    'options' => array(
                        '1' => get_template_directory_uri().'/inc/options/images/pagetitle/p1.jpg',
                        '2' => get_template_directory_uri().'/inc/options/images/pagetitle/p2.jpg',
                        '3' => get_template_directory_uri().'/inc/options/images/pagetitle/p3.jpg',
                        '4' => get_template_directory_uri().'/inc/options/images/pagetitle/p4.jpg',
                        '5' => get_template_directory_uri().'/inc/options/images/pagetitle/p5.jpg',
                        '6' => get_template_directory_uri().'/inc/options/images/pagetitle/p6.jpg',
                        '7' => get_template_directory_uri().'/inc/options/images/pagetitle/p7.jpg',
                        '8' => get_template_directory_uri().'/inc/options/images/pagetitle/p8.jpg',
                        '9' => get_template_directory_uri().'/inc/options/images/pagetitle/p9.jpg',
                    ),
                    'default' => '1'
                ));
                ?>
            </div>
        </div>
        <?php
    }
    /* --------------------- portfolio Option ---------------------- */
    function portfolio_options(){
        ?>
        <div class="portfolio-option">
            <?php
                cms_options(array(
                    'id' => 'project_layout_show',
                    'label' => esc_html__('Custom Layout','wp-experts'),
                    'type' => 'switch',
                    'options' => array('on'=>'1','off'=>''),
                    'follow' => array('1'=>array('#project-layout'))
                ));
            ?>
                <div id="project-layout">
                    <?php
                        cms_options(array(
                            'id' => 'project_layout',
                            'label' => esc_html__('Layout','wp-experts'),
                            'type' => 'select',
                            'options' => array(
                                'layout1' => 'Layout 1',
                                'layout2' => 'Layout 2',
                            )
                        ));
                    ?>
                </div>
                <?php
                cms_options(array(
                    'id' => 'project_client',
                    'label' => esc_html__('Client','wp-experts'),
                    'type' => 'text',
                    'placeholder' => 'Yellow Hats'
                ));    
                cms_options(array(
                    'id' => 'project_location',
                    'label' => esc_html__('Location','wp-experts'),
                    'type' => 'text',
                    'placeholder' => 'Tanta, Algharbia'
                ));

                cms_options(array(
                    'id' => 'project_building',
                    'label' => esc_html__('Gross Building Area','wp-experts'),
                    'type' => 'text',
                    'placeholder' => 'Approx: 330,000 m2'
                ));

                cms_options(array(
                    'id' => 'project_time_start',
                    'label' => esc_html__('Project started','wp-experts'),
                    'type' => 'text',
                    'placeholder' => '2016 / March'
                ));
                cms_options(array(
                    'id' => 'project_time_end',
                    'label' => esc_html__('Project complited','wp-experts'),
                    'type' => 'text',
                    'placeholder' => '2017 / September'
                ));    
                cms_options(array(
                    'id' => 'project_architect',
                    'label' => esc_html__('Architect','wp-experts'),
                    'type' => 'text',
                    'placeholder' => 'Begha'
                ));    
                cms_options(array(
                    'id' => 'project_value',
                    'label' => esc_html__('Value','wp-experts'),
                    'type' => 'text',
                    'placeholder' => '$ 2 250 000'
                ));             
            ?>
        </div>
        <?php
    }
    
    function portfolio_services_overview(){
        cms_options(array(
            'id' => 'portfolio_overview',
            'label' => esc_html__('','wp-experts'),
            'type' => 'textarea',
            'placeholder' => ''
        ));
    }

    function portfolio_wishes(){
        cms_options(array(
            'id' => 'portfolio_wishes',
            'label' => esc_html__('','wp-experts'),
            'type' => 'textarea',
            'placeholder' => ''
        ));
    }

    function portfolio_management(){
        cms_options(array(
            'id' => 'portfolio_management',
            'label' => esc_html__('','wp-experts'),
            'type' => 'textarea',
            'placeholder' => '',
            'desc' => 'Aplly single project Layout 2'
        ));
    }

    function portfolio_goals(){
        cms_options(array(
            'id' => 'portfolio_goals',
            'label' => esc_html__('','wp-experts'),
            'type' => 'textarea',
            'placeholder' => '',
            'desc' => 'Aplly single project Layout 2'
        ));
    }

    /* --------------------- Project Gallery ---------------------- */
    function portfolio_gallery(){
        ?>
        <div class="project-gallery">
            <?php
                cms_options(array(
                    'id' => 'project_gallery_show',
                    'label' => esc_html__('Show Gallery','wp-experts'),
                    'type' => 'switch',
                    'options' => array('on'=>'1','off'=>''),
                    'follow' => array('1'=>array('#project-gallery'))
                ));
            ?>
            <div id="project-gallery">
                <?php
                    cms_options(array(
                        'id' => 'project_image_gallery',
                        'label' => esc_html__('Gallery', 'wp-experts'),
                        'type' => 'images',
                    ));
                ?>
            </div>
        </div>
        <?php
    }
    /* --------------------- Theme Demos ---------------------- */
    function cms_demos(){
        ?>
        <div class="demos-option">
            <?php
                cms_options(array(
                    'id' => 'demo_url',
                    'label' => esc_html__('Demo Url','wp-experts'),
                    'type' => 'text',
                    'placeholder' => ''
                ));  
            ?>
        </div>
        <?php
    }
    /* --------------------- Overview Demos ---------------------- */
    function overview_option(){
        ?>
        <div class="overview-option">
            <?php
                cms_options(array(
                    'id' => 'overview_buttun_url',
                    'label' => esc_html__('Button Url','wp-experts'),
                    'type' => 'text',
                    'placeholder' => '#'
                ));  
                cms_options(array(
                    'id' => 'overview_buttun_text',
                    'label' => esc_html__('Button Text','wp-experts'),
                    'type' => 'text',
                    'placeholder' => 'Get A Quote'
                ));  
            ?>
        </div>
        <?php
    }
    /* --------------------- Careers ---------------------- */
    function careers_option(){
        ?>
        <div class="careers-option">
            <?php
                cms_options(array(
                    'id' => 'careers_location',
                    'label' => esc_html__('Location','wp-experts'),
                    'type' => 'text',
                    'placeholder' => ''
                ));  
            ?>
        </div>
        <?php
    }
    
}

new CMSMetaOptions();