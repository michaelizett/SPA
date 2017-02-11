<?php 
    /* get categories */
        $taxo = 'services-categories';
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
        $pretty_rel_random = ' rel="prettyPhoto[rel-' . get_the_ID() . '-' . rand() . ']"'; //rel-'.rand();
?>
<div class="layout-services services-layout6 filtrer-center cms-grid-wraper <?php echo esc_attr($atts['template']);?>" id="<?php echo esc_attr($atts['html_id']);?>">
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
    <div class="clearfix row <?php echo esc_attr($atts['grid_class']);?>">
        <?php
        $posts = $atts['posts'];
        while($posts->have_posts()){
            $posts->the_post();
            $groups = array();
            $groups[] = '"all"';
            $size = 'wp_experts_images-sm';
            $services_meta = wp_experts_post_meta_data();
            $services_description = isset( $services_meta->_cms_services_description) ? $services_meta->_cms_services_description : '';
            $services_subtitle = isset( $services_meta->_cms_services_subtitle) ? $services_meta->_cms_services_subtitle : '';
            foreach(cmsGetCategoriesByPostID(get_the_ID(),$taxo) as $category){
                $groups[] = '"category-'.$category->slug.'"';
            }
            ?>
            <div class="cms-grid-item cms-services-item <?php echo esc_attr($atts['item_class']);?>" data-groups='[<?php echo implode(',', $groups);?>]'>
                <div class="cms-services-item-inner">
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
                    <div class="cms-services-body">
                        <div class="cms-services-meta">
                            <h3 class="cms-services-title"><a href="<?php the_permalink() ?>" ><?php the_title();?></a></h3>
                            <div class="line-gap"></div>
                        </div>
                        <div class="cms-services-content">
                            <?php echo  esc_attr($services_description); ?>
                        </div>
                        <div class="cms-services-readmore style1">
                            <a class="btn btn-xs" href="<?php the_permalink() ?>" ><i class="fa fa-long-arrow-right"></i><span><?php esc_html_e('Read More', "wp-experts"); ?></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>