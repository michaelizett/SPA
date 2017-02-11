<div data-padding='0' class="cms-carousel layout-gallery <?php echo esc_attr($atts['template']);?>" id="<?php echo esc_attr($atts['html_id']);?>">
    <?php
        $posts = $atts['posts'];
        $size = 'full';
        while($posts->have_posts()){
            $posts->the_post();
            $groups = array();
            $groups[] = '"all"';
            ?>
            <div class="cms-gallery-item"> 
                <div class="cms-grid-item-inner">
                    <div class="cms-gallery-image">
                        <?php 
                            if(has_post_thumbnail() && !post_password_required() && !is_attachment() &&  wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), $size, false)):
                                $class = ' has-thumbnail';
                                $thumbnail_url = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), $size, false);
                                $thumbnail = get_the_post_thumbnail(get_the_ID(),'full');
                            else:
                                $class = ' no-image';
                                $thumbnail_url[0] = get_template_directory_uri(). '/assets/images/no-image.jpg';
                                $thumbnail = '<img src="'.esc_url(get_template_directory_uri(). '/assets/images/no-image-800x690.jpg').'" alt="'.get_the_title().'" />';
                            endif;
                            echo '<div class="cms-grid-media '.esc_attr($class).'">'.$thumbnail.'</div>';
                        ?>
                    </div>
                    <div class="cms-gallery-content">
                        <div class="cms-gallery-content-inner">
                            <div class="cms-gallery-image-zoom">
                                <a href="<?php echo esc_url($thumbnail_url[0]); ?>" class="cms-prettyphoto p-view"><span class="ion-ios-plus-empty"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
    ?>
</div>