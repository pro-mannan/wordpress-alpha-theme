<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package CometPro
 */

get_header();
?>
<section class="page-title parallax">
      <div data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri() ?>/asess/images/bg/19.jpg" class="parallax-bg"></div>
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
        	<?php while( have_posts()) : the_post(); ?>
	         <article class="post-single">
	              <div class="post-info">
	                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	                <h6 class="upper"><span>By</span><a href="<?php the_permalink(); ?>"> <?php the_author(); ?></a><span class="dot"></span><span><?php the_time('d M,Y'); ?></span><span class="dot"></span><a href="<?php the_permalink(); ?>" class="post-tag"><?php the_tags(); ?></a></h6>
	              </div>
	              <div class="post-media"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
	              <div class="post-body">
	                <?php the_content();?>
	              </div>
	            </article>
        <?php endwhile; ?>

          <div id="comments">
            <h5 class="upper"><?php comments_popup_link('No Comment',' 1 Comment','% Comments'); ?></h5>
           
          </div>
          <div id="respond">
            <h5 class="upper">Leave a comment</h5>

             <?php comments_template(); ?>
          </div>
        </div>
        <div class="col-md-3 col-md-offset-1">
          <div class="sidebar hidden-sm hidden-xs">
            <?php get_sidebar(); ?>
          </div>
        </div>
      </div>
    </section>





<?php
get_footer();
