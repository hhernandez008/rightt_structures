<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <title>Rightt Structures</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/css?family=Signika:300,400,600,700&amp;subset=latin-ext" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
		  <style type="text/css">
        .navigate nav ul {
            padding: 0;
            width: min-content;
            padding-right: 20px;
            border-right: 1px solid #000;
            margin: 0;
        }
        .navigate {
            display: inherit;
            height: min-content;
        }
    </style>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>><div id="page" class="site">
<header>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-6 navigate">
                    <nav id="navigate">
                        <?php
                                    wp_nav_menu( array(
                                        'theme_location' => 'primary'
                                     ) );
                                ?>
                        <!--ul>
                            <li><a href="about.html">About</a></li>
                            <li><a href="services.html">Services</a></li>
                            <li><a href="projects.html">Projects</a></li>
                        </-->
                    </nav>
                    <?php
                                    wp_nav_menu( array(
                                        'menu' => 'arp_menu',
                                         'menu_class'     => 'services-sec2'
                                     ) );
                                ?>
                    <!--ul class="services-sec2">
                        <li class="accessM"><a href="#">ACCESS</a></li>
                        <li class="resolveM"><a href="#">RESOLVE</a></li>
                        <li class="executeM"><a href="#">EXECUTE</a></li>
                    </ul-->


                    <nav role="navigation" id="navigation">
                        <div id="menuToggle">
                            <!--
                            A fake / hidden checkbox is used as click reciever,
                            so you can use the :checked selector on it.
                            -->
                            <input type="checkbox" />

                            <!--
                            Some spans to act as a hamburger.

                            They are acting like a real hamburger,
                            not that McDonalds stuff.
                            -->
                            <span></span>
                            <span></span>
                            <span></span>
                            <!--
                            Too bad the menu has to be inside of the button
                            but hey, it's pure CSS magic.
                            -->
                            <!--ul id="menu">
                                <li><a href="about.html">About</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li class="drop-down"><a href="projects.html">Projects</a>
                                    <ul>
                                        <li><a href="#">ACCESS</a></li>
                                        <li><a href="#">RESOLVE</a></li>
                                        <li><a href="#">EXECUTE</a></li>
                                    </ul>
                                </li>
                                <p>949.494.6600 | info@righttstructuresinc.com</p>
                            </ul-->
                                    <?php
                                    wp_nav_menu( array(
                                        'menu' => 'mobile_inner',
                                        'menu_id'     => 'menu',
                                        'menu_class'     => '',
                                     ) );
                                ?>
                        </div>
                    </nav>


                </div>
                <div class="col-md-6 logo-d">
                    <div class="logo">
                        <?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
                                   <?php dynamic_sidebar( 'sidebar-4' ); ?>
                              <?php endif; ?>
                        <a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png"></a>
                    </div>
                </div>
            </div>
        </div>
    </header>