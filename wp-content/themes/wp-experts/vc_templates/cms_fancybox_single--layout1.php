<?php 
    $icon_name = "icon_" . $atts['icon_type'];
    $iconClass = isset($atts[$icon_name])?$atts[$icon_name]:'';
    $icon_custom = isset($atts['icon_custom']) ? $atts['icon_custom'] : '';
    $box_align = isset($atts['box_align']) ? $atts['box_align'] : 'left';
    $box_icon = isset($atts['box_icon']) ? $atts['box_icon'] : 'no';
    $icon_color = isset($atts['icon_color']) ? $atts['icon_color'] : '';
    $title_color = isset($atts['title_color']) ? $atts['title_color'] : '';
    $description_color = isset($atts['description_color']) ? $atts['description_color'] : '';
?>
<div class="cms-fancyboxes-wraper cms-fancyboxes-layout1 text-<?php echo esc_attr($box_align); ?> <?php if($box_icon == 'yes') { echo 'box-icon'; } ?> <?php echo esc_attr($atts['template']);?>" id="<?php echo esc_attr($atts['html_id']);?>">
    <?php if($atts['title']!=''):?>
        <div class="cms-fancyboxes-header">
            <div class="cms-fancyboxes-title">
                <?php echo apply_filters('the_title',$atts['title']);?>
            </div>
            <div class="cms-fancyboxes-description">
                <?php echo apply_filters('the_content',$atts['description']);?>
            </div>
        </div>
    <?php endif;?>
    <div class="cms-fancyboxes-body">
        <div class="cms-fancybox-item">
            <?php 
                $image_url = '';
                if (!empty($atts['image'])) {
                    $attachment_image = wp_get_attachment_image_src($atts['image'], 'full');
                    $image_url = $attachment_image[0];
                }
            ?>
            <?php if($atts['title_item']):?>
                <div class="cms-fancybox-icon">
                    <?php if($image_url):?>
                        <span class="fancy-box-image">
                            <img src="<?php echo esc_attr($image_url);?>" />
                        </span>
                    <?php else:?>
                        <?php if( $icon_custom ): ?>
                            <span class="fancy-box-icon"><i class="<?php echo esc_attr($icon_custom); ?>" style="color:<?php echo esc_attr($icon_color); ?>"></i></span>
                            <?php else: if( $iconClass ): ?>
                                <span class="fancy-box-icon"><i class="<?php echo esc_attr($iconClass); ?>" style="color:<?php echo esc_attr($icon_color); ?>"></i></span>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endif;?>
                </div>
                <h3 class="cms-fancybox-title" style="color:<?php echo esc_attr($title_color); ?>">
                    <?php echo apply_filters('the_title',$atts['title_item']);?>
                </h3>
            <?php endif;?>

            <?php if($atts['description_item']): ?>
                <div class="fancy-box-content" style="color:<?php echo esc_attr($description_color); ?>">
                    <?php echo apply_filters('the_content',$atts['description_item']);?>
                </div>
            <?php endif; ?>

            <?php if($atts['button_text']!=''):?>
                <div class="cms-fancyboxes-footer">
                    <?php
                    $class_btn = ($atts['button_type']=='button')?'btn btn-default':'';
                    ?>
                    <a href="<?php echo esc_url($atts['button_link']);?>" class="<?php echo esc_attr($class_btn);?>"><?php echo esc_attr($atts['button_text']);?><i class="fa fa-long-arrow-right"></i></a>
                </div>
            <?php endif;?>
        </div>
    </div>
</div>