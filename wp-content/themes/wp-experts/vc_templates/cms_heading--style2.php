<?php
extract(shortcode_atts(array(
    'hd_subtitle' => '',       
    'hd_title' => '',       
    'title_color' => '',       
    'hd_description' => '',       
    'hd_btn_text' => '',       
    'hd_btn_link' => '',              
    'sub_color' => '',       
    'description_color' => '',       
    'content_align' => 'center',       
    'custom_class' => '',       
), $atts));
$link = vc_build_link($hd_btn_link);
$a_href = '';
$a_target = strlen( $link['target'] ) > 0 ? $link['target'] : '_self';
if ( strlen( $link['url'] ) > 0 ) {
    $a_href = $link['url'];
}
?>
<div class="cms-heading-wrapper heading-style2 text-<?php echo esc_attr($content_align); ?> <?php echo esc_attr($custom_class); ?>">
    <div class="cms-heading-inner">
        <div class="cms-heading-content">
            <?php if (!empty($hd_subtitle) && $hd_subtitle) { ?>
                <span class="subtitle" style="color:<?php echo esc_attr($sub_color); ?>;"><?php echo esc_attr($hd_subtitle); ?></span>
            <?php }?> 
            <h3 class="title" style="color:<?php echo esc_attr($title_color); ?>;"><?php echo esc_attr($hd_title); ?></h3>
            <?php if (!empty($hd_description)) { ?>
                <div class="description" style="color:<?php echo esc_attr($description_color); ?>;"> <?php echo apply_filters('the_content',$atts['hd_description']);?></div>
            <?php } ?>
            <div class="line-icon"></div>
        </div>
    </div>
    <?php if(!empty($hd_btn_text) && $hd_btn_text) { ?>
        <div class="cms-heading-button">
            <a href="<?php echo esc_url($a_href);?>" target="<?php  echo esc_attr($a_target); ?>" class="btn btn-md">
                <?php echo esc_attr($hd_btn_text); ?>
            </a>
        </div>
    <?php } ?>
</div>