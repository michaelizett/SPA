<?php 
    /* get categories */
        $taxo = 'gallery-categories';
        $_category = array();
        if(!isset($args['cat']) || $args['cat']==''){
            $terms = get_terms($taxo);
            foreach ($terms as $cat){
                $_category[] = $cat->term_id;
            }
        } else {
            $_category  = explode(',', $args['cat']);
        }
        $atts['categories'] = $_category;
        $pretty_rel_random = ' rel="prettyPhoto[rel-' . get_the_ID() . '-' . rand() . ']"';
        $gird_item_space = isset($atts['gird_item_space']) ? $atts['gird_item_space'] : '0px';
?>
<div class="layout-gallery cms-grid-wraper <?php echo esc_attr($atts['template']);?>" id="<?php echo esc_attr($atts['html_id']);?>">
    <?php if($atts['filter']=="true" and $atts['layout']=='masonry'):?>
        <div class="cms-grid-filter">
            <ul>
                <li><a class="active" href="#" data-group="all"><?php esc_html_e('All', "wp-experts"); ?></a></li>
                <?php foreach($atts['categories'] as $category):?>
                    <?php $term = get_term( $category, $taxo );?>
                    <li><a href="#" data-group="<?php echo esc_attr('category-'.$term->slug);?>">
                            <?php echo esc_html($term->name);?>
                        </a>
                    </li>
                <?php endforeach;?>
            </ul>
        </div>
    <?php endif;?>
    <div class="clearfix row <?php echo esc_attr($atts['grid_class']);?>" style="margin: 0 -<?php echo esc_attr($gird_item_space); ?>">
        <?php
        $posts = $atts['posts'];
        $size = 'full';
        while($posts->have_posts()){
            $posts->the_post();
            $groups = array();
            $groups[] = '"all"';
            foreach(cmsGetCategoriesByPostID(get_the_ID(),$taxo) as $category){
                $groups[] = '"category-'.$category->slug.'"';
            }
            ?>
            <div class="cms-grid-item cms-gallery-item <?php echo esc_attr($atts['item_class']);?>" data-groups='[<?php echo implode(',', $groups);?>]' style="padding: <?php echo esc_attr($gird_item_space); ?>"> 
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
                                <a href="<?php echo esc_url($thumbnail_url[0]); ?>" <?php echo ''.$pretty_rel_random; ?> class="cms-prettyphoto p-view"><span class="ion-ios-plus-empty"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
    <?php wp_experts_paging_nav(); ?>
</div>