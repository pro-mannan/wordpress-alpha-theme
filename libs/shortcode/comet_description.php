<?php 

add_shortcode('comet_description','comet_description');

	
	function comet_description($one,$two){ 

			$coment_title	= shortcode_atts([
          'description'       => '',
          'font_size'         => '',
          'title_align'       => '',

			], $one);

			ob_start();
		?>

    <p style="font-size:<?php echo $coment_title['font_size']; ?>;" class="lead-text serif text-<?php echo $coment_title['title_align']; ?>"><?php echo $coment_title['description']; ?></p>

        



	<?php 
			return ob_get_clean();
}
		add_action('vc_before_init','vc_comet_description');

		function vc_comet_description(){
			vc_map([
				'name'			=> 'Comet Description',
				'base'			=> 'comet_description',
				'description'	=> 'Coment Description',
				'category'		=> 'Comet Cat Now',
				'icon'			=> get_template_directory_uri(). '/asess/comet.png',
				'params'		=> [
					[
						'param_name'		=> 'description',
						'type'					=> 'textarea',
						'heading'				=> 'Description',
					],

		          [
		            'param_name'    => 'font_size',
		            'type'           => 'textfield',
		            'heading'       => 'Font Size',
		          ],

		          [
		            'param_name'    => 'title_align',
		            'type'          => 'dropdown',
		            'heading'       => 'Pagination Width',
		            'value'         => [
		              '--Select Now--'       => '',
		              'Center'               => 'center',
		              'Right'                => 'right',
		              'Left'                 => 'left'

		            ],
		            'description'   => 'pagination width %'
		          ]
				]
			]);
		}



 ?>