<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CometPro
 */
    global $sumon;
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" href="<?php echo $sumon['comet_favicon_logo']['url']; ?>" type="image/x-icon">
    
    <!--if lt IE 9
    script(src='http://html5shim.googlecode.com/svn/trunk/html5.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js')
    -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-46276885-13', 'auto');
      ga('send', 'pageview');
    </script>

    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <div id="loader">
      <div class="centrize">
        <div class="v-center">
          <div id="mask"><span></span><span></span><span></span><span></span><span></span></div>
        </div>
      </div>
    </div>
    <header id="topnav">
      <div class="container">
        <div class="logo"><a href="index.html"><img src="<?php echo $sumon['comet_light_logo']['url']; ?>" alt="" class="logo-light"><img src="<?php echo $sumon['comet_dark_logo']['url']; ?>" alt="" class="logo-dark"></a></div>
        <div class="menu-extras">

          <div class="menu-item"><a class="navbar-toggle">
              <div class="lines"><span></span><span></span><span></span></div></a></div>
        </div>
        <div id="navigation">


          <?php wp_nav_menu([

            'theme_location'        => 'mine_menu',
            'container'             => ' ',
            'menu_class'            => 'navigation-menu',
            'menu_id'               => ' ',


          ]);?>

          <!-- <ul class="navigation-menu">
            <li class="has-submenu"><a href="#">Home</a>
              <ul class="submenu megamenu">
                <li>
                  <ul>
                    <li><span>Multi Page</span></li>
                    <li><a href="index.html">Home Classic</a></li>
                    <li><a href="index-01.html">Video Background</a></li>
                    <li><a href="index-02.html">HTML5 Video BG</a></li>
                    <li><a href="index-03.html">Animated Zoom Slider</a></li>
                    <li><a href="index-04.html">Text Rotator</a></li>
                  </ul>
                </li>
              </ul>
          </ul> -->
        </div>
      </div>
    </header>