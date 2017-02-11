<?php
extract(shortcode_atts(array(
    'icon_type' => 'fontawesome',
    'icon_align'  => 'left',
    'button_text'  => 'Button',
    'link_button'  => '#',
    'button_style'  => 'btn',
    'button_size'  => 'size-default',
    'button_align'  => 'cta-right',
    'cta_title'  => '',
    'cta_title_color'  => '',
    'cta_desc'  => '',
    'cta_desc_color'  => '',
    'el_class'  => ''       
), $atts));
 
    $icon_name = "icon_" . $icon_type;
    $iconClass = isset($atts[$icon_name])?$atts[$icon_name]:'';
    $link = vc_build_link($link_button);
    if ( strlen( $link['url'] ) > 0 ) {
        $a_href = $link['url'];
    }
    $html_id = cmsHtmlID('cms-cta');
    $atts['html_id'] = $html_id;
?>
<div id="<?php echo esc_attr($atts['html_id']);?>" class="cms-cta-wrapper cms-style-default style2 clearfix <?php echo esc_attr($el_class); ?> <?php echo esc_attr($button_align); ?>">
    <style type="text/css" scoped>
        #<?php echo esc_attr($atts['html_id']);?>.cms-cta-wrapper .title {
            border-bottom: 2px solid <?php echo esc_attr($cta_title_color); ?>;
        }
    </style>
    <div class="cms-cta-inner row">
        <div class="cms-cta-content col-xs-12 col-sm-12 col-md-9 col-lg-9 text-center-md">
            <?php if (!empty($cta_title) && $cta_title) { ?>
                <div class="title" style="color: <?php echo esc_attr($cta_title_color); ?>;">
                    <?php echo esc_attr($cta_title); ?>
                </div>
            <?php } ?>
            <?php if (!empty($cta_desc) && $cta_desc) { ?>
                <div class="desc" style="color: <?php echo esc_attr($cta_desc_color); ?>;">
                    <?php echo esc_attr($cta_desc); ?>
                </div>
            <?php } ?>
        </div>

        <?php if (!empty($button_text) && $button_text) { ?>
            <div class="cms-cta-button col-xs-12 col-sm-12 col-md-3 col-lg-3 text-right text-center-md">
                <a href="<?php echo esc_url($a_href);?>" class="btn <?php echo esc_attr($button_style); ?> <?php echo esc_attr($button_size); ?>">
                    <?php switch ($icon_align) {
                        case 'right':
                            ?>
                                <?php echo esc_attr($button_text); ?>
                                <?php if(!empty($iconClass)):?>
                                <i class="<?php echo esc_attr($iconClass);?>" style="padding-left: 6px;"></i>
                                <?php endif;?>
                            <?php
                            break;
                        case 'left':
                        default:
                            ?>
                                <?php if(!empty($iconClass)):?>
                                    <i class="<?php echo esc_attr($iconClass);?>" style="padding-right: 6px;"></i>     
                                <?php endif;?>
                                <?php echo esc_attr($button_text); ?>
                            <?php
                            break;
                    }?>
                </a>
            </div>
    <?php } ?>
    </div>
</div>