<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CometPro
 */

get_header();
?>

<?php while( have_posts()) : the_post() ?>
	<section class="page-title parallax">
      <div data-parallax="scroll" data-image-src="<?php echo get_post_meta(get_the_ID(),'header_image',true); ?>" class="parallax-bg"></div>
      <div class="parallax-overlay">
        <div class="centrize">
          <div class="v-center">
            <div class="container">
              <div class="title center">
                <h1 class="upper"><span class="red-dot"><?php echo get_post_meta(get_the_ID(),'header_title',true); ?></span></h1>
                <h4><?php echo get_post_meta(get_the_ID(),'header_subtitle',true); ?></h4>
                <hr>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php endwhile; ?>


	<!-- Page All Element Hear Now-->
	<?php while(have_posts()) : the_post(); ?>
					<?php the_content(); ?>
	<?php endwhile; ?>
   
	

<?php
get_footer();
