<?php 

	function comet_comment_replay($one,$two,$three){

		?>
			 <li>
                <div class="comment">
                  <div class="comment-pic">

                  	<?php echo get_avatar($one,'','','',[
                  		'class'			=> 'img-circle',
                  	]); ?>

                  </div>
                  <div class="comment-text">
                    <h5 class="upper"><?php comment_author(); ?></h5><span class="comment-date">Posted on <?php comment_date('F d, Y'); ?> at <?php comment_time('g:i.a'); ?></span>
                    <p><?php comment_text() ?></p>
                   <?php comment_reply_link(array_merge($two,[
                   		'depth'			=> $three,
                   		'max_depth'		=> $two['max_depth']
                   ])); ?>
                  </div>
                </div>
              </li>

	<?php }




	 ?>