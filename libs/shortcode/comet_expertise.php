<?php 

add_shortcode('comet_expertise','comet_expertise');

	
	function comet_expertise($one,$two){ 

			$coment_title	= shortcode_atts([
		          'title'      			 => '',
		          'subtitle'  			 => '',
		          'pro_image'     		 => '',
		          'title_hr'     		 => '',
		          'text_color'      	 => '',


		          'expertise_group'      	 => '',
		          'service_name'      		 => '',
		          'service_description'      => '',
		          'service_icon'      	 	 => '',
		          'service_background'       => '',





			], $one);

			ob_start();
		?>

  	     <section class="p-0 b-0">
      <div class="col-md-6 col-sm-4 img-side img-left mb-0">
        <div class="img-holder"><img src="<?php echo wp_get_attachment_url( $coment_title['pro_image']); ?>" alt="" class="bg-img">
          <div class="centrize" style="color:<?php echo $coment_title['text_color']; ?>;">
            <div class="v-center">
              <div class="title txt-xs-center">
                <h4 class="upper"><?php echo $coment_title['subtitle']; ?></h4>
                <h3><?php echo $coment_title['title']; ?><span class="red-dot"></span></h3>
                <hr style="width:<?php echo $coment_title['title_hr']; ?>">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-md-offset-6 col-sm-8 col-sm-offset-4">
        <div class="row">
          <div class="services">
          	<?php 
        			$all_sevice = vc_param_group_parse_atts($coment_title['expertise_group']);

        			foreach( $all_sevice  as $one_service):
            	 ?>
            <div class="col-sm-6 border-bottom border-right">
              <div class="service"><i class="<?php echo $one_service['service_icon']; ?>"></i><span class="back-icon"><i class="icon-focus"></i></span>
                <h4><?php echo $one_service['service_name']; ?></h4>
                <hr>
                <p class="alt-paragraph"><?php echo $one_service['service_description']; ?></p>
           
              </div>
            </div>

             <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>



	<?php 
			return ob_get_clean();
}
		add_action('vc_before_init','vc_comet_expertise');

		function vc_comet_expertise(){
			vc_map([
				'name'			=> 'Comet Expertise',
				'base'			=> 'comet_expertise',
				'description'	=> 'Coment Description',
				'category'		=> 'Comet Cat Now',
				'icon'			=> get_template_directory_uri(). '/asess/comet.png',
				'params'		=> [
					[
						'param_name'			=> 'title',
						'type'					=> 'textfield',
						'heading'				=> 'Expertise Title',
					],

					[
						'param_name'			=> 'subtitle',
						'type'					=> 'textfield',
						'heading'				=> 'Expertise Subtitle',
					],

					[
			            'param_name'    => 'title_hr',
			            'type'          => 'textfield',
			            'heading'       => 'Pagination Width',
			            'description'   => 'pagination width %'
			         ],


					[
						'param_name'			=> 'text_color',
						'type'					=> 'colorpicker',
						'heading'				=> 'Text Color',
					],

					[
						'param_name'			=> 'pro_image',
						'type'					=> 'attach_image',
						'heading'				=> 'Expertise Image',
					],

					[
						'param_name'			=> 'expertise_group',
						'type'					=> 'param_group',
						'heading'				=> 'Expertise Sevvices',
						'params'				=> [
							[
								'param_name'		=> 'service_name',
								'type'				=> 'textfield',
								'heading'			=> 'Service Title'
							],

							[
								'param_name'		=> 'service_description',
								'type'				=> 'textarea',
								'heading'			=> 'Description Title'
							],

							[
								'param_name'		=> 'service_icon',
								'type'				=> 'dropdown',
								'heading'			=> 'Service Icons',
								'value'				=> [
									'Focus'			=> 'icon-focus',
									'Layers'		=> 'icon-layers',
									'Mobile'		=> 'icon-mobile',
									'Globe'			=> 'icon-globe',

								]		
							],

							[
								'param_name'		=> 'service_background',
								'type'				=> 'colorpicker',
								'heading'			=> 'Service Background Color'
							]

						]
					],



				]
			]);
		}



 ?>