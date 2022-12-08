<?php add_action('widgets_init','comet_sidebar_title');

	function comet_sidebar_title(){

			register_widget('comet_sidebar_title');

	}

 class comet_sidebar_title extends WP_Widget{

 		public function __construct(){

 			parent:: __construct('comet_sidebar_title',' Comet Title Sidebar',[

 				'description'			=> 'Comet Title Sidebar'
 			]);
 		}

 		public function widget($one, $two){ 
			$title 			=  $two['title'];
 				?>
		<?php echo $one['before_widget']; ?>
             <?php echo $one['before_title']; ?><?php echo $title; ?><?php echo $one['after_title']; ?>
              <ul class="nav">
              	<?php 
              		$widgets_title 	= new WP_Query([
              			'post_type'				=> 'post',
              			'posts_per_page'		=> 5
              		]);

              	while( $widgets_title  -> have_posts()) : $widgets_title -> the_post()
              	 ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?><i class="ti-arrow-right"></i><span><?php the_time('d D, Y'); ?></span></a></li>
            <?php endwhile; ?>
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