<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CometPro
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
	

?>


	<ul class="comments-list">
		<?php 

			wp_list_comments([
				'callback'				=> 'comet_comment_replay'
			]);





	//comment box hear now
	comment_form();
		 ?>

		</ul>