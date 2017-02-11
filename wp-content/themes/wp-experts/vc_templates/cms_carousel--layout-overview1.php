<div data-padding='0' class="cms-carousel cms-carousel-overview-layout1 <?php echo esc_attr($atts['template']);?>" id="<?php echo esc_attr($atts['html_id']);?>">
    <?php
    $posts = $atts['posts'];
    while($posts->have_posts()){
        $posts->the_post();
        $size = 'full';
        $overview_meta = wp_experts_post_meta_data();
        ?>
        <div class="cms-carousel-item <?php echo esc_attr($atts['item_class']);?>">
                <?php 
                    if(has_post_thumbnail() && !post_password_required() && !is_attachment() &&  wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), $size, false)):
                        $class = ' has-feature-img';
                        $thumbnail_url = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), $size, false);
                        $thumbnail = get_the_post_thumbnail(get_the_ID(),'full');
                    else:
                        $class = ' no-feature-img';
                        $thumbnail_url[0] = get_template_directory_uri(). '/assets/images/no-image.jpg';
                        $thumbnail = '<img src="'.get_template_directory_uri(). '/assets/images/no-image.jpg" alt="'.get_the_title().'" />';
                    endif;
                ?>
                <div class="cms-overview-inner">
                    <div class="cms-overview-image <?php echo esc_attr($class); ?>">
                        <?php echo ''.$thumbnail.''; ?>
                    </div>
                    <div class="cms-overview-content">
                        <h3 class="cms-overview-title">
                            <?php the_title(); ?>
                        </h3>
                        <div class="cms-overview-description">
                            <?php the_content(); ?>
                        </div>
                        <?php if(!empty($overview_meta->_cms_overview_buttun_url) && $overview_meta->_cms_overview_buttun_url) { ?>
                            <div class="cms-overview-readmore">
                                <a class="btn btn-secondary size-default" href="<?php echo esc_url($overview_meta->_cms_overview_buttun_url); ?>">
                                    <?php if(!empty($overview_meta->_cms_overview_buttun_text) && $overview_meta->_cms_overview_buttun_text) {
                                        echo esc_attr($overview_meta->_cms_overview_buttun_text);
                                    } else { 
                                        esc_html_e('Get A Quote','wp-experts');
                                    }?>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php
    }
    ?>
</div>