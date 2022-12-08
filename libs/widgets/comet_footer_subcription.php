<?php add_action('widgets_init','comet_footer_subcription');

	function comet_footer_subcription(){

			register_widget('comet_footer_subcription');

	}

 class comet_footer_subcription extends WP_Widget{

 		public function __construct(){

 			parent:: __construct('comet_footer_subcription',' Comet Subscribetion',[

 				'description'			=> 'Comet Subscribetion'
 			]);
 		}

 		public function widget($one, $two){ 
			$title 			=  $two['title'];
      $subtitle      =  $two['subtitle'];
      $btn_s      =  $two['btn_s'];
 				?>
		<?php echo $one['before_widget']; ?>
             <?php echo $one['before_title']; ?><?php echo $title; ?><?php echo $one['after_title']; ?>
               <p><?php echo $subtitle; ?></p>
              <div class="footer-newsletter">
                <div class="inline-form">
                  <div class="input-group">
                    <input type="text" placeholder="Your Email" class="form-control"><span class="input-group-btn">
                      <button type="button" class="btn btn-color"><?php echo $btn_s; ?></button></span>
                  </div>
                </div>
              </div>
          <?php echo $one['before_widget']; ?>


 		<?php }

 		public function form($two){

 			if(isset($two['title'])){
 				$title 			=  $two['title'];
 			}

      if(isset($two['title'])){
        $subtitle      =  $two['subtitle'];
      }

      if(isset($two['title'])){
        $btn_s      =  $two['btn_s'];
      }

 			?>

 			<p>
 				<label> Widget Title</label>
 				<input name="<?php echo $this -> get_field_name('title') ?>" class="widefat" value="<?php echo $title; ?>" type="text">
 				
 			</p>

      <p>
        <label> Subscribe Subtitle</label>
        <input name="<?php echo $this -> get_field_name('subtitle') ?>" class="widefat" value="<?php echo $subtitle; ?>" type="text">
        
      </p>

      <p>
        <label>Button Text</label>
        <input name="<?php echo $this -> get_field_name('btn_s') ?>" class="widefat" value="<?php echo $btn_s; ?>" type="text">
        
      </p>


 	<?php 	}


	





 }



















 ?>