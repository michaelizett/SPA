<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package CMSSuperHeroes
 * @subpackage CMS Theme
 * @since 1.0.0
 */
global $smof_data, $post;
$project_meta = wp_experts_post_meta_data();
$images = !empty($project_meta->_cms_project_image_gallery) ? $project_meta->_cms_project_image_gallery : '';
$image_ids = explode(',', $images);

wp_register_script('owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', 'jquery', '1.0', TRUE);
wp_register_script('owl-carousel-cms', get_template_directory_uri() . '/assets/js/owl.carousel.cms.js', 'owl-carousel', '1.0', TRUE);
wp_enqueue_style('owl-carousel-cms', get_template_directory_uri() . '/assets/css/owl.carousel.css');
wp_enqueue_script('owl-carousel');
$cms_carousel['sg-project-gallery'] = array(
    'margin' => 0,
    'loop' => 'true',
    'mouseDrag' => 'true',
    'navigation' => 'true',
    'nav' => 'true',
    'dots' => 'false',
    'autoplay' => 'false',
    'autoplayTimeout' => 2000,
    'smartSpeed' => 1200,
    'autoplayHoverPause' => 'true',
    'navText' => array('<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'),
    'responsive' => array(
        0 => array(
        "items" => 1,
        ),
        768 => array(
            "items" => 1,
            ),
        992 => array(
            "items" => 1,
            ),
        1200 => array(
            "items" => 1,
            )
        )
);
wp_localize_script('owl-carousel', "cmscarousel", $cms_carousel);
wp_enqueue_script('owl-carousel-cms');

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="sg-project container project-layout2 clearfix">
		<div class="row">
			<div class="sg-project-sidebar col-xs-12 col-sm-6 col-md-4 col-lg-4">
				<div class="sg-project-description">
					<div class="sg-project-description-inner">
						<?php if (!empty($project_meta->_cms_project_client)) { ?>
							<h3 class="project-heading-line"><span><?php echo esc_html_e('Project Description','wp-experts') ?></span></h3>
						<?php } ?>
						<ul>
							<?php if (!empty($project_meta->_cms_project_client)) { ?>
					            <li>
					            	<span><?php echo esc_html_e('Client: ','wp-experts'); ?></span><?php echo  esc_attr($project_meta->_cms_project_client); ?>
					            </li>
					        <?php } ?>
					        <?php if (!empty($project_meta->_cms_project_location)) { ?>
					            <li>
					            	<span><?php echo esc_html_e('Location: ','wp-experts'); ?></span><?php echo  esc_attr($project_meta->_cms_project_location); ?>
					            </li>
					        <?php } ?>
					        <?php if (!empty($project_meta->_cms_project_building)) { ?>
					            <li>
					            	<span><?php echo esc_html_e('Gross Building Area: ','wp-experts'); ?></span><?php echo  esc_attr($project_meta->_cms_project_building); ?>
					            </li>
					        <?php } ?>
					        <?php if (!empty($project_meta->_cms_project_time_start)) { ?>
					            <li>
					            	<span><?php echo esc_html_e('Project started: ','wp-experts'); ?></span><?php echo  esc_attr($project_meta->_cms_project_time_start); ?>
					            </li>
					        <?php } ?>
					        <?php if (!empty($project_meta->_cms_project_time_end)) { ?>
					            <li>
					            	<span><?php echo esc_html_e('Project complited: ','wp-experts'); ?></span><?php echo  esc_attr($project_meta->_cms_project_time_end); ?>
					            </li>
					        <?php } ?>
					        <?php if (!empty($project_meta->_cms_project_architect)) { ?>
					            <li>
					            	<span><?php echo esc_html_e('Architect: ','wp-experts'); ?></span><?php echo  esc_attr($project_meta->_cms_project_architect); ?>
					            </li>
					        <?php } ?>
					        <li>
				            	<span><?php echo esc_html_e('Category: ','wp-experts'); ?></span><?php echo get_the_term_list( get_the_ID(), 'projects-categories' ); ?>
				            </li>
					        <?php if (!empty($project_meta->_cms_project_value)) { ?>
					            <li>
					            	<span><?php echo esc_html_e('Value: ','wp-experts'); ?></span><?php echo  esc_attr($project_meta->_cms_project_value); ?>
					            </li>
					        <?php } ?>

				        </ul>
					</div>
				</div>
				<div class="gap"></div>
				<div class="sg-project-services">
					<?php if (!empty($project_meta->_cms_projects_overview)) { ?>
						<h3 class="project-heading"><span><?php echo esc_html_e('Service Overview','wp-experts') ?></span></h3>
						<?php echo  $project_meta->_cms_projects_overview; ?>
					<?php } ?>
				</div>
				<div class="gap"></div>
				<div class="sg-project-management">
					<?php if (!empty($project_meta->_cms_projects_management)) { ?>
						<h3 class="project-heading"><span><?php echo esc_html_e('Project Management','wp-experts') ?></span></h3>
						<?php echo  $project_meta->_cms_projects_management; ?>
					<?php } ?>
				</div>
			</div>

			<div class="sg-project-wrapper col-xs-12 col-sm-6 col-md-8 col-lg-8">
				<div class="sg-project-header">
					<?php if (!empty($project_meta->_cms_project_gallery_show)) { ?>
						<div id="sg-project-gallery" class="cms-carousel">
							<?php foreach ($image_ids as $image_id): ?>
			                    <?php
			                    $attachment_image = wp_get_attachment_image_src($image_id, 'full', false);
			                    if($attachment_image[0] != ''):?>
			                    <div class="sg-project-gallery-item cms-gallery-item">
			                        <img src="<?php echo esc_url($attachment_image[0]);?>" alt="" />
			                    </div>
			                    <?php endif; ?>
			                <?php endforeach; ?>
						</div>
					<?php } ?>
					<div class="sg-project-image cms-image-zoom">
						<?php 
	                        if(has_post_thumbnail() && !post_password_required() && !is_attachment() &&  wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full', false)):
	                            $class = ' has-thumbnail';
	                            $thumbnail_url = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full', false);
	                            $thumbnail = get_the_post_thumbnail(get_the_ID(),'full');
	                        else:
	                            $class = ' no-image';
	                            $thumbnail_url[0] = get_template_directory_uri(). '/assets/images/no-image.jpg';
	                            $thumbnail = '<img src="'.esc_url(get_template_directory_uri(). '/assets/images/no-image.jpg').'" alt="'.get_the_title().'" />';
	                        endif;
	                        echo '<a href="'.esc_url($thumbnail_url[0]).'" class="p-view '.esc_attr($class).'">'.$thumbnail.'</a>';
	                    ?>
					</div>
				</div>
				<div class="sg-project-body">
					<div class="row">
						<div class="sg-project-goals col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<?php if (!empty($project_meta->_cms_projects_goals)) { ?>
								<h3 class="project-heading"><span><?php echo esc_html_e('Project Goals','wp-experts') ?></span></h3>
								<?php echo  $project_meta->_cms_projects_goals; ?>
							<?php } ?>
						</div>
						<div class="sg-project-wishes col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<?php if (!empty($project_meta->_cms_projects_wishes)) { ?>
								<h3 class="project-heading"><span><?php echo esc_html_e('Costumers Wishes','wp-experts') ?></span></h3>
								<?php echo  $project_meta->_cms_projects_wishes; ?>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
			<?php wp_experts_post_nav_classic(); ?>
			<div class="sg-project-footer col-xs-12 col-sm-12 col-md-12 col-lg-12">
			    <?php the_content(); ?>
			</div>
		</div>
	</div>
</article>

<!-- #post -->
