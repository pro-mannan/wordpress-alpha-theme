<?php add_action('widgets_init','comet_search_widget');

	function comet_search_widget(){

			register_widget('comet_search_widget');

	}

 class comet_search_widget extends WP_Widget{

 		public function __construct(){

 			parent:: __construct('comet_search_widget',' Comet Search Now',[

 				'description'			=> 'Comet Search Widget'
 			]);
 		}

 		public function widget($one, $two){ 
			$title 			=  $two['title'];
 				?>

 			<?php echo $one['before_widget']; ?>
              <?php echo $one['before_title']; ?><?php echo $title; ?><?php echo $one['after_title']; ?>
              <form method="GET">
                <input name="s" type="text" placeholder="Search.." class="form-control">
              </form>
            <?php echo $one['after_widget']; ?>


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