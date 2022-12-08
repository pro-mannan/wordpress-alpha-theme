<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CometPro
 */
      global $sumon;
?>

 <footer id="footer-widgets">
      <div class="container">
        <div class="go-top"><a href="#top"><i class="ti-arrow-up"></i></a></div>
        <div class="col-md-6 ov-h">


          <div class="col-sm-4">

            <?php dynamic_sidebar('fsidebar1');?>

<!--             <div class="widget">
              <h6 class="upper">About Comet</h6>
              <p><span>Fourth Floor</span><span>New York, NY 10011</span><span>hello@comet.com</span></p><a href="#" class="btn btn-color-out btn-sm">Hire Us!</a>
            </div> -->
          </div>
          <div class="col-sm-4">
            <div class="widget">
              <h6 class="upper">Culture</h6>
              <ul class="list-unstyled">
                <li><a href="#">Team</a></li>
                <li><a href="#">Process</a></li>
                <li><a href="#">Story</a></li>
                <li><a href="#">Careers</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="widget">
              <h6 class="upper">Case Studies</h6>
              <ul class="list-unstyled">
                <li><a href="portfolio-single-1.html">Neleman Cava                </a></li>
                <li><a href="portfolio-single-2.html">Sweet Lane                </a></li>
                <li><a href="portfolio-single-3.html">Jeff Burger                </a></li>
                <li><a href="portfolio-single-1.html">Juice Meds                </a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-md-offset-2">
          <div class="col-md-12">
           <?php dynamic_sidebar('fsidebar3');?>
          </div>
        </div>
      </div>
    </footer>
    <footer id="footer">
      <div class="container">
        <div class="footer-wrap">
          <div class="col-md-3">
            <div class="copy-text">
              <p><i class="icon-heart red mr-15"></i><?php echo $sumon['crt']; ?></p>
            </div>
          </div>
          <div class="col-md-6">
            <?php if($sumon['foof'] == 1) :  ?>
              <?php wp_nav_menu([
                'theme_location'      => 'footer_menu',
                'menu_class'          => 'list-inline',
                'fallback_cb'         => 'footer_menu'
              ]) ?>

            <?php endif; ?>

          </div>
          <div class="col-md-3">
            <div class="footer-social">
              <ul>
                <li><a target="_blank" href="<?php echo  esc_url($sumon['cfb']); ?>"><i class="ti-facebook"></i></a></li>
                <li><a target="_blank" href="<?php echo  esc_url($sumon['ctw']); ?>"><i class="ti-twitter-alt"></i></a></li>
                <li><a target="_blank" href="<?php echo  esc_url($sumon['cll']); ?>"><i class="ti-linkedin"></i></a></li>
                <li><a target="_blank" href="<?php echo  esc_url($sumon['cil']); ?>"><i class="ti-instagram"></i></a></li>
                <li><a target="_blank" href="<?php echo  esc_url($sumon['cbl']); ?>"><i class="ti-dribbble"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
   
    <?php wp_footer(); ?>
  </body>


</html>
