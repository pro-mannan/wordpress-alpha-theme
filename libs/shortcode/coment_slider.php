<?php 

add_shortcode('comet_slider','comet_slider');

	
	function comet_slider($one,$two){ 

			$coment_title_box 	= shortcode_atts([




			], $one);

			ob_start();
		?>


	<section id="home">
      <div id="home-slider" class="flexslider">
        <ul class="slides">
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/asess/images/bg/1.jpg" alt="">
            <div class="slide-wrap">
              <div class="slide-content">
                <div class="container">
                  <h1>Digital Power<span class="red-dot"></span></h1>
                  <h6>We are a small design studio from San Francisco.</h6>
                  <p><a href="#" class="btn btn-light-out">Read More</a><a href="#" class="btn btn-color btn-full">Services</a></p>
                </div>
              </div>
            </div>
          </li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/asess/images/bg/2.jpg" alt="">
            <div class="slide-wrap">
              <div class="slide-content">
                <div class="container">
                  <h1>We Are Comet<span class="red-dot"></span></h1>
                  <h6>Experts in web design and development.</h6>
                  <p><a href="#" class="btn btn-color">Explore</a><a href="#" class="btn btn-light-out">Join us</a></p>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </section>

	<?php 
			return ob_get_clean();
}
		add_action('vc_before_init','vc_comet_our_client');

		function vc_comet_our_client(){
			vc_map([
				'name'			=> 'Comet Slider',
				'base'			=> 'comet_slider',
				'description'	=> 'Coment Pro Slider',
				'category'		=> 'Comet Now',
				'icon'			=> get_template_directory_uri(). '/asess/comet.png',
				'params'		=> [
					[
						'param_name'			=> 'client_group',
						'type'					=> 'textfield',
						'heading'				=> 'Add New Client',
					]
				]
			]);
		}



 ?>