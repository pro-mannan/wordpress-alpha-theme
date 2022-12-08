<?php add_action('widgets_init','coment_footer_about_us_widget');

	function coment_footer_about_us_widget(){

			register_widget('coment_footer_about_us_widget');

	}

 class coment_footer_about_us_widget extends WP_Widget{

 		public function __construct(){

 			parent:: __construct('coment_footer_about_us_widget','Comet Footer About Us',[

 				'description'			=> 'Comet Footer About Us'
 			]);
 		}

 		public function widget($one, $two){ 
			$title 			=  $two['title'];
      $desc       =  $two['desc'];
      $btn_text     =  $two['btn-text'];
      $btn_url      =  $two['btn-url'];
 				?>

           <div class="widget">
              <h6 class="upper">About Comet</h6>
              <p><?php echo  $desc; ?></p><a href="<?php echo $btn_url; ?>" class="btn btn-color-out btn-sm"><?php echo $btn_text; ?></a>
            </div>
		

 		<?php }

 		public function form($two){

 			if(isset($two['title'])){
 				$title 			=  $two['title'];
       
 			}
      if(isset($two['desc'])){
         $desc      =  $two['desc'];
       
      }

      if(isset($two['btn-text'])){
         $btn_text     =  $two['btn-text'];
       
      }

      if(isset($two['btn-url'])){
         $btn_url      =  $two['btn-url'];
       
      }

 			?>

 			<p>
 				<label>Widget Title</label>
 				<input name="<?php echo $this -> get_field_name('title') ?>" class="widefat" value="<?php echo $title; ?>" type="text">
 				
 			</p>

      <p>
        <label>Description</label>
        <textarea name="<?php echo $this -> get_field_name('desc') ?>" class="widefat" ><?php if(isset($desc)){echo $desc;}  ?></textarea>
        
      </p>

      <p>
        <label>Button Text</label>
        <input name="<?php echo $this -> get_field_name('btn-text') ?>" class="widefat" value="<?php echo $btn_text; ?>" type="text">
        
      </p>

      <p>
        <label>Button URL</label>
        <input name="<?php echo $this -> get_field_name('btn-url') ?>" class="widefat" value="<?php echo $btn_url; ?>" type="text">
        
      </p>



 	<?php 	}


	





 }



















 ?>