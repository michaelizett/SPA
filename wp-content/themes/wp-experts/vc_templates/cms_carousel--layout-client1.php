<?php
    $navigation_horizontal_center = isset($atts['navigation_horizontal_center']) ? $atts['navigation_horizontal_center'] : '';
    $navigation_align = isset($atts['navigation_align']) ? $atts['navigation_align'] : 'nav-default';
?>
<div data-padding='0' class="cms-carousel cms-carousel-client cms-carousel-client-layout1 <?php echo esc_attr($navigation_align); ?> <?php if($navigation_horizontal_center == 'yes') { echo 'navigation-horizontal-center'; } ?> <?php echo esc_attr($atts['template']);?>" id="<?php echo esc_attr($atts['html_id']);?>">
    <?php
    $posts = $atts['posts'];
    $counter = 0;
    $rows = 2;
    $client_meta = wp_experts_post_meta_data();
    while ($posts->have_posts()) {

        $posts->the_post();

        $counter++;

        if($rows == 1){
            echo '<div class="cs-carousel-item-wrap">';
        }else{
            if($counter % $rows == 1){
                echo '<div class="cs-carousel-item-wrap">';
            }
        }
        ?>
        <div class="cms-carousel-item">
            <a href="<?php echo esc_url($client_meta->_cms_client_url); ?>" title="<?php the_title(); ?>">
                <?php 
                    if(has_post_thumbnail() && !post_password_required() && !is_attachment() &&  wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full', false)):
                        $class = ' has-thumbnail';
                        $thumbnail = get_the_post_thumbnail(get_the_ID(),'medium');
                    else:
                        $class = ' no-image';
                        $thumbnail = '<img src="'.esc_url(get_template_directory_uri(). '/assets/images/no-image.jpg').'" alt="'.get_the_title().'" />';
                    endif;
                    echo '<span class="cms-carousel-media '.esc_attr($class).'">'.$thumbnail.'</span>';
                ?>
            </a>
        </div>
        <?php
        if($rows == 1){
            echo '</div>';
        }else{
            if($counter % $rows == 0){
                echo '</div>';
            }
        }
        ?>
    <?php
    }
    ?>
</div>