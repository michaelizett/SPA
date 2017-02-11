<?php 
    /* get categories */
    $taxo = 'case-categories';
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
    $gird_title_case = isset( $atts['gird_title_case'] ) ? $atts['gird_title_case'] : '';
?>
<div class="cms-grid-wraper case-layout cms-case-layout1 <?php echo esc_attr($atts['template']);?>" id="<?php echo esc_attr($atts['html_id']);?>">
    <?php if(!empty($gird_title_case)) { ?>
        <h3 class="cms-title-case"><?php echo esc_attr($gird_title_case); ?></h3>
    <?php } ?>
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
        $size = 'wp_experts_575X450';
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
                        $thumbnail = get_the_post_thumbnail(get_the_ID(),'wp_experts_575X450');
                    else:
                        $class = ' no-feature-img';
                        $thumbnail_url[0] = get_template_directory_uri(). '/assets/images/no-image.jpg';
                        $thumbnail = '<img src="'.get_template_directory_uri(). '/assets/images/no-image.jpg" alt="'.get_the_title().'" />';
                    endif;
                ?>
                <div class="grid-case-body <?php echo esc_attr($class); ?>">
                    <div class="grid-case-image">
                        <?php echo ''.$thumbnail.''; ?>
                        <a class="grid-case-more" href="<?php the_permalink(); ?>"><i class="ion-ios-plus-empty"></i></a>
                    </div>
                    <div class="grid-case-content">
                        <div class="grid-case-categories dislink">
                            <?php echo get_the_term_list( get_the_ID(), 'case-categories', '', ', ' ); ?>
                        </div>
                        <h3 class="grid-case-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
    <?php if($show_hide_navigation == 'yes') {
        wp_experts_paging_nav(); 
    } ?>
</div>