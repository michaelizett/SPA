<?php 
    /* get categories */
    $taxo = 'client-categories';
    $_category = array();
    if(!isset($atts['cat']) || $atts['cat']==''){
        $terms = get_terms($taxo);
        foreach ($terms as $cat){
            $_category[] = $cat->term_id;
        }
    } else {
        $_category  = explode(',', $atts['cat']);
    }
    $atts['categories'] = $_category;
?>
<div class="cms-grid-wraper cms-partner-layout1 <?php echo esc_attr($atts['template']);?>" id="<?php echo esc_attr($atts['html_id']);?>">
    <?php if($atts['filter']=="true" and $atts['layout']=='masonry'):?>
        <div class="cms-grid-filter">
            <ul class="cms-filter-category list-unstyled list-inline">
                <li><a class="active" href="#" data-group="all">All</a></li>
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
    <div class="row <?php echo esc_attr($atts['grid_class']);?>">
        <?php
        $posts = $atts['posts'];
        while($posts->have_posts()){
            $posts->the_post();
            $groups = array();
            $groups[] = '"all"';
            $client_meta = wp_experts_post_meta_data();
            foreach(cmsGetCategoriesByPostID(get_the_ID(),$taxo) as $category){
                $groups[] = '"category-'.$category->slug.'"';
            }
            ?>
            <div class="cms-grid-item <?php echo esc_attr($atts['item_class']);?>" data-groups='[<?php echo implode(',', $groups);?>]'>
                <div class="cms-partner-image">
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
                <div class="cms-partner-content">
                    <h3 class="cms-partner-title"><a href="<?php echo esc_url($client_meta->_cms_client_url); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                    <div class="cms-partner-subtitle line-wrap"><?php echo esc_attr($client_meta->_cms_client_work); ?><div class="line-icon2"></div></div>    
                    <div class="cms-partner-content-inner">
                       <?php the_content(); ?>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>