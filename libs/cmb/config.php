<?php 


	function post_options_box(){
		//post format audio box
		$cmb2_box 	= new_cmb2_box([
			'title'				=> 'Audio Box',
			'id'				=> 'audio_box',
			'object_types'		=> ['post']
		]);

		$cmb2_box -> add_field([
			'name'			=> 'Audio Link',
			'type'			=> 'text',
			'id'			=> 'audio_link'
		]);

		//post format video box 
		$cmb2_box_video 		= new_cmb2_box([
			'title'				=> 'Video Box',
			'id'				=> 'video_box',
			'object_types'		=> ['post']

		]);


		$cmb2_box_video -> add_field([
			'name'				=> 'Video Link',
			'id'				=> 'video_link',
			'type'				=> 'oEmbed'
		]);

		//post forments gellary box 
		$cmb2_box_gellary 		= new_cmb2_box([
			'title'				=> 'Gellary Box',
			'id'				=> 'gellary_box',
			'object_types'		=> ['post']

		]);

		$cmb2_box_gellary -> add_field([
			'name'				=> 'Gellary Images',
			'id'				=> 'gellary_link',
			'type'				=> 'file_list'
		]);




	}



	add_action('cmb2_init','post_options_box');



	//page sidebar cmb2 options create now

	function page_sidebar_optios(){

		$page_sidebar 	= new_cmb2_box([
			'title'				=> 'Header Parallax',
			'id'				=> 'header_parallax',
			'object_types'		=> ['page']
		]);

		$page_sidebar -> add_field([
			'name'			=> 'Parallax Title',
			'type'			=> 'text',
			'id'			=> 'header_title',
		]);

		$page_sidebar -> add_field([
			'name'			=> 'Sub Title',
			'type'			=> 'text',
			'id'			=> 'header_subtitle',
		]);

		$page_sidebar -> add_field([
			'name'			=> 'Parallax Image',
			'type'			=> 'file',
			'id'			=> 'header_image',
		]);

	}

	add_action('cmb2_init','page_sidebar_optios');















 ?>