<div data-padding='0' class="cms-carousel layout-services services-layout3 <?php echo esc_attr($atts['template']);?>" id="<?php echo esc_attr($atts['html_id']);?>">
    <?php
        $posts = $atts['posts'];
        while($posts->have_posts()){
            $posts->the_post();
            $size = 'wp_experts_575X450';
            $services_meta = wp_experts_post_meta_data();
            $services_description = isset( $services_meta->_cms_services_description) ? $services_meta->_cms_services_description : '';
            $services_subtitle = isset( $services_meta->_cms_services_subtitle) ? $services_meta->_cms_services_subtitle : '';
            $services_icon = isset( $services_meta->_cms_services_icon) ? $services_meta->_cms_services_icon : '';
            $services_image_icon = isset( $services_meta->_cms_services_image_icon) ? $services_meta->_cms_services_image_icon : '';
            $show_hide_image = isset($atts['show_hide_image']) ? $atts['show_hide_image'] : 'yes';
            ?>
            <div class="cms-services-item">
                <div class="cms-services-item-inner">
                    <?php if($show_hide_image == 'yes') { ?>
                        <div class="cms-services-header style-overlay">
                            <?php 
                                if(has_post_thumbnail() && !post_password_required() && !is_attachment() &&  wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), $size, false)):
                                    $class = ' has-thumbnail';
                                    $thumbnail_url = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), $size, false);
                                    $thumbnail = get_the_post_thumbnail(get_the_ID(),'wp_experts_575X450');
                                else:
                                    $class = ' no-image';
                                    $thumbnail_url[0] = get_template_directory_uri(). '/assets/images/no-image.jpg';
                                    $thumbnail = '<img src="'.esc_url(get_template_directory_uri(). '/assets/images/no-image-740x680.jpg').'" alt="'.get_the_title().'" />';
                                endif;
                                echo '<div class="cms-services-image '.esc_attr($class).'">'.$thumbnail.'</div>';
                            ?>
                            <a class="more" href="<?php the_permalink() ?>"><span class="ion-ios-plus-empty"></span></a>
                        </div>
                    <?php } ?>
                    <div class="cms-services-body">
                        <div class="cms-services-meta box-style1">
                            <?php if($services_icon) {?>
                                <i class="cms-services-icon <?php echo  esc_attr($services_icon); ?>"></i>
                            <?php } else { ?>
                                <img class="cms-services-icon" src="<?php echo esc_url(wp_get_attachment_url($services_image_icon)); ?>" alt="" />
                            <?php } ?>
                            <div class="cms-services-meta-right">
                                <div class="cms-services-meta-right-inner">
                                    <h3 class="cms-services-title"><a href="<?php the_permalink() ?>" ><?php the_title();?></a></h3>
                                    <div class="cms-services-subtitle"><?php echo esc_attr($services_subtitle); ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="cms-services-content">
                            <?php echo  esc_attr($services_description); ?>
                        </div>
                        <div class="cms-services-readmore style2">
                            <a class="btn btn-text-default btn-default" href="<?php the_permalink() ?>" ><i class="fa fa-long-arrow-right"></i><span><?php esc_html_e('Read More', "wp-experts"); ?></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
    ?>
</div>