<?php
/**
 * Page title template
 * @since 1.0.0
 * @author Fox
 */
function wp_experts_page_title(){
    global $smof_data, $wp_experts_meta, $wp_experts_base;
    
    if(is_page() && isset($wp_experts_meta->_cms_page_title) && $wp_experts_meta->_cms_page_title){
        if(isset($wp_experts_meta->_cms_page_title_type)){
            $smof_data['page_title_layout'] = $wp_experts_meta->_cms_page_title_type;
        }
        if (is_page() && isset($wp_experts_meta->_cms_bg_image_page_title) && $wp_experts_meta->_cms_bg_image_page_title) {
            $smof_data['bg_image_page_title']['url'] = wp_get_attachment_url($wp_experts_meta->_cms_bg_image_page_title);
        }
    }

    if(is_singular('services') && isset($wp_experts_meta->_cms_service_page_title) && $wp_experts_meta->_cms_service_page_title){
        if(isset($wp_experts_meta->_cms_service_page_title_type)){
            $smof_data['page_title_layout'] = $wp_experts_meta->_cms_service_page_title_type;
        }
    }

    if(is_singular('teams') && isset($wp_experts_meta->_cms_team_page_title) && $wp_experts_meta->_cms_team_page_title){
        if(isset($wp_experts_meta->_cms_team_page_title_type)){
            $smof_data['page_title_layout'] = $wp_experts_meta->_cms_team_page_title_type;
        }
    }

    if(is_singular('case') && isset($wp_experts_meta->_cms_case_page_title) && $wp_experts_meta->_cms_case_page_title){
        if(isset($wp_experts_meta->_cms_case_page_title_type)){
            $smof_data['page_title_layout'] = $wp_experts_meta->_cms_case_page_title_type;
        }
    }

    if (is_404() && isset($smof_data['bg_image_page_title_404']['url'])) {
        $smof_data['bg_image_page_title']['url'] = $smof_data['bg_image_page_title_404']['url'];
    }

    if (is_singular('services') && isset($smof_data['bg_image_page_title_services']['url'])) {
        $smof_data['bg_image_page_title']['url'] = $smof_data['bg_image_page_title_services']['url'];
    }

    if (is_singular('services') && isset($wp_experts_meta->_cms_services_bg_page_title_single) && $wp_experts_meta->_cms_services_bg_page_title_single) {
        $smof_data['bg_image_page_title']['url'] = wp_get_attachment_url($wp_experts_meta->_cms_services_bg_page_title_single);
    }

    if (is_singular('teams') && isset($wp_experts_meta->_cms_team_bg_page_title_single) && $wp_experts_meta->_cms_team_bg_page_title_single) {
        $smof_data['bg_image_page_title']['url'] = wp_get_attachment_url($wp_experts_meta->_cms_team_bg_page_title_single);
    }

    if (is_singular('case') && isset($wp_experts_meta->_cms_case_bg_page_title_single) && $wp_experts_meta->_cms_case_bg_page_title_single) {
        $smof_data['bg_image_page_title']['url'] = wp_get_attachment_url($wp_experts_meta->_cms_case_bg_page_title_single);
    }

    if (is_singular('product') && isset($smof_data['bg_image_page_title_product']['url'])) {
        $smof_data['bg_image_page_title']['url'] = $smof_data['bg_image_page_title_product']['url'];
    }
    if(class_exists('Woocommerce')){
        if (is_woocommerce() && isset($smof_data['bg_image_page_title_product']['url'])) {
            $smof_data['bg_image_page_title']['url'] = $smof_data['bg_image_page_title_product']['url'];
        }
    }

    if($smof_data['page_title_layout']){
        ?>
        <?php switch ($smof_data['page_title_layout']){
            case '1':
                ?>
                <div id="page-title" class="page-title br-style<?php echo ''.$smof_data['page_title_layout']; ?> <?php if(isset($wp_experts_meta->_cms_page_title_overlay_color) && $wp_experts_meta->_cms_page_title_overlay_color) { echo ' overlay-primary-color ';}; ?>" style="background-image: url(<?php echo esc_url($smof_data['bg_image_page_title']['url']); ?>);">
                    <div class="container">
                        <div class="row">
                            <div id="page-title-text" class="col-xs-12 col-sm-12 col-md-6 col-lg-8 text-center-md">
                                <span class="sub-title">
                                    <?php
                                        wp_experts_page_sub_title();
                                    ?>
                                </span>
                                <h1><?php $wp_experts_base->wp_experts_get_page_title(); ?></h1>
                            </div>
                            <div id="breadcrumb-text" class="col-xs-12 col-sm-12 col-md-6 col-lg-4 text-center-md text-right">
                                <?php $wp_experts_base->wp_experts_get_breadcrumb(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                break;
            case '2':
                ?>
                <div id="page-title" class="page-title br-style<?php echo ''.$smof_data['page_title_layout']; ?> <?php if(isset($wp_experts_meta->_cms_page_title_overlay_color) && $wp_experts_meta->_cms_page_title_overlay_color) { echo ' overlay-primary-color ';}; ?>" style="background-image: url(<?php echo esc_url($smof_data['bg_image_page_title']['url']); ?>);">
                    <div class="container">
                        <div class="row">
                            <div id="page-title-text" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                                <span class="sub-title">
                                    <?php
                                        wp_experts_page_sub_title();
                                    ?>
                                </span>
                                <h1><?php $wp_experts_base->wp_experts_get_page_title(); ?></h1>
                                <span class="line-icon"></span>
                            </div>
                            <div id="breadcrumb-text" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center"><?php $wp_experts_base->wp_experts_get_breadcrumb(); ?></div>
                        </div>
                    </div>
                </div>
                <?php
                break;
            case '3':
                ?>
                <div id="page-title" class="page-title br-style<?php echo ''.$smof_data['page_title_layout']; ?> <?php if(isset($wp_experts_meta->_cms_page_title_overlay_color) && $wp_experts_meta->_cms_page_title_overlay_color) { echo ' overlay-primary-color ';}; ?>" style="background-image: url(<?php echo esc_url($smof_data['bg_image_page_title']['url']); ?>);">
                    <div class="container">
                        <div class="row">
                            <div id="page-title-text" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <span class="sub-title">
                                    <?php
                                        wp_experts_page_sub_title();
                                    ?>
                                </span>
                                <h1><?php $wp_experts_base->wp_experts_get_page_title(); ?></h1>
                                <span class="line-icon"></span>
                            </div>
                            <div id="breadcrumb-text" class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><?php $wp_experts_base->wp_experts_get_breadcrumb(); ?></div>
                        </div>
                    </div>
                </div>
                <?php
                break;
            case '4':
                ?>
                <div id="page-title" class="page-title br-style<?php echo ''.$smof_data['page_title_layout']; ?> <?php if(isset($wp_experts_meta->_cms_page_title_overlay_color) && $wp_experts_meta->_cms_page_title_overlay_color) { echo ' overlay-primary-color ';}; ?>" style="background-image: url(<?php echo esc_url($smof_data['bg_image_page_title']['url']); ?>);">
                    <div class="container">
                        <div class="row">
                            <div id="page-title-text" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                                <span class="sub-title">
                                    <?php
                                        wp_experts_page_sub_title();
                                    ?>
                                </span>
                                <h1><?php $wp_experts_base->wp_experts_get_page_title(); ?></h1>
                            </div>
                            <div id="breadcrumb-text" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center"><?php $wp_experts_base->wp_experts_get_breadcrumb(); ?></div>
                        </div>
                    </div>
                </div>
                <?php
                break;
            case '5':
                ?>
                <div id="page-title-wrapper" class="br-style<?php echo ''.$smof_data['page_title_layout']; ?> <?php if(isset($wp_experts_meta->_cms_page_title_overlay_color) && $wp_experts_meta->_cms_page_title_overlay_color) { echo ' overlay-primary-color ';}; ?>">
                    <div id="page-title" class="page-title" style="background-image: url(<?php echo esc_url($smof_data['bg_image_page_title']['url']); ?>);">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div id="page-title-text" class="col-xs-12 col-sm-12 col-md-6 col-lg-8 text-center-md">
                                <span class="sub-title">
                                    <?php
                                        wp_experts_page_sub_title();
                                    ?>
                                </span>
                                <h1><?php $wp_experts_base->wp_experts_get_page_title(); ?></h1>
                            </div>
                            <div id="breadcrumb-text" class="col-xs-12 col-sm-12 col-md-6 col-lg-4 text-center-md text-right">
                                <?php $wp_experts_base->wp_experts_get_breadcrumb(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                break;
            case '6':
                ?>
                <div id="page-title" class="page-title br-style<?php echo ''.$smof_data['page_title_layout']; ?> <?php if(isset($wp_experts_meta->_cms_page_title_overlay_color) && $wp_experts_meta->_cms_page_title_overlay_color) { echo ' overlay-primary-color ';}; ?>" style="background-image: url(<?php echo esc_url($smof_data['bg_image_page_title']['url']); ?>);">
                    <div class="container">
                        <div class="row">
                            <div id="page-title-text" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                                <span class="sub-title">
                                    <?php
                                        wp_experts_page_sub_title();
                                    ?>
                                </span>
                                <h1><?php $wp_experts_base->wp_experts_get_page_title(); ?></h1>
                                <span class="line-icon"></span>
                            </div>
                            <div id="breadcrumb-text" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center"><?php $wp_experts_base->wp_experts_get_breadcrumb(); ?></div>
                        </div>
                    </div>
                </div>
                <?php
                break;
            case '7':
                ?>
                <div id="page-title" class="page-title br-style<?php echo ''.$smof_data['page_title_layout']; ?> <?php if(isset($wp_experts_meta->_cms_page_title_overlay_color) && $wp_experts_meta->_cms_page_title_overlay_color) { echo ' overlay-primary-color ';}; ?>" style="background-image: url(<?php echo esc_url($smof_data['bg_image_page_title']['url']); ?>);">
                    <div class="container">
                        <div class="row">
                            <div id="breadcrumb-text" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center"><?php $wp_experts_base->wp_experts_get_breadcrumb(); ?></div>
                            <div id="page-title-text" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                                <span class="line-icon"></span>
                                <span class="sub-title">
                                    <?php
                                        wp_experts_page_sub_title();
                                    ?>
                                </span>
                                <h1><?php $wp_experts_base->wp_experts_get_page_title(); ?></h1>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                break;
            case '8':
                ?>
                <div id="page-title" class="page-title br-style<?php echo ''.$smof_data['page_title_layout']; ?> <?php if(isset($wp_experts_meta->_cms_page_title_overlay_color) && $wp_experts_meta->_cms_page_title_overlay_color) { echo ' overlay-primary-color ';}; ?>" style="background-image: url(<?php echo esc_url($smof_data['bg_image_page_title']['url']); ?>);">
                    <div class="container">
                        <div class="row">
                            <div id="breadcrumb-text" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center"><?php $wp_experts_base->wp_experts_get_breadcrumb(); ?></div>
                            <div id="page-title-text" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                                <span class="line-icon white"></span>
                                <span class="sub-title">
                                    <?php
                                        wp_experts_page_sub_title();
                                    ?>
                                </span>
                                <h1><?php $wp_experts_base->wp_experts_get_page_title(); ?></h1>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                break;
            case '9':
                ?>
                <div id="page-title" class="page-title br-style9">
                    <div class="container">
                        <div class="row">
                            <div id="page-title-text" class="col-xs-12 col-sm-12 col-md-6 col-lg-8 text-center-md">
                                <span class="sub-title">
                                    <?php
                                        wp_experts_page_sub_title();
                                    ?>
                                </span>
                                <h1><?php $wp_experts_base->wp_experts_get_page_title(); ?></h1>
                            </div>
                            <div id="breadcrumb-text" class="col-xs-12 col-sm-12 col-md-6 col-lg-4 text-center-md text-right">
                                <?php $wp_experts_base->wp_experts_get_breadcrumb(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                break;
        } ?>
        <?php
    }
}
/**
 * Get sub page title.
 *
 * @author Fox
 */
function wp_experts_page_sub_title() {
    global $wp_experts_meta, $post, $smof_data;

    if(!empty($wp_experts_meta->_cms_page_title_sub)){
        echo ''.esc_attr($wp_experts_meta->_cms_page_title_sub).'';
    } elseif (!empty($post->ID) && get_post_meta($post->ID, 'post_subtitle', true) && is_singular('post')){
        echo ''.esc_attr(get_post_meta($post->ID, 'post_subtitle', true)).'';
    }
}

/**
 * Get Header Layout.
 * 
 * @author Fox
 */
function wp_experts_header(){
    global $smof_data, $wp_experts_meta;
    /* header for page */
    if(isset($wp_experts_meta->_cms_header) && $wp_experts_meta->_cms_header){
        if(isset($wp_experts_meta->_cms_header_layout)){
            $smof_data['header_layout'] = $wp_experts_meta->_cms_header_layout;
        }
    }
    /* load template. */
    get_template_part('inc/header/header', $smof_data['header_layout']);
}
/**
 * Loading.
 * 
 * @author Fox
 */
function wp_experts_get_page_loading() {
    global $smof_data;
    if($smof_data['enable_page_loadding'] == '1'){
        echo '<div id="cms-loadding"><div class="cms-loader"></div></div>';
    }
}
/**
 * Get Footer Layout.
 * 
 * @author Fox
 */
function wp_experts_footer(){
    global $smof_data, $wp_experts_meta;
    /* header for page */
    if(isset($wp_experts_meta->_cms_footer) && $wp_experts_meta->_cms_footer){
        if(isset($wp_experts_meta->_cms_footer_layout)){
            $smof_data['footer_layout'] = $wp_experts_meta->_cms_footer_layout;
        }
    }
    /* load template. */
    get_template_part('inc/footer/footer', $smof_data['footer_layout']);
}

/**
 * Get menu location ID.
 * 
 * @param string $option
 * @return NULL
 */
function wp_experts_menu_location($option = '_cms_primary'){
    global $wp_experts_meta;
    /* get menu id from page setting */
    return (isset($wp_experts_meta->$option) && $wp_experts_meta->$option) ? $wp_experts_meta->$option : null ;
}

/**
 * Add page class
 * 
 * @author Fox
 * @since 1.0.0
 */
function wp_experts_page_class(){
    global $smof_data, $wp_experts_meta;
    
    $page_class = '';
    
    if(is_page() && isset($wp_experts_meta->_cms_page_body_layout) && $wp_experts_meta->_cms_page_body_layout) {
        $smof_data['body_layout'] = $wp_experts_meta->_cms_page_body_layout;
    }
    
    if($smof_data['body_layout']){
        $page_class = 'cs-boxed';
    } else {
        $page_class = 'cs-wide';
    }
    
    if (isset($wp_experts_meta->_cms_show_sidebar_page_left) && $wp_experts_meta->_cms_show_sidebar_page_left) { 
        $page_class .= ' sidebar-left-active'; 
    }
    
    echo apply_filters('wp_experts_page_class', $page_class);
}

/**
 * Add main class
 * 
 * @author Fox
 * @since 1.0.0
 */
function wp_experts_main_class(){
    global $wp_experts_meta;
    
    $main_class = '';
    /* chect content full width */
    if(isset($wp_experts_meta->_cms_full_width) && $wp_experts_meta->_cms_full_width){
        /* full width */
        $main_class = "no-container";
    } else {
        /* boxed */
        $main_class = "container";
    }
    
    echo apply_filters('wp_experts_main_class', $main_class);
}

/**
 * Archive detail
 * 
 * @author Fox
 * @since 1.0.0
 */
function wp_experts_archive_meta_icon(){
    $post_icon_meta = wp_experts_post_meta_data();
    ?>
    <?php if(!empty($post_icon_meta->_cms_post_icon)) { ?>
        <div class="blog-icon"><i class="<?php echo esc_attr($post_icon_meta->_cms_post_icon); ?>"></i></div>
    <?php }
}
function wp_experts_archive_detail(){
    ?>
    <ul>
        <li class="detail-date"><?php echo get_the_date(); ?></li>
        <?php if(has_category()): ?>
        <li class="detail-terms"><?php the_terms( get_the_ID(), 'category', ''.esc_html__('', 'wp-experts'), ' , ' ); ?></li>
        <?php endif; ?>
        <li class="comment"><a href="<?php the_permalink(); ?>"><?php esc_html_e('Comments : ','wp-experts'); ?><?php echo comments_number(' 0','1','%'); ?></a></li>
    </ul>
    <?php
}

/**
 * Archive readmore
 * 
 * @author Fox
 * @since 1.0.0
 */
function wp_experts_archive_readmore(){
    echo '<a class="" href="'.get_the_permalink().'" title="'.get_the_title().'" ><i class="fa fa-long-arrow-right"></i>'.esc_html__('Read More', "wp-experts").'</a>';
}

/**
 * Media Audio.
 * 
 * @param string $before
 * @param string $after
 */
function wp_experts_archive_audio() {
    global $wp_experts_base;
    /* get shortcode audio. */
    $shortcode = $wp_experts_base->wp_experts_get_shortcode_from_content('audio', get_the_content());
    
    if($shortcode != ''){
        echo do_shortcode($shortcode);
        
        return true;
        
    } else {
        if(has_post_thumbnail()){
            the_post_thumbnail();
        }
        
        return false;
    }
    
}

/**
 * Media Video.
 *
 * @param string $before
 * @param string $after
 */
function wp_experts_archive_video() {
    
    global $wp_embed, $wp_experts_base;
    /* Get Local Video */
    $local_video = $wp_experts_base->wp_experts_get_shortcode_from_content('wpvideo', get_the_content());
    
    /* Get Youtobe or Vimeo */
    $remote_video = $wp_experts_base->wp_experts_get_shortcode_from_content('embed', get_the_content());
    
    if($local_video){
        /* view local. */
        echo do_shortcode($local_video);
        
        return true;
        
    } elseif ($remote_video) {
        /* view youtobe or vimeo. */
        echo ''.$wp_embed->run_shortcode($remote_video);
        
        return true;
        
    } elseif (has_post_thumbnail()) {
        /* view thumbnail. */
        the_post_thumbnail();
    } else {
        return false;
    }
    
}

/**
 * Gallerry Images
 * 
 * @author Fox
 * @since 1.0.0
 */
function wp_experts_archive_gallery(){
    global $wp_experts_base;
    /* get shortcode gallery. */
    $shortcode = $wp_experts_base->wp_experts_get_shortcode_from_content('gallery', get_the_content());
    
    if($shortcode != ''){
        preg_match('/\[gallery.*ids=.(.*).\]/', $shortcode, $ids);
        
        if(!empty($ids)){
        
            $array_id = explode(",", $ids[1]);
            ?>
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <?php $i = 0; ?>
                <?php foreach ($array_id as $image_id): ?>
                    <?php
                    $attachment_image = wp_get_attachment_image_src($image_id, 'full', false);
                    if($attachment_image[0] != ''):?>
                        <div class="item <?php if( $i == 0 ){ echo 'active'; } ?>">
                            <img style="width:100%;" data-src="holder.js" src="<?php echo esc_url($attachment_image[0]);?>" alt="" />
                        </div>
                    <?php $i++; endif; ?>
                <?php endforeach; ?>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="fa fa-angle-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="fa fa-angle-right"></span>
                </a>
            </div>
            <?php
            
            return true;
        
        } else {
            return false;
        }
    } else {
        if(has_post_thumbnail()){
            the_post_thumbnail();
        }
    }
}

/**
 * Quote Text.
 * 
 * @author Fox
 * @since 1.0.0
 */
function wp_experts_archive_quote() {
    /* get text. */
    preg_match('/\<blockquote\>(.*)\<\/blockquote\>/', get_the_content(), $blockquote);
    
    if(!empty($blockquote[0])){
        echo ''.$blockquote[0].'';
        return true;
    } else {
        if(has_post_thumbnail()){
            the_post_thumbnail();
        }
        return false;
    }
}

/**
 * List socials share for post.
 * 
 * @since 1.0.0
 */
function wp_experts_get_socials_share(){
    ?>
    <ul>
    <li><span><?php esc_html_e('Share This Article : ', "wp-experts"); ?></span></li>
    <li><a title="Facebook" data-placement="top" data-rel="tooltip" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>"><span class="share-box"><i class="fa fa-facebook"></i></span></a></li>
    <li><a title="Twitter" data-placement="top" data-rel="tooltip" target="_blank" href="https://twitter.com/home?status=<?php esc_html_e('Check out this article', "wp-experts");?>:%20<?php the_title();?>%20-%20<?php the_permalink();?>"><span class="share-box"><i class="fa fa-twitter"></i></span></a></li>
    <li><a title="Google Plus" data-placement="top" data-rel="tooltip" target="_blank" href="https://plus.google.com/share?url=<?php the_permalink();?>"><span class="share-box"><i class="fa fa-google-plus"></i></span></a></li>
    <li class="social-pinterest"><a target="_blank" href="https://pinterest.com/pin/create/button/?url=<?php the_permalink();?>"><span class="share-box"><i class="fa fa-pinterest"></i></span></a></li>
    </ul>
    <?php
}

/* 
/**
 * Related Gallery
 * 
 * @since 1.0.0
 */
function wp_experts_related_gallery() {
    global $post;

    $posttags = get_the_terms($post->ID, 'galeries-category');

    if(empty($posttags)) return ;

    $tags = array();

    foreach ($posttags as $tag) {

        $tags[] = $tag->term_id;
    }

    $query = new WP_Query(array('posts_per_page'=> 10, 'post_type' => 'galeries', 'post_status'=> 'publish', 'tax_query'=>array(array('taxonomy'=>'galeries-category', 'field'=>'id', 'terms'=>$tags))));

    if($query->have_posts()){
        ?> <div class="layout-gallery gallery-full cms-related-gallery clearfix"> <?php
        while ($query->have_posts()): $query->the_post();
        ?>
        <article>
            <div class="cms-grid-item">
                <div class="cms-grid-item-inner cms-gallery-item">
                    <div class="cms-gallery-image">
                        <?php 
                            if(has_post_thumbnail() && !post_password_required() && !is_attachment() &&  wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full', false)):
                                $class = ' has-thumbnail';
                                $thumbnail_url = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full', false);
                                $thumbnail = get_the_post_thumbnail(get_the_ID(),'full');
                            else:
                                $class = ' no-image';
                                $thumbnail_url[0] = CMS_IMAGES.'no-image.jpg';
                                $thumbnail = '<img src="'.esc_url(CMS_IMAGES).'no-image.jpg" alt="'.get_the_title().'" />';
                            endif;
                            echo '<div class="cms-grid-media  has-thumbnail">'.$thumbnail.'</div>';
                        ?>
                        <div class="cms-gallery-image-links">
                            <a href="<?php echo esc_url($thumbnail_url[0]); ?>" class="cms-prettyphoto p-view"><i class="rt-icon-zoom-outline"></i></a>
                            <a class="p-link" title="<?php the_title(); ?>" href="<?php the_permalink() ?>" rel=""><i class="rt-icon-location-outline"></i></a>
                        </div>
                    </div>
                    <div class="cms-gallery-description-layout2">
                        <h3><a href="<?php the_permalink() ?>" ><?php the_title();?> </a></h3>
                    </div>
                </div>
            </div>
        </article>
        <?php
        endwhile;
        ?> </div> <?php
    }
    
    wp_reset_postdata();
}

/* Related Post */
function wp_experts_related_post() {
    global $post;

    $posttags = get_the_category($post->ID);
    
    if(empty($posttags)) return ;
    
    $tags = array();
    
    foreach ($posttags as $tag) {
        
        $tags[] = $tag->term_id;
    }
    
    $query = new WP_Query(array('posts_per_page'=> 3, 'post_type' => 'post', 'post_status'=> 'publish', 'category__in'=>$tags));
    
    if($query->have_posts()){
        ?> 
        <div class="cms-related-post clearfix"> 
            <h3 class="cms-title"><?php esc_html_e('Related Posts',"wp-experts"); ?></h3>
           <div class="cms-related-post-inner row">
        <?php
        while ($query->have_posts()): $query->the_post();
        ?>
            <div class="item <?php echo has_post_thumbnail() ? ' has-feature-img' : ' no-feature-img' ; ?> col-xs-12 col-sm-6 col-md-4 col-lg-4">
                <div class="item-inner">
                    <a href="<?php echo get_the_permalink(); ?>"><?php the_post_thumbnail('wp_experts_images-sm'); ?></a>
                    <div class="detail-date"><?php echo get_the_date(); ?></div>
                    <h3 class="title"><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h3>
                </div>
            </div>
        <?php
        endwhile;
        ?> </div></div> <?php
    }
    
    wp_reset_postdata();
}

/* ==========================================================================
   Start Function Theme Check
========================================================================== */
function wp_experts_page_sidebar(){
    global $wp_experts_meta;

    return isset($wp_experts_meta->_cms_show_sidebar) ? $wp_experts_meta->_cms_show_sidebar : 0 ;
}

function wp_experts_page_comment() {

    global $smof_data;

    if($smof_data['page_comment'])
        comments_template( '', true );
}

function wp_experts_header_class() {

    global $smof_data, $wp_experts_meta;
    $header_layout = '';
    if(isset($wp_experts_meta->_cms_header) && $wp_experts_meta->_cms_header) {
        if(is_page() && isset($wp_experts_meta->_cms_header_layout) && $wp_experts_meta->_cms_header_layout) {
            $smof_data['header_layout'] = $wp_experts_meta->_cms_header_layout;
        }
    }
    $header_layout = $smof_data['header_layout'];
    return $header_layout;
}

function wp_experts_body_class() {

    global $smof_data, $wp_experts_meta;
    $body_custom_class = (isset($wp_experts_meta->_cms_body_custom_class)) ? $wp_experts_meta->_cms_body_custom_class : '';
    return $body_custom_class;
}

function wp_experts_single_post_full_width() {

    global $smof_data, $post, $wp_experts_meta;
    if(isset($wp_experts_meta->_cms_post_full_width) && $wp_experts_meta->_cms_post_full_width != '') {
        $smof_data['post_full_width'] = $wp_experts_meta->_cms_post_full_width;
    }
    if($smof_data['post_full_width'] == 0) { echo 'post-sidebar'; }
}

function wp_experts_single_post_sidebar_left() {

    global $smof_data, $post, $wp_experts_meta;

    if(isset($wp_experts_meta->_cms_post_sidebar_left) && $wp_experts_meta->_cms_post_sidebar_left != '') {
        $smof_data['post_sidebar_left'] = $wp_experts_meta->_cms_post_sidebar_left;
    } ?>
        <div class="single-post-inner <?php if($smof_data['post_sidebar_left']) { echo ' sidebar-left-active'; } ?> clearfix">
            <div id="primary" class="<?php echo esc_attr($smof_data['post_full_width'] ? 'col-xs-12 col-sm-12 col-md-12 col-lg-12 full-width' : 'col-xs-12 col-sm-8 col-md-8 col-lg-8 sidebar-active') ; ?>">
                <div id="content" role="main">
                    <?php get_template_part( 'single-templates/single/content', get_post_format() ); ?>
                    <?php wp_experts_related_post(); ?>
                    <?php comments_template( '', true ); ?>

                </div><!-- #content -->
            </div><!-- #primary -->
            <?php if(!$smof_data['post_full_width']) : ?>
                <div id="sidebar" class="col-xs-12 col-sm-4 col-md-4 col-lg-4 <?php if($smof_data['post_full_width'] == 1) { echo 'hidden-sidebar'; } ?>">
                    <?php get_sidebar(); ?>
                </div><!-- #sidebar -->
            <?php endif; ?>
        </div>
    <?php
}

function wp_experts_single_project_layout() {

    global $smof_data, $wp_experts_meta;
    $project_layout = '';

    if(is_singular('projects') && isset($wp_experts_meta->_cms_project_layout_show) && $wp_experts_meta->_cms_project_layout_show){
        if(isset($wp_experts_meta->_cms_project_layout)){
            $smof_data['project_layout'] = $wp_experts_meta->_cms_project_layout;
        }
    }

    $project_layout = $smof_data['project_layout'];
    return $project_layout;
}

function wp_experts_cms_top_social() {

    global $smof_data;

    $cms_top_social = $smof_data['cms_top_social']['enabled'];
    ?>
    <ul class="cms-top-social">
        <?php
            if ($cms_top_social): foreach ($cms_top_social as $key=>$value) {
                switch($key) {
             
                    case 'facebook': echo '<li><a href="'.esc_url($smof_data['social_facebook_url']).'"><i class="fa fa-facebook"></i></a></li>';
                    break;
             
                    case 'twitter': echo '<li><a href="'.esc_url($smof_data['social_twitter_url']).'"><i class="fa fa-twitter"></i></a></li>';
                    break;
             
                    case 'linkedin': echo '<li><a href="'.esc_url($smof_data['social_inkedin_url']).'"><i class="fa fa-linkedin"></i></a></li>';
                    break;
             
                    case 'rss': echo '<li><a href="'.esc_url($smof_data['social_rss_url']).'"><i class="fa fa-rss"></i></a></li>';    
                    break;  
                    
                    case 'instagram': echo '<li><a href="'.esc_url($smof_data['social_instagram_url']).'"><i class="fa fa-instagram"></i></a></li>';    
                    break;

                    case 'google': echo '<li><a href="'.esc_url($smof_data['social_google_url']).'"><i class="fa fa-google-plus"></i></a></li>';    
                    break;

                    case 'skype': echo '<li><a href="'.esc_url($smof_data['social_skype_url']).'"><i class="fa fa-skype"></i></a></li>';    
                    break;

                    case 'pinterest': echo '<li><a href="'.esc_url($smof_data['social_pinterest_url']).'"><i class="fa fa-pinterest"></i></a></li>';    
                    break;

                    case 'vimeo': echo '<li><a href="'.esc_url($smof_data['social_vimeo_url']).'"><i class="fa fa-vimeo"></i></a></li>';    
                    break;

                    case 'youtube': echo '<li><a href="'.esc_url($smof_data['social_youtube_url']).'"><i class="fa fa-youtube"></i></a></li>';    
                    break;

                    case 'yelp': echo '<li><a href="'.esc_url($smof_data['social_yelp_url']).'"><i class="fa fa-yelp"></i></a></li>';    
                    break;

                    case 'tumblr': echo '<li><a href="'.esc_url($smof_data['social_tumblr_url']).'"><i class="fa fa-tumblr"></i></a></li>';    
                    break;

                    case 'viadeo': echo '<li><a href="'.esc_url($smof_data['social_viadeo_url']).'"><i class="fa fa-viadeo"></i></a></li>';    
                    break;

                }
            }
            endif;
        ?>
    </ul>
    <?php 
}

function wp_experts_cms_footer_social() {

    global $smof_data;

    $cms_footer_social = $smof_data['cms_footer_social']['enabled'];
    ?>
    <ul class="cms-footer-social">
        <?php
            if ($cms_footer_social): foreach ($cms_footer_social as $key=>$value) {
                switch($key) {
             
                    case 'facebook': echo '<li><a href="'.esc_url($smof_data['social_facebook_url']).'"><i class="fa fa-facebook"></i></a></li>';
                    break;
             
                    case 'twitter': echo '<li><a href="'.esc_url($smof_data['social_twitter_url']).'"><i class="fa fa-twitter"></i></a></li>';
                    break;
             
                    case 'linkedin': echo '<li><a href="'.esc_url($smof_data['social_inkedin_url']).'"><i class="fa fa-linkedin"></i></a></li>';
                    break;
             
                    case 'rss': echo '<li><a href="'.esc_url($smof_data['social_rss_url']).'"><i class="fa fa-rss"></i></a></li>';    
                    break;  
                    
                    case 'instagram': echo '<li><a href="'.esc_url($smof_data['social_instagram_url']).'"><i class="fa fa-instagram"></i></a></li>';    
                    break;

                    case 'google': echo '<li><a href="'.esc_url($smof_data['social_google_url']).'"><i class="fa fa-google-plus"></i></a></li>';    
                    break;

                    case 'skype': echo '<li><a href="'.esc_url($smof_data['social_skype_url']).'"><i class="fa fa-skype"></i></a></li>';    
                    break;

                    case 'pinterest': echo '<li><a href="'.esc_url($smof_data['social_pinterest_url']).'"><i class="fa fa-pinterest"></i></a></li>';    
                    break;

                    case 'vimeo': echo '<li><a href="'.esc_url($smof_data['social_vimeo_url']).'"><i class="fa fa-vimeo"></i></a></li>';    
                    break;

                    case 'youtube': echo '<li><a href="'.esc_url($smof_data['social_youtube_url']).'"><i class="fa fa-youtube"></i></a></li>';    
                    break;

                    case 'yelp': echo '<li><a href="'.esc_url($smof_data['social_yelp_url']).'"><i class="fa fa-yelp"></i></a></li>';    
                    break;

                    case 'tumblr': echo '<li><a href="'.esc_url($smof_data['social_tumblr_url']).'"><i class="fa fa-tumblr"></i></a></li>';    
                    break;

                    case 'viadeo': echo '<li><a href="'.esc_url($smof_data['social_viadeo_url']).'"><i class="fa fa-viadeo"></i></a></li>';    
                    break;

                }
            }
            endif;
        ?>
    </ul>
    <?php 
}

function wp_experts_cms_author_social() {

    global $smof_data;

    $cms_author_social = $smof_data['cms_author_social']['enabled'];
    ?>
    <ul class="cms-author-social">
        <?php
            if ($cms_author_social): foreach ($cms_author_social as $key=>$value) {
                switch($key) {
             
                    case 'facebook': echo '<li><a href="'.esc_url($smof_data['social_facebook_url']).'"><i class="fa fa-facebook"></i></a></li>';
                    break;
             
                    case 'twitter': echo '<li><a href="'.esc_url($smof_data['social_twitter_url']).'"><i class="fa fa-twitter"></i></a></li>';
                    break;
             
                    case 'linkedin': echo '<li><a href="'.esc_url($smof_data['social_inkedin_url']).'"><i class="fa fa-linkedin"></i></a></li>';
                    break;
             
                    case 'rss': echo '<li><a href="'.esc_url($smof_data['social_rss_url']).'"><i class="fa fa-rss"></i></a></li>';    
                    break;  
                    
                    case 'instagram': echo '<li><a href="'.esc_url($smof_data['social_instagram_url']).'"><i class="fa fa-instagram"></i></a></li>';    
                    break;

                    case 'google': echo '<li><a href="'.esc_url($smof_data['social_google_url']).'"><i class="fa fa-google-plus"></i></a></li>';    
                    break;

                    case 'skype': echo '<li><a href="'.esc_url($smof_data['social_skype_url']).'"><i class="fa fa-skype"></i></a></li>';    
                    break;

                    case 'pinterest': echo '<li><a href="'.esc_url($smof_data['social_pinterest_url']).'"><i class="fa fa-pinterest"></i></a></li>';    
                    break;

                    case 'vimeo': echo '<li><a href="'.esc_url($smof_data['social_vimeo_url']).'"><i class="fa fa-vimeo"></i></a></li>';    
                    break;

                    case 'youtube': echo '<li><a href="'.esc_url($smof_data['social_youtube_url']).'"><i class="fa fa-youtube"></i></a></li>';    
                    break;

                    case 'yelp': echo '<li><a href="'.esc_url($smof_data['social_yelp_url']).'"><i class="fa fa-yelp"></i></a></li>';    
                    break;

                    case 'tumblr': echo '<li><a href="'.esc_url($smof_data['social_tumblr_url']).'"><i class="fa fa-tumblr"></i></a></li>';    
                    break;

                    case 'viadeo': echo '<li><a href="'.esc_url($smof_data['social_viadeo_url']).'"><i class="fa fa-viadeo"></i></a></li>';    
                    break;

                }
            }
            endif;
        ?>
    </ul>
    <?php 
}

/* 404 Page */
function wp_experts_cms_404_page() {
    global $smof_data;

    $page_404_note = '';
    if(!empty($smof_data['cms-404-notification']) && $smof_data['cms-404-notification']) {
        $page_404_note = $smof_data['cms-404-notification'];
    }
    
    return $page_404_note;
}

/*  Blog Sidebar */
function wp_experts_blog_sidebar() {
    global $smof_data, $wp_query, $post, $wp_experts_meta, $paged;
    if (isset($wp_experts_meta->_cms_blog_sidebar) && $wp_experts_meta->_cms_blog_sidebar) {
        $smof_data['blog_sidebar'] = $wp_experts_meta->_cms_blog_sidebar;
        if(isset($wp_experts_meta->_cms_blog_sidebar_position)){
            $smof_data['blog_sidebar_position'] = $wp_experts_meta->_cms_blog_sidebar_position;
        }
    }
    if ($smof_data['blog_sidebar_position'] == 'sidebar-left') { echo 'sidebar-left-active'; }
}
function wp_experts_blog_sidebar_left() {
    global $smof_data, $wp_query, $post, $wp_experts_meta, $paged;
    if (isset($wp_experts_meta->_cms_blog_sidebar) && $wp_experts_meta->_cms_blog_sidebar) {
        $smof_data['blog_sidebar'] = $wp_experts_meta->_cms_blog_sidebar;
        if(isset($wp_experts_meta->_cms_blog_sidebar_position)){
            $smof_data['blog_sidebar_position'] = $wp_experts_meta->_cms_blog_sidebar_position;
        }
    }
    ?>
    <section id="primary" class="<?php if($smof_data['blog_sidebar'] == '1') { echo 'col-xs-12 col-sm-8 col-md-8 col-lg-8 sidebar-active'; }else  { echo 'col-xs-12 col-sm-12 col-md-12 col-lg-12 page-full-width'; } ?>">
        <div id="content" role="main">
            
            <?php query_posts('post_type=post&showposts='.get_option('posts_per_page').'&paged='.$paged); ?>
            
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post();
                    /* Include the post format-specific template for the content. If you want to
                     * this in a child theme then include a file called called content-___.php
                     * (where ___ is the post format) and that will be used instead.
                     */
                     get_template_part( 'single-templates/content/content', get_post_format() );
                endwhile; // end of the loop.?>
                
                <?php wp_experts_paging_nav(); ?>
                
            <?php else : ?>
            
                <?php get_template_part( 'single-templates/content', 'none' ); ?>
            <?php endif; ?>
        
        </div><!-- #content -->
    </section><!-- #primary -->
    <?php if($smof_data['blog_sidebar'] == '1') { ?>
        <div id="sidebar" class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <?php get_sidebar(); ?>
        </div>
    <?php }
}

/*  Singe Post Service */
function wp_experts_cta_service_post() {
    global $smof_data, $wp_experts_meta;
    if (empty($wp_experts_meta->_cms_service_hide_cta)) {
        if (isset($smof_data['show_cta_service_post']) && $smof_data['show_cta_service_post']) { ?>
            <div class="cms-cta-wrapper cms-style-default style1 clearfix cta-right" id="cms-cta">
                <div class="container">
                    <div class="row">
                        <div class="cms-cta-inner">
                            <div class="cms-cta-content col-xs-12 col-sm-12 col-md-9 col-lg-9 text-center-md">
                                <div style="color: #ffffff;" class="title"><?php echo esc_attr($smof_data['cta_title']); ?></div>
                                <div style="color: #ffffff;" class="desc"><?php echo esc_attr($smof_data['cta_desc']); ?></div>
                            </div>

                            <div class="cms-cta-button col-xs-12 col-sm-12 col-md-3 col-lg-3 text-right text-center-md">
                                <a class="btn btn-default-white-alt size-default" href="<?php echo esc_url($smof_data['cta_link_button']); ?>">
                                    <?php echo esc_attr($smof_data['cta_text_button']); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php }
    }              
}

/* Single Service Style */
function wp_experts_single_service_layout() {

    global $smof_data, $wp_experts_meta;
    $service_layout = '';

    if(is_singular('services') && isset($wp_experts_meta->_cms_service_layout_show) && $wp_experts_meta->_cms_service_layout_show){
        if(isset($wp_experts_meta->_cms_service_layout)){
            $smof_data['service_layout'] = $wp_experts_meta->_cms_service_layout;
        }
    }

    $service_layout = $smof_data['service_layout'];
    return $service_layout;
}

/* Login + Register */
function wp_experts_login_register() {
    if(function_exists('up_get_template_part')): ?>
        <div class="cms-login-wrap cms-popup">
            <div class="cms-form-login">
                <div class="cms-modal-dialog dialog-popup" role="document">
                    <div class="cms-modal-content">
                        <div class="cms-modal-header text-center">
                            <div class="cms-modal-header-innder">
                                <i class="icon-OpenedLock"></i>
                                <h3><?php esc_html_e('Login Area', 'wp-experts'); ?></h3>
                                <span><?php esc_html_e('Welcome', 'wp-experts'); ?></span>
                            </div>
                            
                        </div>
                        <div class="cms-modal-body modal-body">
                            <?php  echo do_shortcode('[user-press layout="" form_type="login" is_logged="profile"]'); ?>
                        </div>
                    </div>
                    <div class="more-sign-up white">
                        <span class="form-sign-up"><?php esc_html_e('Dont have an account?','wp-experts');?></span>
                        <a href="javascript:void(0)" class="switch_to_sign_up"> <?php esc_html_e('Sign Up','wp-experts');?></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="cms-register-wrap cms-popup">
            <div class="cms-form-register">
                <div class="cms-modal-dialog dialog-popup" role="document">
                    <div class="cms-modal-content">
                        <div class="cms-modal-header text-center">
                            <div class="cms-modal-header-innder">
                                <i class="icon-ClosedLock"></i>
                                <h3><?php esc_html_e('Register New Account', 'wp-experts'); ?></h3>
                                <span><?php esc_html_e('Hello', 'wp-experts'); ?></span>
                            </div>
                        </div>
                        <div class="cms-modal-body modal-body">
                            <?php up_get_template_part('default/form', 'register'); ?>
                        </div>
                    </div>
                    <div class="more-sign-in white">
                        <span class="form-sign-in"><?php esc_html_e('have an account,','wp-experts');?></span>
                        <a href="javascript:void(0)" class="switch_to_login"> <?php esc_html_e('Sign In Here','wp-experts');?></a>
                    </div>
                </div>
            </div>
        </div>
    <?php endif;
}

/**
 * Body border
 */

function wp_experts_body_border_class() {
    global $smof_data, $wp_experts_meta;

    $border_body_class = '';
    if(is_page() && isset($wp_experts_meta->_cms_page_body_border) && $wp_experts_meta->_cms_page_body_border){
        $smof_data['body_border'] = $wp_experts_meta->_cms_page_body_border;
    }
    if ($smof_data['body_border']) { 
        $border_body_class = ' body-border-wrapper '; 
    }

    return $border_body_class;
}

function wp_experts_body_border() {
    global $smof_data, $wp_experts_meta, $wp_yellow_hats_base;
    
    if(is_page() && isset($wp_experts_meta->_cms_page_body_border) && $wp_experts_meta->_cms_page_body_border){
        if(isset($wp_experts_meta->_cms_page_body_border_width)){
            $smof_data['body_border_width']['width'] = $wp_experts_meta->_cms_page_body_border_width;
        }
        if (isset($wp_experts_meta->_cms_page_body_border_color)) {
            $smof_data['body_border_color'] = $wp_experts_meta->_cms_page_body_border_color;
        }
    }

    if($smof_data['body_border']) {
        if(!empty($smof_data['body_border_width']['width'])) { ?>
            <span class="body-border body-border-right" style="width: <?php echo esc_attr($smof_data['body_border_width']['width']); ?>; background-color: <?php echo esc_attr($smof_data['body_border_color']); ?>;"></span>
            <span class="body-border body-border-left" style="width: <?php echo esc_attr($smof_data['body_border_width']['width']); ?>; background-color: <?php echo esc_attr($smof_data['body_border_color']); ?>;"></span>
        <?php }
    }
}