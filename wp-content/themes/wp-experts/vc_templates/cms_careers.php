<div class="cms-careers-wraper cms-careers-default">
    <?php $query = new WP_Query(array('posts_per_page'=> 100, 'post_type' => 'careers', 'post_status'=> 'publish')); ?>
    <?php if($query->have_posts()):?>
        <div class="cms-careers-inner clearfix">
            <?php $_i = 0; while ($query->have_posts()): $query->the_post(); $_i++; ?>
                <?php $careers_meta = wp_experts_post_meta_data();?>
                <ul class="cms-careers-list clearfix">
                    <li class="cms-careers-title col-xs-12 col-sm-6 col-md-3 col-lg-3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                    <li class="cms-careers-location col-xs-12 col-sm-6 col-md-3 col-lg-3"><i class="fa fa-map-marker"></i><?php echo esc_attr($careers_meta->_cms_careers_location); ?></li>
                    <li class="cms-careers-category dislink col-xs-12 col-sm-6 col-md-3 col-lg-3">
                       <i class="fa fa-folder"></i><?php the_terms( get_the_ID(), 'careers-categories', ' ' ); ?>
                    </li> 
                    <li class="cms-careers-date col-xs-12 col-sm-6 col-md-3 col-lg-3"><i class="fa fa-clock-o"></i><?php echo get_the_date(); ?></li>
                </ul>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    <?php endif; ?>
</div>