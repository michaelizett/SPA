<?php
extract(shortcode_atts(array(
    'icon_type' => 'fontawesome',
    'button_text'  => 'Button',
    'link_button'  => '#',
    'button_style'  => 'btn-default',
    'button_size'  => 'btn-default',
    'icon_align'  => 'left',
    'button_duplicated'  => '',
    'button_text_duplicated'  => '',
    'link_button_duplicated'  => '',
    'button_style_duplicated'  => '',
    'el_class'  => ''       
), $atts));
 
    $icon_name = "icon_" . $icon_type;
    $iconClass = isset($atts[$icon_name])?$atts[$icon_name]:'';
    $link = vc_build_link($link_button);
    $link_duplicated = vc_build_link($link_button_duplicated);
    $a_href = '';
    $a_href_d = '';
    if ( strlen( $link['url'] ) > 0 ) {
        $a_href = $link['url'];
    }
    if ( strlen( $link_duplicated['url'] ) > 0 ) {
        $a_href_d = $link_duplicated['url'];
    }
?>
<div class="cms-button-wrapper">
    
    <?php if($button_duplicated == 'yes') { ?>
        <a href="<?php echo esc_url($a_href_d);?>" class="btn <?php echo esc_attr($el_class); ?> <?php echo esc_attr($button_style_duplicated); ?> <?php echo esc_attr($button_size); ?>">
            <?php switch ($icon_align) {
                case 'right':
                    ?>
                        <?php echo esc_attr($button_text_duplicated); ?>
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
                        <?php echo esc_attr($button_text_duplicated); ?>
                    <?php
                    break;
            }?>
        </a>
    <?php } ?>

    <a href="<?php echo esc_url($a_href);?>" class="btn <?php echo esc_attr($el_class); ?> <?php echo esc_attr($button_style); ?> <?php echo esc_attr($button_size); ?>">
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