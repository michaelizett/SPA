<?php
extract(shortcode_atts(array(                     
    'year1' => '',              
    'year2' => '',              
    'year3' => '',              
    'year4' => '',              
    'year5' => '',              
    'process_title1' => '',              
    'process_title2' => '',              
    'process_title3' => '',              
    'process_title4' => '',              
    'process_title5' => '',              
    'process_description1' => '',              
    'process_description2' => '',       
    'process_description3' => '',       
    'process_description4' => '',             
    'process_description5' => '',                    
), $atts));
?>
<div class="cms-process cms-process-layout1">
	<ul class="cms-process-list">
		<?php
	        for($i=1;$i<6;$i++){
	            $year = ${"year".$i};
	            $title = ${"process_title".$i};
	            $description = ${"process_description".$i};
	            if(!empty($title) && !empty($description)): ?>
	            <li class="cms-process-item clearfix">
	            	<span class="cms-process-year"><?php echo esc_attr($year); ?><i class="fa fa-clock-o"></i></span>
	            	<div class="cms-process-content">
	            		<h3 class="cms-process-title"><?php echo esc_attr($title); ?></h3>
	                	<div class="cms-process-desc"><?php echo apply_filters('the_content', $description); ?></div>
	            	</div>
	            </li>
	            <?php endif;
	        }
	    ?>
	</ul>
</div>