<?php 

add_shortcode('comet_title','comet_title');

	
	function comet_title($one,$two){ 

			$coment_title	= shortcode_atts([
          'title'       => '',
          'subtitle'       => '',
          'title_hr'       => '',
          'title_align'       => '',

			], $one);

			ob_start();
		?>

         <div class="title <?php echo $coment_title['title_align']; ?>">
            <h4 class="upper"><?php echo $coment_title['subtitle']; ?></h4>
            <h2><?php echo $coment_title['title']; ?><span class="red-dot"></span></h2>
            <hr style="width:<?php echo $coment_title['title_hr']; ?>;">
        </div>



	<?php 
			return ob_get_clean();
}
		add_action('vc_before_init','vc_comet_title');

		function vc_comet_title(){
			vc_map([
				'name'			=> 'Comet Title',
				'base'			=> 'comet_title',
				'description'	=> 'Coment Pro Title',
				'category'		=> 'Comet Cat Now',
				'icon'			=> get_template_directory_uri(). '/asess/comet.png',
				'params'		=> [
					[
						'param_name'		=> 'title',
						'type'					=> 'textfield',
						'heading'				=> 'Title',
					],

          [
            'param_name'    => 'subtitle',
            'type'          => 'textfield',
            'heading'       => 'Sub Title',
          ],

          [
            'param_name'    => 'title_hr',
            'type'          => 'textfield',
            'heading'       => 'Pagination Width',
            'description'   => 'pagination width %'
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