<?php 
    /* get categories */
    $taxo = 'category';
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
<div class="cms-grid-wraper cms-grid-blog-layout1 <?php echo esc_attr($atts['template']);?>" id="<?php echo esc_attr($atts['html_id']);?>">
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
        $size = ($atts['layout']=='basic')?'thumbnail':'medium';
        while($posts->have_posts()){
            $posts->the_post();
            $groups = array();
            $groups[] = '"all"';
            $show_hide_navigation = isset( $atts['show_hide_navigation'] ) ? $atts['show_hide_navigation'] : 'yes';
            foreach(cmsGetCategoriesByPostID(get_the_ID(),$taxo) as $category){
                $groups[] = '"category-'.$category->slug.'"';
            }
            ?>
            <div class="cms-grid-item <?php echo esc_attr($atts['item_class']);?>" data-groups='[<?php echo implode(',', $groups);?>]'>
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
                <div class="entry-blog <?php echo esc_attr($class); ?>">
                    <div class="entry-header">
                        <div class="entry-feature">
                            <a href="<?php the_permalink(); ?>"><?php echo ''.$thumbnail.''; ?></a>
                            <?php wp_experts_archive_meta_icon(); ?>
                        </div>
                    </div>
                    <div class="entry-content">
                        <div class="blog-detail">
                            <ul>
                                <li class="detail-date"><?php echo get_the_date(); ?></li>
                                <?php if(has_category()): ?>
                                <li class="detail-terms"><?php the_terms( get_the_ID(), 'category', ''.esc_html__('', 'wp-experts'), ' , ' ); ?></li>
                                <?php endif; ?>
                            </ul>
                        </div>
                        <h3 class="entry-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>
                        <div class="entry-content-inner-grid">
                            <?php echo substr(get_the_excerpt(), 0,150); ?>...
                        </div>
                        <div class="entry-readmore">
                            <a href="<?php the_permalink(); ?>"><i class="fa fa-long-arrow-right"></i><span><?php esc_html_e('Read More','wp-experts'); ?></span></a>
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