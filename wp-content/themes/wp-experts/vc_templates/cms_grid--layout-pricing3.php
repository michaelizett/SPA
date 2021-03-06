<?php 
    global $post;
?>
<div class="cms-grid-wraper cms-pricing cms-pricing-layout3 <?php echo esc_attr($atts['template']);?>" id="<?php echo esc_attr($atts['html_id']);?>">
    <div class="row <?php echo esc_attr($atts['grid_class']);?>">
        <?php
        $posts = $atts['posts'];
        while($posts->have_posts()){
            $posts->the_post();
            $groups = array();
            $groups[] = '"all"';
            $pricing_meta = wp_experts_post_meta_data();
            $bg_pricing_header = isset($atts['bg_pricing_header']) ? $atts['bg_pricing_header'] : '';
            $color_pricing_title = isset($atts['color_pricing_title']) ? $atts['color_pricing_title'] : '';
            ?>
            <div class="<?php echo esc_attr($atts['item_class']);?>" data-groups='[<?php echo implode(',', $groups);?>]'>
                <div class="cms-pricing-item">
                    <div class="cms-pricing-header" style="background-color: <?php echo esc_attr($bg_pricing_header); ?>">
                        <div class="cms-pricing-header-inner">
                            <div class="cms-pricing-title">
                                <h3 style="color: <?php echo esc_attr($color_pricing_title); ?>"><?php the_title();?></h3>
                            </div>
                            <div class="cms-pricing-box clearfix">
                                <div class="cms-pricing-price">
                                    <span class="unit"><?php if(!empty($pricing_meta->_cms_pricing_currency)) { echo esc_attr($pricing_meta->_cms_pricing_currency); } ?></span>
                                    <span class="price"><?php if(!empty($pricing_meta->_cms_pricing_price)) { echo esc_attr($pricing_meta->_cms_pricing_price); } ?></span>
                                    <span class="time">/ <?php if(!empty($pricing_meta->_cms_pricing_time)) { echo esc_attr($pricing_meta->_cms_pricing_time); } ?></span>
                                </div>
                                <?php if(!empty($pricing_meta->_cms_pricing_subtitle)) { ?>
                                    <span class="cms-pricing-subtitle">
                                        <?php echo esc_attr($pricing_meta->_cms_pricing_subtitle); ?>
                                    </span>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="cms-pricing-body">
                        <div class="cms-pricing-content">
                            <?php the_content(); ?>
                        </div>
                        <div class="cms-pricing-readmore"><a href="<?php if(!empty($pricing_meta->_cms_pricing_btn_link)) { echo esc_url($pricing_meta->_cms_pricing_btn_link); } ?>" class="btn btn-secondary btn-block"><?php if(!empty($pricing_meta->_cms_pricing_btn_text)) { echo esc_attr($pricing_meta->_cms_pricing_btn_text); } ?></a></div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>