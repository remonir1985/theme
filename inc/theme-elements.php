<?php

function section_1_theory($attr){

extract(shortcode_atts(array(
'section_1_group'=>'',
 'Sec_1_title' => 'This is title',
 'Sec_1_desc' => 'This is description',
 
),$attr)
);

ob_start();
?>
<section id="one" class="wrapper">
				<div class="inner">
					<div class="flex flex-3">

<?php $sec_1_key = vc_param_group_parse_atts($section_1_group);
foreach ($sec_1_key as $section_1_value) {
	?> 

						<article>
							<header>
								<h3><?php echo esc_html($section_1_value['Sec_1_title']); ?></h3>
							</header>
							<p><?php echo esc_html($section_1_value['Sec_1_desc']); ?></p>
							<footer>
								<a href="#" class="button special">More</a>
							</footer>
						</article>
						  
<?php 
}
 ?>

						 
					</div>
				</div>
			</section>
<?php

return ob_get_clean();

}

add_shortcode('post_section','section_1_theory');


//testimonial section
function section_testimonial_theory($attr){

extract(shortcode_atts(array(
		'section_2_group'=>'',
		'Sec_2_main_title'=>'',
		'Sec_2_main_desc' =>'',
		'Sec_2_title' => '',
 		'Sec_2_desc' => '',
 		'Sec_2_img'	=>''
 
),$attr)
);

ob_start();
?>
<section id="two" class="wrapper style1 special">
				<div class="inner">
					<header>
						<h2><?php echo esc_html($Sec_2_main_title); ?></h2>
						<p><?php echo esc_html($Sec_2_main_desc); ?></p>
					</header>
					<div class="flex flex-4">

<?php $sec_2_key = vc_param_group_parse_atts($section_2_group);
foreach ($sec_2_key as $section_2_value) {
	?> 

						<div class="box person">
							<div class="image round">
					<?php $img_src = wp_get_attachment_image_src( $section_2_value['Sec_2_img'], full); ?>
								<img src="<?php echo esc_url($img_src[0]); ?>" alt="Person 1" />
							</div>
							<h3><?php echo esc_html($section_2_value['Sec_2_title']); ?></h3>
							<p><?php echo esc_html($section_2_value['Sec_2_desc']); ?></p>
						</div>
						  
<?php 
}
 ?>

						 
					</div>
				</div>
			</section>
<?php

return ob_get_clean();

}

add_shortcode('testimonial_section','section_testimonial_theory');




 ?>