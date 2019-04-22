<?php
function theory_section(){
	vc_map(array(

      'name' => __('section_1_theory','TAIBA'),
      'description' => 'this is first section Here',
      'base' => 'post_section',
      'category' => 'THEORY',
      'icon' => 'fa fa-map',
      'params' => array(
      	array(
      	
      		'type'	=>'param_group',
      		'heading'	=>'section_1_item',
      		'param_name'	=>'section_1_group',
      		'params'		=>array(
      	array(

            'param_name' => 'Sec_1_title',
            'type' => 'textfield',
            'heading'=> 'the section 1 title',
            'value' => 'placeholder'
        ),

        array(

            'param_name' => 'Sec_1_desc',
            'type' => 'textarea',
            'heading'=> 'the section 1 Description',
            'value' => 'placeholder'
        ),

      		
      	)
      		),


        
        
      )

  ));


	//testimonial part

	vc_map(array(

      'name' => __('section_2_theory','TAIBA'),
      'description' => 'this is section section Here',
      'base' => 'testimonial_section',
      'category' => 'THEORY',
      'icon' => 'fa fa-map',
      'params' => array(
      	array(

            'param_name' => 'Sec_2_main_title',
            'type' => 'textfield',
            'heading'=> 'the section 2 title',
            'value' => 'placeholder',
            'group'	=>'main'
        ),

        array(

            'param_name' => 'Sec_2_main_desc',
            'type' => 'textarea',
            'heading'=> 'the section 2 Description',
            'value' => 'placeholder',
            'group'	=>'main'
        ),
      	array(
      	
      		'type'	=>'param_group',
      		'heading'	=>'section_2_item',
      		'param_name'	=>'section_2_group',
      		'params'		=>array(
      	array(

            'param_name' => 'Sec_2_title',
            'type' => 'textfield',
            'heading'=> 'the section 2 title',
            'value' => 'placeholder'
        ),

        array(

            'param_name' => 'Sec_2_desc',
            'type' => 'textfield',
            'heading'=> 'the section 2 Description',
            'value' => 'placeholder'
        ),
         array(

            'param_name' => 'Sec_2_img',
            'type' => 'attach_image',
            'heading'=> 'the section 2 Image',
            'value'	=>''
           
        ),

      		
      	)
      		),


        
        
      )

  ));
}


add_action("vc_before_init","theory_section");

 ?>