<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CometPro
 */

get_header();
?>


    <section class="page-title parallax">
      <div data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri() ?>/asess/images/bg/18.jpg" class="parallax-bg"></div>
      <div class="parallax-overlay">
        <div class="centrize">
          <div class="v-center">
            <div class="container">
              <div class="title center">
                <h1 class="upper">This is our blog<span class="red-dot"></span></h1>
                <h4>We have a few tips for you.</h4>
                <hr>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="col-md-8">
          <div class="blog-posts">

            <?php while(have_posts()): the_post() ?>
              <?php get_template_part('template-parts/content',get_post_format()); ?>
          <?php endwhile; ?>
          </div>
          <ul class="pagination">


            <?php the_posts_pagination([

                'next_text'           => '<i class="ti-arrow-right"></i>',
                'prev_text'           => '<i class="ti-arrow-left"></i>',
                'type'                => 'list'


            ]); ?>
            
          </ul>
        </div>
        <div class="col-md-3 col-md-offset-1">
        	<!-- sidebar depandanse -->
          <?php get_sidebar(); ?>
        </div>
      </div>
    </section>



   

	
<?php
get_footer();
