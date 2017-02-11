<div data-center='true' data-padding='0' class="cms-carousel cms-testimonial cms-testimonial-layout2 text-center <?php echo esc_attr($atts['template']);?>" id="<?php echo esc_attr($atts['html_id']);?>">
    <?php
    $posts = $atts['posts'];
    while($posts->have_posts()){
        $posts->the_post();
        $testimonial_meta = wp_experts_post_meta_data();
        ?>
        <div class="cms-carousel-item cms-testimonial-item">
            <div class="cms-testimonial-wrapper clearfix">
                <span class="icon-quote">
                    <i class="lg fa fa-quote-left"></i>
                    <i class="sm fa fa-quote-left"></i>
                </span>
                <div class="cms-carousel-body cms-testimonial-body">
                     <div class="content"><?php the_content(); ?></div>
                </div>
            </div>
            <div class="cms-testimonial-footer">
                <div class="cms-testimonial-position">
                    <h3 class="author"><?php the_title();?></h3>
                    <span class="position"><?php echo esc_attr($testimonial_meta->_cms_testimonial_position); ?></span>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>