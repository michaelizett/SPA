<?php 
    $icon_name = "icon_" . $atts['icon_type'];
    $iconClass = isset($atts[$icon_name])?$atts[$icon_name]:'';
    $icon_custom = isset($atts['icon_custom']) ? $atts['icon_custom'] : '';

?>
<div class="cms-fancyboxes-wraper cms-fancyboxes-layout5 <?php echo esc_attr($atts['template']);?>" id="<?php echo esc_attr($atts['html_id']);?>">
    <div class="cms-fancyboxes-body">
        <div class="cms-fancybox-item">
            <?php 
                $image_url = '';
                if (!empty($atts['image'])) {
                    $attachment_image = wp_get_attachment_image_src($atts['image'], 'full');
                    $image_url = $attachment_image[0];
                }
            ?>

            <div class="cms-fancybox-icon">
                <?php if($image_url):?>
                    <span class="fancy-box-image">
                        <img src="<?php echo esc_attr($image_url);?>" />
                    </span>
                <?php else:?>
                    <?php if( $icon_custom ): ?>
                        <span class="fancy-box-icon"><i class="<?php echo esc_attr($icon_custom); ?>"></i></span>
                        <?php else: if( $iconClass ): ?>
                            <span class="fancy-box-icon"><i class="<?php echo esc_attr($iconClass); ?>"></i></span>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endif;?>
            </div>

            <div class="cms-fancybox-content">
                <?php if($atts['description_item']): ?>
                    <div class="cms-fancybox-content-inner">
                        <?php echo apply_filters('the_content',$atts['description_item']);?>
                    </div>
                <?php endif; ?>
                <?php if($atts['title_item']):?>
                    <h3 class="cms-fancybox-title">
                        <?php echo apply_filters('the_title',$atts['title_item']);?>
                    </h3>
                <?php endif;?>
            </div>

            <?php if($atts['button_text']!=''):?>
                <div class="cms-fancyboxes-footer">
                    <?php
                    $class_btn = ($atts['button_type']=='button')?'btn btn-default-alt':'';
                    ?>
                    <a href="<?php echo esc_url($atts['button_link']);?>" class="<?php echo esc_attr($class_btn);?>"><?php echo esc_attr($atts['button_text']);?><i class="fa fa-long-arrow-right"></i></a>
                </div>
            <?php endif;?>
        </div>
    </div>
</div>