<?php 
    $nav_custom = isset($atts['nav_custom']) ? $atts['nav_custom'] : 'nav-custom-df'; 
    $title_color = isset($atts['title_color']) ? $atts['title_color'] : ''; 
    $position_color = isset($atts['position_color']) ? $atts['position_color'] : ''; 
?>
<div data-padding='0' class="cms-carousel cms-testimonial cms-testimonial-layout1 <?php echo esc_attr($nav_custom); ?> <?php echo esc_attr($atts['template']);?>" id="<?php echo esc_attr($atts['html_id']);?>">
    <?php
    $posts = $atts['posts'];
    while($posts->have_posts()){
        $posts->the_post();
        $testimonial_meta = wp_experts_post_meta_data();
        ?>
        <div class="cms-carousel-item cms-testimonial-item">
            <div class="cms-testimonial-wrapper clearfix">
                <span class="icon-quote-sm">
                    <i class="fa fa-quote-left"></i>
                </span>
                <span class="icon-quote-lg">
                    <i class="fa fa-quote-left"></i>
                </span>
                <div class="cms-carousel-body cms-testimonial-body">
                     <div class="content"><?php the_content(); ?></div>
                </div>
            </div>
            <div class="cms-testimonial-footer">
                <?php 
                    if(has_post_thumbnail() && !post_password_required() && !is_attachment() &&  wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full', false)):
                        $class = ' has-thumbnail';
                        $thumbnail = get_the_post_thumbnail(get_the_ID(),'medium');
                    else:
                        $class = ' no-image';
                        $thumbnail = '<img src="'.esc_url(get_template_directory_uri(). '/assets/images/no-image.jpg').'" alt="'.get_the_title().'" />';
                    endif;
                    echo ''.$thumbnail.'';
                ?>
                <div class="cms-testimonial-position">
                    <h3 class="author" style="color: <?php echo esc_attr($title_color); ?>"><?php the_title();?></h3>
                    <span class="position" style="color: <?php echo esc_attr($position_color); ?>"><?php echo esc_attr($testimonial_meta->_cms_testimonial_position); ?></span>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>