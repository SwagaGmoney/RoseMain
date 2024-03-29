<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package RoseMain
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="page-wrapper">
        <!-- Main Header / Header Style Four -->
        <header class="main-header header-style-four">
            <!--Header Top-->
            <div class="header-top">
                <div class="auto-container clearfix">
                    <div class="top-left clearfix">

                        <div class="text"><span class="icon flaticon-phone-receiver"></span> Need help? Call Us Now : <a
                                href="tel:1800-456-7890" class="number">1800 456 7890</a></div>

                    </div>
                    <div class="top-right clearfix">
                        <!-- Info List -->
                        <ul class="info-list">
                            <li><a href="about.html">Our Story</a></li>
                            <li><a href="blog.html">News & Articles</a></li>
                            <li><a href="contact.html">Franchies Opportunity</a></li>
                        </ul>
                        <!--Language-->
                        <div class="language dropdown"><a class="btn btn-default dropdown-toggle" id="dropdownMenu1"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="#"> EN
                                &nbsp;<span class="fa fa-caret-down"></span></a>
                            <ul class="dropdown-menu style-one" aria-labelledby="dropdownMenu1">
                                <li><a href="#">English</a></li>
                                <li><a href="#">German</a></li>
                                <li><a href="#">Arabic</a></li>
                                <li><a href="#">Hindi</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-upper ">
                <div class="inner-container">
                    <div class="auto-container clearfix">
                        <!--Info-->
                        <div class="logo-outer ">
                            <div class="logo">
                            <a href="/">
                                <?php if ( has_custom_logo() ) : ?>
                                 <?php the_custom_logo(); ?>
                                    <?php else : ?>
                                      <img src="<?php echo get_template_directory_uri(). '/images/purple-rose.png'; ?>" alt="logo" title="">
                                     <?php endif; ?>
                              </a>
                            </div>
                        </div>
                        <!--Nav Box-->
                        <div class="nav-outer clearfix">
                            <!--Mobile Navigation Toggler For Mobile-->
                            <div class="mobile-nav-toggler"><span class="icon flaticon-menu-button"></span></div>
                            <nav class="main-menu navbar-expand-md navbar-light ">
                                <div class="navbar-header">
                                    <!-- Togg le Button -->
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="icon flaticon-menu"></span>
                                    </button>
                                </div>

                                <div class="collapse navbar-collapse clearfix  " id="navbarSupportedContent">
                                    
                                      <?php wp_nav_menu( array( 'menu_class' => 'navigation clearfix', 'container' => 'ul', )); ?>
                                   
                                </div>
                            </nav>
                            <!-- Main Menu End-->

                            <!-- Main Menu End-->
                            <div class="outer-box clearfix">
                                <!-- Button Box -->
                                <div class="btn-box">
                                    <a href="contact.html" class="theme-btn btn-style-one"><span class="txt">Ask a
                                            Question</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Header Upper-->

            <!-- Mobile Menu  -->
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn"><span class="icon flaticon-cancel-1"></span></div>

                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                <nav class="menu-box">
                    <div class="nav-logo"><a href="index-2.html"><img src="<?php echo get_template_directory_uri().' /images/nav-logo.png';?>" alt="" title=""></a>
                    </div>

                    <ul class="navigation clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </ul>
                </nav>
            </div><!-- End Mobile Menu -->

        </header>
        <!-- End Main Header -->
        <!-- End Header Top -->