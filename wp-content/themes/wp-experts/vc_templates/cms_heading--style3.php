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
    'custom_class' => '',       
), $atts));
$link = vc_build_link($hd_btn_link);
$a_href = '';
$a_target = strlen( $link['target'] ) > 0 ? $link['target'] : '_self';
if ( strlen( $link['url'] ) > 0 ) {
    $a_href = $link['url'];
}
?>
<div class="cms-heading-wrapper heading-style3 <?php echo esc_attr($custom_class); ?>">
    <div class="cms-heading-inner">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 box-left text-right text-center-md">
                    <div class="cms-heading-content">
                        <?php if (!empty($hd_subtitle) && $hd_subtitle) { ?>
                            <span class="subtitle" style="color:<?php echo esc_attr($sub_color); ?>;"><?php echo esc_attr($hd_subtitle); ?></span>
                        <?php }?> 
                        <h3 class="title" style="color:<?php echo esc_attr($title_color); ?>;"><?php echo esc_attr($hd_title); ?></h3>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 text-center-md">
                    <?php if (!empty($hd_description)) { ?>
                        <div class="description" style="color:<?php echo esc_attr($description_color); ?>;"> <?php echo apply_filters('the_content',$atts['hd_description']);?></div>
                    <?php } ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <div class="line-icon"></div>
                    <?php if(!empty($hd_btn_text) && $hd_btn_text) { ?>
                        <div class="cms-heading-button">
                            <a href="<?php echo esc_url($a_href);?>" target="<?php  echo esc_attr($a_target); ?>" class="btn btn-md">
                                <?php echo esc_attr($hd_btn_text); ?>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>   
    </div>
</div>