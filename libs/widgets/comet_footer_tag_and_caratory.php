<?php add_action('widgets_init','comet_footer_tag_and_caratory');

	function comet_footer_tag_and_caratory(){

			register_widget('comet_footer_tag_and_caratory');

	}

 class comet_footer_tag_and_caratory extends WP_Widget{

 		public function __construct(){

 			parent:: __construct('comet_footer_tag_and_caratory',' Comet tag and catagory',[

 				'description'			=> 'Comet tag and catagory'
 			]);
 		}

 		public function widget($one, $two){ 
			$title 			=  $two['title'];
 				?>
		<?php echo $one['before_widget']; ?>
             <?php echo $one['before_title']; ?><?php echo $title; ?><?php echo $one['after_title']; ?>
              <ul class="list-unstyled">
                <li><a href="portfolio-single-1.html">Neleman Cava</a></li>
                <li><a href="portfolio-single-2.html">Sweet Lane</a></li>
                <li><a href="portfolio-single-3.html">Jeff Burger</a></li>
                <li><a href="portfolio-single-1.html">Juice Meds</a></li>
              </ul>
          <?php echo $one['before_widget']; ?>


 		<?php }

 		public function form($two){

 			if(isset($two['title'])){
 				$title 			=  $two['title'];
 			}

 			?>

 			<p>
 				<label>Widget Title</label>
 				<input name="<?php echo $this -> get_field_name('title') ?>" class="widefat" value="<?php echo $title; ?>" type="text">
 				
 			</p>


 	<?php 	}


	





 }



















 ?>