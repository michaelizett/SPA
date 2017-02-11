<?php
/**
 * CMS Theme functions and definitions
 *
 * Sets up the theme and provides some helper functions, which are used
 * in the theme as custom template tags. Others are attached to action and
 * filter hooks in WordPress to change core functionality.
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development and
 * http://codex.wordpress.org/Child_Themes), you can override certain functions
 * (those wrapped in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before the parent
 * theme's file, so the child theme functions would be used.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are instead attached
 * to a filter or action hook.
 *
 * For more information on hooks, actions, and filters, @link http://codex.wordpress.org/Plugin_API
 *
 * @package CMSSuperHeroes
 * @subpackage CMS Theme
 * @since 1.0.0
 */

wp_experts_base();

function wp_experts_base()
{
	global $wp_experts_base;
	/* Add base functions */
	require_once( get_template_directory() . '/inc/base.class.php' );

	$wp_experts_base = new WP_Experts_Base();
}

/* Add ReduxFramework. */
if(!class_exists('ReduxFramework')){
    require_once( get_template_directory() . '/inc/ReduxCore/framework.php' );
}

/* Add theme options. */
require_once( get_template_directory() . '/inc/options/functions.php' );

/**
 * Custom params & remove VC Elements.
 * 
 * @author FOX
 */

function wp_experts_vc_after_init(){
    
    require_once ( get_template_directory() . '/vc_params/vc_rows.php' );
    require_once( get_template_directory() . '/vc_params/vc_column.php' );
    require_once( get_template_directory() . '/vc_params/vc_pie.php' );
    require_once( get_template_directory() . '/vc_params/vc_tta_section.php' );
    require_once( get_template_directory() . '/vc_params/cms_custom_pagram_vc.php' );
    require_once( get_template_directory() . '/inc/fontlibs/glyphicons.php' );
    
    vc_remove_element( "vc_button" );
    vc_remove_element( "vc_button2" );
    vc_remove_element( "vc_cta_button" );
    vc_remove_element( "vc_cta_button2" );
    vc_remove_element( "vc_cta" );
    vc_remove_element( "cms_fancybox" );
    vc_remove_element( "cms_counter" );
}
add_action('vc_after_init', 'wp_experts_vc_after_init');

/* Include CMS Shortcode */
function wp_experts_shortcodes_list(){
	$wp_experts_shortcodes_list = array(
		'cms_carousel',
		'cms_grid',
		'cms_fancybox_single',
		'cms_counter_single',
		'cms_progressbar',
		);

	return $wp_experts_shortcodes_list;
}

/**
 * Add new elements for VC
 * 
 * @author FOX
 */

function wp_experts_vc_elements(){
    
    if(class_exists('CmsShortCode')) {
    	add_filter('cms-shorcode-list', 'wp_experts_shortcodes_list');

	    require_once( get_template_directory() . '/inc/elements/button/cms_button.php' );
	    require_once( get_template_directory() . '/inc/elements/cta/cms_cta.php' );
	    require_once( get_template_directory() . '/inc/elements/heading/cms_heading.php' );
	    require_once( get_template_directory() . '/inc/elements/social/cms_social.php' );
	    require_once( get_template_directory() . '/inc/elements/googlemap/cms_googlemap.php' );
	    require_once( get_template_directory() . '/inc/elements/countdown/cms_countdown.php' );
	    require_once( get_template_directory() . '/inc/elements/process/cms_process.php' );
	    require_once( get_template_directory() . '/inc/elements/careers/cms_careers.php' );
	}
}
add_action('vc_before_init', 'wp_experts_vc_elements');

/* Add SCSS */
if(!class_exists('scssc')){
    require_once( get_template_directory() . '/inc/libs/scss.inc.php' );
}

/**
 * Admin Loader.
 * require admin files.
 * 
 * @author Fox
 */
if(is_admin()){
    /* Add Meta Core Options */
    if(!class_exists('CsCoreControl')){
        
        /* add mete core */
        require_once( get_template_directory() . '/inc/metacore/core.options.php' );
        
        /* add meta options */
        require_once( get_template_directory() . '/inc/options/meta.options.php' );
    }
    /* tmp plugins. */
    require_once( get_template_directory() . '/inc/options/require.plugins.php' );
    /* add presets */
    require_once( get_template_directory() . '/inc/options/presets.php' );
}

/* Add Template functions */
require_once( get_template_directory() . '/inc/template.functions.php' );

/* Static css. */
require_once( get_template_directory() . '/inc/dynamic/static.css.php' );

/* Dynamic css*/
require_once( get_template_directory() . '/inc/dynamic/dynamic.css.php' );

/* Add widgets */
require_once( get_template_directory() . '/inc/widgets/social.php' );
require_once( get_template_directory() . '/inc/widgets/widget-flickrphotos.php' );
require_once( get_template_directory() . '/inc/widgets/recent-posts.php' );
require_once( get_template_directory() . '/inc/widgets/recent-posts-v2.php' );

// Set up the content width value based on the theme's design and stylesheet.
if ( ! isset( $content_width ) )
	$content_width = 625;

/* Add mega menu */
if(!class_exists('HeroMenuWalker')){
    require_once( get_template_directory() . '/inc/megamenu/mega-menu.php' );
}


/*
 * Limit Words
 */
if (!function_exists('wp_experts_limit_words')) {
	function wp_experts_limit_words($string, $word_limit) {
	    
		$words = explode(" ",$string);
        return implode(" ",array_splice($words,0,$word_limit));
	}
}

/**
 * Twenty Twelve setup.
 *
 * Sets up theme defaults and registers the various WordPress features that
 * Twenty Twelve supports.
 *
 * @uses load_theme_textdomain() For translation/localization support.
 * @uses add_editor_style() To add a Visual Editor stylesheet.
 * @uses add_theme_support() To add support for post thumbnails, automatic feed links,
 * 	custom background, and post formats.
 * @uses register_nav_menu() To add support for navigation menus.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 *
 * @since Twenty Twelve 1.0
 */
function wp_experts_setup() {
	/*
	 * Makes Twenty Twelve available for translation.
	 *
	 * Translations can be added to the /languages/ directory.
	 * If you're building a theme based on Twenty Twelve, use a find and replace
	 * to change "wp-experts" to the name of your theme in all the template files.
	 */
	load_theme_textdomain( "wp-experts", get_template_directory() . '/languages' );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'assets/css/editor-style.css' ) );

	// Adds title tag
	add_theme_support( "title-tag" );

	// Add woocommerce
	add_theme_support("woocommerce");
	
	// Adds custom header
	add_theme_support( 'custom-header' );
	
	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	// This theme supports a variety of post formats.
	add_theme_support( 'post-formats', array( 'video' , 'gallery',) );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menu( 'primary', esc_html__( 'Primary Menu', "wp-experts" ) );

	/*
	 * This theme supports custom background color and image,
	 * and here we also set up the default background color.
	 */
	add_theme_support( 'custom-background', array(
		'default-color' => 'e6e6e6',
	) );

	// This theme uses a custom image size for featured images, displayed on "standard" posts.
	add_theme_support( 'post-thumbnails' );
	add_image_size('wp_experts_575X450', 575, 450, true);
	add_image_size('wp_experts_images-sm', 470, 430, true);
	add_image_size('wp_experts_images-team', 370, 310, true);
	set_post_thumbnail_size( 624, 9999 ); // Unlimited height, soft crop
}
add_action( 'after_setup_theme', 'wp_experts_setup' );

/**
 * Get meta data.
 * @author Fox
 * @return mixed|NULL
 */
function wp_experts_meta_data(){
     global $post, $wp_experts_meta;
     
     if(!isset($post->ID)) return ;
     
     $_data = new stdClass();
     
     $_meta_post = get_post_meta($post->ID);
     
     foreach ($_meta_post as $key => $meta){
         
         if(strstr($key, 'cms_')) {
             $_data->$key = $meta[0];
         }
     }
     
     $wp_experts_meta = $_data;
}

add_action('wp', 'wp_experts_meta_data');
/**
 * Get post meta data.
 * @author Fox
 * @return mixed|NULL
 */
function wp_experts_post_meta_data(){
    
     global $post, $wp_experts_meta;
     
     if(!isset($post->ID)) return ;
     
     $_data = new stdClass();
     
     $_meta_post = get_post_meta($post->ID);
     
     foreach ($_meta_post as $key => $meta){
         
         if(strstr($key, 'cms_')) {
             $_data->$key = $meta[0];
         }
     }
     
     return $_data;
}

/*
 * Convert HEX to GRBA
*/
if(!function_exists('wp_experts_hex_to_rgb')){
    function wp_experts_hex_to_rgb($hex,$opacity = 1) {
    	$hex = str_replace("#",null, $hex);
    	$color = array();
    	if(strlen($hex) == 3) {
    		$color['r'] = hexdec(substr($hex,0,1).substr($hex,0,1));
    		$color['g'] = hexdec(substr($hex,1,1).substr($hex,1,1));
    		$color['b'] = hexdec(substr($hex,2,1).substr($hex,2,1));
    		$color['a'] = $opacity;
    	}
    	else if(strlen($hex) == 6) {
    		$color['r'] = hexdec(substr($hex, 0, 2));
    		$color['g'] = hexdec(substr($hex, 2, 2));
    		$color['b'] = hexdec(substr($hex, 4, 2));
    		$color['a'] = $opacity;
    	}
    	$color = "rgba(".implode(', ', $color).")";
    	return $color;
    }
}

/**
 * Enqueue scripts and styles for front-end.
 * @author Fox
 * @since CMS SuperHeroes 1.0
 */
function wp_experts_scripts_styles() {
    
	global $smof_data, $wp_styles,$wp_experts_meta;
	
	/** theme options. */
	$script_options = array(
	    'menu_sticky'=> $smof_data['menu_sticky'],
	    'back_to_top'=> $smof_data['footer_botton_back_to_top']
	);

	/*------------------------------------- JavaScript ---------------------------------------*/
	
	
	/** --------------------------libs--------------------------------- */
	
	
	/* Adds JavaScript Bootstrap. */
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ), '3.3.2');
	
	/* Add parallax plugin. */
	wp_enqueue_script('parallax', get_template_directory_uri() . '/assets/js/jquery.parallax-1.1.3.js', array( 'jquery' ), '1.1.3', true);

	/* Add One Page plugin. */
	if(is_page() && isset($wp_experts_meta->_cms_one_page) && $wp_experts_meta->_cms_one_page){
	    wp_enqueue_script('jquery.singlePageNav', get_template_directory_uri() . '/assets/js/jquery.singlePageNav.js', array( 'jquery' ), '1.0.0', true);
	     
	    if(!empty($wp_experts_meta->_cms_one_page_easing)){
	        wp_enqueue_script('jquery-effects-core');
	        $script_options['one_page_easing'] = !empty($wp_experts_meta->_cms_one_page_easing) ? $wp_experts_meta->_cms_one_page_easing : 'swing';
	    }
	     
	    $script_options['one_page'] = true;
	    $script_options['one_page_speed'] = !empty($wp_experts_meta->_cms_one_page_speed) ? $wp_experts_meta->_cms_one_page_speed : 1000;
	}
	
	
	/* Loads awesome stylesheet. */
	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '4.3.0');

	/* Loads fonts stylesheet. */
	wp_enqueue_style('cmssuperheroes-fonts', get_template_directory_uri() . '/assets/css/fonts.css');

	/* Loads animations stylesheet. */
	wp_enqueue_style('animations', get_template_directory_uri() . '/assets/css/animations.css');
	/* Loads Font Ionicons. */
	wp_enqueue_style('font-ionicons', get_template_directory_uri() . '/assets/css/ionicons.min.css', array(), '2.0.1');

	/* Loads Pe Icon. */
	wp_enqueue_style('pe-icon', get_template_directory_uri() . '/assets/css/pe-icon-7-stroke.css', array(), '1.0.1');
	
	/* Loads Pe Icon. */
	wp_enqueue_style('elegant-icon', get_template_directory_uri() . '/assets/css/elegant-icon.css', array(), '1.0.1');
	
	/** --------------------------custom------------------------------- */
	
	/* Add main.js */
	wp_register_script('cmssuperheroes-main', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), '1.0.0', true);
	wp_localize_script('cmssuperheroes-main', 'CMSOptions', $script_options);
	wp_enqueue_script('cmssuperheroes-main');
	/* Add menu.js */
    wp_enqueue_script('cmssuperheroes-menu', get_template_directory_uri() . '/assets/js/menu.js', array( 'jquery' ), '1.0.0', true);
    wp_register_script('progressCircle', get_template_directory_uri() . '/assets/js/process_cycle.js', array( 'jquery' ), '1.0.0', true);
    wp_register_script('vc_pie_custom', get_template_directory_uri() . '/assets/js/vc_pie_custom.js', array( 'jquery' ), '1.0.0', true);
	/* OLW Carousel */
	/* Magnific Popup */
    wp_enqueue_script('magnific-image', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array( 'jquery' ), '1.0.0', true);
    /* animation column */
    wp_enqueue_script('animation-column', get_template_directory_uri() . '/assets/js/animation-column.js', array( 'jquery' ), '1.0.0', true);
    /* Same Height */
    wp_enqueue_script('matchHeight', get_template_directory_uri() . '/assets/js/jquery.matchHeight-min.js', array( 'jquery' ), '1.0.0', true);
    wp_enqueue_script('sameheight', get_template_directory_uri() . '/assets/js/sameheight.js', array( 'jquery' ), '1.0.0', true);
    /* Style Scroll */
    wp_enqueue_script('scroll-bar', get_template_directory_uri() . '/assets/js/enscroll.js', array( 'jquery' ), '1.0.0', true);

	/*
	 * Adds JavaScript to pages with the comment form to support
	 * sites with threaded comments (when in use).
	 */
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

    /*------------------------------------- Stylesheet ---------------------------------------*/
	
	/** --------------------------libs--------------------------------- */
	
	/* Loads Bootstrap stylesheet. */
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '3.3.2');
	
	/* Loads Bootstrap stylesheet. */
	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '4.3.0');
	
	/** --------------------------custom------------------------------- */
	/* Popup Images Gallery */
	wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '1.0.1');
	
	/* Loads our main stylesheet. */
	wp_enqueue_style( 'wp-experts-style', get_stylesheet_uri(), array( 'bootstrap' ));

	/* Loads the Internet Explorer specific stylesheet. */
	wp_enqueue_style( 'wp-experts-ie', get_template_directory_uri() . '/assets/css/ie.css', array( 'wp-experts-style' ), '1.0.0' );
	$wp_styles->add_data( 'wp-experts-ie', 'conditional', 'lt IE 9' );
	
    wp_enqueue_style('wp-experts-static', get_template_directory_uri() . "/assets/css/static.css", array( 'wp-experts-style' ), '1.0.0');

}
add_action( 'wp_enqueue_scripts', 'wp_experts_scripts_styles' );


/**
 * Register sidebars.
 *
 * Registers our main widget area and the front page widget areas.
 *
 * @since Fox
 */
function wp_experts_widgets_init() {
	register_sidebar( array(
		'name' => esc_html__( 'Main Sidebar', "wp-experts" ),
		'id' => 'sidebar-1',
		'description' => esc_html__( '', "wp-experts" ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
    	'name' => esc_html__( 'Footer Top - Column 1', "wp-experts" ),
    	'id' => 'footer-top-1',
    	'description' => esc_html__( '', "wp-experts" ),
    	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    	'after_widget' => '</aside>',
    	'before_title' => '<h3 class="widget-title">',
    	'after_title' => '</h3>',
	) );

	register_sidebar( array(
    	'name' => esc_html__( 'Footer Top - Column 2', "wp-experts" ),
    	'id' => 'footer-top-2',
    	'description' => esc_html__( '', "wp-experts" ),
    	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    	'after_widget' => '</aside>',
    	'before_title' => '<h3 class="widget-title">',
    	'after_title' => '</h3>',
	) );

	register_sidebar( array(
    	'name' => esc_html__( 'Footer Top - Column 3', "wp-experts" ),
    	'id' => 'footer-top-3',
    	'description' => esc_html__( '', "wp-experts" ),
    	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    	'after_widget' => '</aside>',
    	'before_title' => '<h3 class="widget-title">',
    	'after_title' => '</h3>',
	) );

	register_sidebar( array(
    	'name' => esc_html__( 'Footer Top - Column 4', "wp-experts" ),
    	'id' => 'footer-top-4',
    	'description' => esc_html__( '', "wp-experts" ),
    	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    	'after_widget' => '</aside>',
    	'before_title' => '<h3 class="widget-title">',
    	'after_title' => '</h3>',
	) );

	register_sidebar(array(
        'name' => 'Footer Top 5',
        'id' => 'footer-top-5',
        'before_widget' => '<div id="%1$s" class="slidingbar-widget-col %2$s">',
    	'after_widget' => '<div style="clear:both;"></div></div>',
    	'before_title' => '<h3 class="widget-title"><span>',
    	'after_title' => '</span></h3>',
    ));

	register_sidebar(array(
        'name' => 'Woocommerce Sidebar',
        'id' => 'woocommerce-widget-area',
        'before_widget' => '<div id="%1$s" class="slidingbar-widget-col %2$s">',
    	'after_widget' => '<div style="clear:both;"></div></div>',
    	'before_title' => '<h3 class="wg-title"><span>',
    	'after_title' => '</span></h3>',
    ));
    register_sidebar(array(
        'name' => 'Services Sidebar',
        'id' => 'services',
        'before_widget' => '<div id="%1$s" class="slidingbar-widget-col %2$s">',
    	'after_widget' => '<div style="clear:both;"></div></div>',
    	'before_title' => '<h3 class="wg-title"><span>',
    	'after_title' => '</span></h3>',
    ));
    register_sidebar(array(
        'name' => 'About Sidebar',
        'id' => 'about',
        'before_widget' => '<div id="%1$s" class="slidingbar-widget-col %2$s">',
    	'after_widget' => '<div style="clear:both;"></div></div>',
    	'before_title' => '<h3 class="wg-title"><span>',
    	'after_title' => '</span></h3>',
    ));
    register_sidebar(array(
        'name' => 'Team Sidebar',
        'id' => 'team',
        'before_widget' => '<div id="%1$s" class="slidingbar-widget-col %2$s">',
    	'after_widget' => '<div style="clear:both;"></div></div>',
    	'before_title' => '<h3 class="wg-title"><span>',
    	'after_title' => '</span></h3>',
    ));
}
add_action( 'widgets_init', 'wp_experts_widgets_init' );

/**
 * Filter the page menu arguments.
 *
 * Makes our wp_nav_menu() fallback -- wp_page_menu() -- show a home link.
 *
 * @since 1.0.0
 */
function wp_experts_page_menu_args( $args ) {
    if ( ! isset( $args['show_home'] ) )
        $args['show_home'] = true;
    return $args;
}
add_filter( 'wp_page_menu_args', 'wp_experts_page_menu_args' );

/**
 * Add field subtitle to post.
 * 
 * @since 1.0.0
 */
function wp_experts_add_subtitle_field(){
    global $post, $cms_meta;
    
    /* get current_screen. */
    $screen = get_current_screen();
    
    /* show field in post. */
    if(in_array($screen->id, array('post'))){
        
        /* get value. */
        $value = get_post_meta($post->ID, 'post_subtitle', true);
        
        /* html. */
        echo '<div class="subtitle"><input type="text" name="post_subtitle" value="'.esc_attr($value).'" id="subtitle" placeholder = "'.esc_html__('Subtitle', "wp-experts").'" style="width: 100%;margin-top: 4px;"></div>';
    }
}

add_action( 'edit_form_after_title', 'wp_experts_add_subtitle_field' );

/**
 * Save custom theme meta. 
 * 
 * @since 1.0.0
 */
function wp_experts_save_meta_boxes($post_id) {
    
    if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    /* update field subtitle */
    if(isset($_POST['post_subtitle'])){
        update_post_meta($post_id, 'post_subtitle', $_POST['post_subtitle']);
    }
}

add_action('save_post', 'wp_experts_save_meta_boxes');

/**
 * Display navigation to next/previous set of posts when applicable.
 *
 * @since 1.0.0
 */
function wp_experts_paging_nav() {
    // Don't print empty markup if there's only one page.
	if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
		return;
	}

	$paged        = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;
	$pagenum_link = html_entity_decode( get_pagenum_link() );
	$query_args   = array();
	$url_parts    = explode( '?', $pagenum_link );

	if ( isset( $url_parts[1] ) ) {
		wp_parse_str( $url_parts[1], $query_args );
	}

	$pagenum_link = remove_query_arg( array_keys( $query_args ), $pagenum_link );
	$pagenum_link = trailingslashit( $pagenum_link ) . '%_%';

	// Set up paginated links.
	$links = paginate_links( array(
			'base'     => $pagenum_link,
			'total'    => $GLOBALS['wp_query']->max_num_pages,
			'current'  => $paged,
			'mid_size' => 1,
			'add_args' => array_map( 'urlencode', $query_args ),
			'prev_text' => '<i class="fa fa-long-arrow-left"></i>',
			'next_text' => '<i class="fa fa-long-arrow-right"></i>'
	) );

	if ( $links ) :

	?>
	<nav class="navigation paging-navigation clearfix">
			<div class="pagination loop-pagination">
				<?php echo ''.$links; ?>
			</div><!-- .pagination -->
	</nav><!-- .navigation -->
	<?php
	endif;
}

/**
* Display navigation to next/previous post when applicable.
*
* @since 1.0.0
*/
function wp_experts_post_nav() {
    global $post;
    // Don't print empty markup if there's nowhere to navigate.
    $previous = ( is_attachment() ) ? get_post( $post->post_parent ) : get_adjacent_post( false, '', true );
    $next     = get_adjacent_post( false, '', false );

    if ( ! $next && ! $previous )
        return;
    ?>
    <?php
    $next_post = get_next_post();
    $previous_post = get_previous_post();
    if( !empty($next_post) )
    {
    ?>
	<nav class="navigation post-navigation" role="navigation">
		<div class="nav-links row clearfix">
			<div class="nav-link-prev col-sm-6 col-xs-12 text-left">
				<?php if ( is_a( $previous_post , 'WP_Post' ) && get_the_title( $previous_post->ID ) != '') { ?>
					<a href="<?php echo esc_url(get_permalink( $previous_post->ID )); ?>">
						<img src="<?php $previousPost = get_previous_post(); $url_prev = wp_get_attachment_url( get_post_thumbnail_id($previousPost->ID));echo esc_url($url_prev);?>" />
						<div class="nav-inner">
				  			<span class="ft-droid-b-i"><?php echo esc_html_e('Previous Post', "wp-experts") ?></span>
					  		<h3><?php echo get_the_title( $previous_post->ID ); ?></h3>
					  	</div>
				  	</a>
				<?php } ?>
			</div>
			<div class="nav-link-next col-sm-6 col-xs-12 text-right">
				<?php if ( is_a( $next_post , 'WP_Post' ) && get_the_title( $next_post->ID ) != '') { ?>
					<a href="<?php echo esc_url(get_permalink( $next_post->ID )); ?>">
						<img src="<?php $nextPost = get_next_post(); $url_next = wp_get_attachment_url( get_post_thumbnail_id($nextPost->ID), 'wp_experts_images-sm'); echo esc_url($url_next);?>" />
						<div class="nav-inner">
				  			<span class="ft-droid-b-i"><?php echo esc_html_e('Next Post', "wp-experts") ?></span>
					  		<h3><?php echo get_the_title( $next_post->ID ); ?></h3>
					  	</div>
				  	</a>
				<?php } ?>
			</div>
		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
    }
}
function wp_experts_post_nav_classic() {
    global $post;
    // Don't print empty markup if there's nowhere to navigate.
    $previous = ( is_attachment() ) ? get_post( $post->post_parent ) : get_adjacent_post( false, '', true );
    $next     = get_adjacent_post( false, '', false );

    if ( ! $next && ! $previous )
        return;
    ?>
    <?php
    $next_post = get_next_post();
    $previous_post = get_previous_post();
    if( !empty($next_post) )
    {
    ?>
	<nav class="navigation post-navigation col-lg-12" role="navigation">
		<ul class="nav-links clearfix">
			<li class="nav-link-prev">
				<?php if ( is_a( $previous_post , 'WP_Post' ) && get_the_title( $previous_post->ID ) != '') { ?>
					<a href="<?php echo esc_url(get_permalink( $previous_post->ID )); ?>">
						<i class="fa fa-angle-left"></i>
				  	</a>
				<?php } ?>
			</li>
			<li class="nav-link-next">
				<?php if ( is_a( $next_post , 'WP_Post' ) && get_the_title( $next_post->ID ) != '') { ?>
					<a href="<?php echo esc_url(get_permalink( $next_post->ID )); ?>">
						<i class="fa fa-angle-right"></i>
				  	</a>
				<?php } ?>
			</li>
		</ul><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
    }
}
/* End Post nav */

/* Add Custom Comment */
function wp_experts_comment($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment;
	extract($args, EXTR_SKIP);

	if ( 'div' == $args['style'] ) {
		$tag = 'div';
		$add_below = 'comment';
	} else {
		$tag = 'li';
		$add_below = 'div-comment';
	}
?>
<<?php echo esc_attr($tag) ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>">
<?php if ( 'div' != $args['style'] ) : ?>
<div id="div-comment-<?php comment_ID() ?>" class="comment-body clearfix">
<?php endif; ?>
<div class="comment-author-image vcard">
	<?php echo get_avatar( $comment, 109 ); ?>
</div>
<?php if ( $comment->comment_approved == '0' ) : ?>
	<em class="comment-awaiting-moderation"><?php esc_html_e( 'Your comment is awaiting moderation.' , "wp-experts"); ?></em>
<?php endif; ?>
<div class="comment-main">
	<div class="comment-meta commentmetadata">
		<span class="comment-author"><?php echo get_comment_author_link(); ?></span>
		<span class="comment-date">
			<?php
				echo get_comment_date() .' - '. get_comment_time();
			?>
		</span>
	</div>
	<div class="comment-content">
		<?php comment_text(); ?>
		<div class="reply">
		<?php comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
		</div>
	</div>
</div>
<?php if ( 'div' != $args['style'] ) : ?>
</div>
<?php endif; ?>
<?php
}
/* End Custom Comment */

/* Replace Stylesheet */
function wp_experts_validate_stylesheet($src) {
	if(strstr($src,'font-awesome-css')|| strstr($src,'cms-icon-rticon-css') || strstr($src,'mediaelement-css') || strstr($src,'wp-mediaelement-css') || strstr($src,'bootstrap-progressbar-css') ){
		return str_replace('rel', 'property="stylesheet" rel', $src);
	}
	else{
		return $src;
	}
}
add_filter('style_loader_tag', 'wp_experts_validate_stylesheet');

/**
 * Display navigation to next/previous comments when applicable.
 *
 * @since 1.0.0
 */
function wp_experts_comment_nav() {
	// Are there comments to navigate through?
	if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
	?>
	<nav class="navigation comment-navigation" role="navigation">
		<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', "wp-experts" ); ?></h2>
		<div class="nav-links">
			<?php
				if ( $prev_link = get_previous_comments_link( esc_html__( 'Older Comments', "wp-experts" ) ) ) :
					printf( '<div class="nav-previous">%s</div>', $prev_link );
				endif;

				if ( $next_link = get_next_comments_link( esc_html__( 'Newer Comments', "wp-experts" ) ) ) :
					printf( '<div class="nav-next">%s</div>', $next_link );
				endif;
			?>
		</div><!-- .nav-links -->
	</nav><!-- .comment-navigation -->
	<?php
	endif;
}

/* Post view */
function wp_experts_post_views($post_ID) {
 
    //Set the name of the Posts Custom Field.
    $count_key = 'post_views_count'; 
     
    //Returns values of the custom field with the specified key from the specified post.
    $count = get_post_meta($post_ID, $count_key, true);
    
    $count = $count ? (int)$count : 0 ;
        
    if(is_single()){
    	
    	$count++;
    	
    	update_post_meta($post_ID, $count_key, $count);
    	
    }
    
    return $count;
}

/**
 * Set home page.
 *
 * get home title and update options.
 *
 * @return Home page title.
 * @author FOX
 */
function wp_experts_set_home_page(){

	$home_page = 'Home';

	$page = get_page_by_title($home_page);

	if(!isset($page->ID))
		return ;
		 
		update_option('show_on_front', 'page');
		update_option('page_on_front', $page->ID);
}

add_action('cms_import_finish', 'wp_experts_set_home_page');

/**
 * Set menu locations.
 *
 * get locations and menu name and update options.
 *
 * @return string[]
 * @author FOX
 */
function wp_experts_set_menu_location(){

	$setting = array(
			'Main Menu' => 'primary'
	);

	$navs = wp_get_nav_menus();

	$new_setting = array();

	foreach ($navs as $nav){

		if(!isset($setting[$nav->name]))
			continue;

			$id = $nav->term_id;
			$location = $setting[$nav->name];

			$new_setting[$location] = $id;
	}

	set_theme_mod('nav_menu_locations', $new_setting);
}

add_action('cms_import_finish', 'wp_experts_set_menu_location');


/* Set Product per Page Shop */
if(class_exists('Woocommerce')){
	$number_product = $smof_data['product_per_page'];
	add_filter( 'loop_shop_per_page', create_function( '$cols', 'return "'.$number_product.'";' ), 3 );
	require_once( get_template_directory() . '/woocommerce/wc-function-hooks.php' );
}

/* Favicon */
function wp_experts_site_favicon(){
    
    global $smof_data;
    
    if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() )
        echo '<link rel="icon" type="image/png" href="'.esc_url($smof_data['favicon_icon']['url']).'"/>';
}

add_action('wp_head', 'wp_experts_site_favicon');

/**
 * Demo Data
 */
add_filter('ef3-theme-options-opt-name', 'wp_experts_set_demo_opt_name');

function wp_experts_set_demo_opt_name(){
	return 'smof_data';
}

add_filter('ef3-replace-content', 'wp_experts_replace_content', 10 , 2);

function wp_experts_replace_content($replaces, $attachment){
	return array(
		'/image="(.+?)"/' => 'image="'.$attachment.'"',
		'/portfolio_masonry_category="(.+?)"/' => '',
		'/tax_query:/' => 'remove_query:',
		'/categories:/' => 'remove_query:',
		'/src="(.+?)"/' => 'src="'.ef3_import_export()->acess_url.'ef3-placeholder-image.jpg"'
	);
}

add_filter('ef3-replace-theme-options', 'wp_experts_replace_theme_options');

function wp_experts_replace_theme_options(){
	return array(
		'dev_mode' => 0,
	);
}

add_filter('ef3-enable-create-demo', 'wp_experts_enable_create_demo');

function wp_experts_enable_create_demo(){
	return false;
}

/**
 * End Demo Data
 */

/* Twiiter */
function wp_experts_ago($time) {
   $periods = array("second", "minute", "hour", "day", "week", "month", "year", "decade");
   $lengths = array("60","60","24","7","4.35","12","10");

   $now = time();

       $difference     = $now - $time;
       $tense         = "ago";

   for($j = 0; $difference >= $lengths[$j] && $j < count($lengths)-1; $j++) {
       $difference /= $lengths[$j];
   }

   $difference = round($difference);

   if($difference != 1) {
       $periods[$j].= "s";
   }

   return "$difference $periods[$j] ago ";
}
remove_action('tgmpa_register', 'newsletter_register_required_plugins');