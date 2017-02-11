<div data-padding='0' class="cms-carousel layout-team team-layout1 <?php echo esc_attr($atts['template']);?>" id="<?php echo esc_attr($atts['html_id']);?>">
    <?php
    $posts = $atts['posts'];
    $size = 'full';
    while($posts->have_posts()){
        $posts->the_post();
        $team_meta = wp_experts_post_meta_data();
        ?>
        <div class="cms-carousel-item">
            <div class="cms-team-item-inner">
                <div class="cms-team-image">
                    <?php 
                        if(has_post_thumbnail() && !post_password_required() && !is_attachment() &&  wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), $size, false)):
                            $class = ' has-thumbnail';
                            $thumbnail_url = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), $size, false);
                            $thumbnail = get_the_post_thumbnail(get_the_ID(),'full');
                        else:
                            $class = ' no-image';
                            $thumbnail_url[0] = get_template_directory_uri(). '/assets/images/no-image.jpg';
                            $thumbnail = '<img src="'.esc_url(get_template_directory_uri(). '/assets/images/no-image-370x420.jpg').'" alt="'.get_the_title().'" />';
                        endif;
                        echo '<div class="cms-grid-media '.esc_attr($class).'">'.$thumbnail.'</div>';
                    ?>
                    <div class="team-meta-hover text-center">
                        <h3 class="cms-team-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
                        <div class="cms-team-position">
                            <?php echo  esc_attr($team_meta->_cms_team_position); ?>
                        </div>
                    </div>
                </div>
                <div class="cms-team-meta text-center">
                    <h3 class="cms-team-title"><?php the_title();?></h3>
                    <div class="cms-team-position">
                        <?php echo  esc_attr($team_meta->_cms_team_position); ?>
                    </div>
                    <div class="cms-team-social">
                        <?php
                            for($i=1;$i<5;$i++){
                                $icon = $team_meta->{"_cms_icon".$i};
                                $link = $team_meta->{"_cms_link".$i};
                                if(!empty($icon) && !empty($link)): ?>
                                    <a class="<?php echo esc_attr($icon);?>" href="<?php echo esc_url($link);?>"></a> 
                                <?php endif;
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>