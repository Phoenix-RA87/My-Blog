<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Personal_Info_by_SpiderBuzz
 */
?><!DOCTYPE html>
<html   <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"> 
<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<div id="wraper">
    <?php if( perosnal_info_is_blog() or is_front_page() or is_page_template('page-templates/home.php')) : ?>
    <!-- Start Home-header section -->
   
    <section class="home-header border-bottom padding-block header_image" style="background:url(<?php echo esc_url(get_header_image())?>) center no-repeat;">
    
        <!-- start container -->
        <div class="container">
            <!-- start row -->
            <div class="row d-flex"> 
                <?php 
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                    $tagline = get_option( 'blogdescription' );
                   
                if($image[0]): $col=9; ?>
                <div class="col-xs-12 col-sm-3 col-lg-3 text-right profile-img">
                    <!-- Your foto -->
                    <div class="foto">
                        <img src="<?php echo esc_url($image[0]); ?>" alt="<?php bloginfo('name'); ?>" width="232" height="232">
                    </div>
                    <!-- end your foto -->
                </div>
                <?php else: $col=12;endif; ?>
                <div class="col-xs-12 col-sm-<?php echo esc_attr($col);?> col-lg-<?php echo esc_attr($col); if($col == 12) echo " t-center";?>">

                    <a href="<?php echo esc_url(home_url('/')); ?>"><h1 class="site-title" style="color:#<?php echo esc_attr(get_header_textcolor()); ?>" class="title"><?php esc_attr(bloginfo('name')); ?></h1></a>
                    
                    <h3 class="site-description sub-title"><?php echo html_entity_decode($tagline); ?></h3>

                    <!-- social icon -->
                    <div class="social">
                    <ul class="animated fadeIn visible" data-animation="fadeIn" data-animation-delay="600">
                            <?php if(get_theme_mod('facebook_url')): ?>
                            <li><a target="_blank" class="facebook ukie-icons hover-animate" href="<?php echo esc_url(get_theme_mod('facebook_url')); ?>" title="Facebook" target="_blank" ><i class="fa fa-facebook"></i></a></li>
                            <?php endif; ?>
                            <?php if(get_theme_mod('twitter_url')): ?>
                            <li><a target="_blank" class="twitter ukie-icons hover-animate" href="<?php echo esc_url(get_theme_mod('twitter_url')); ?>" title="Twitter" target="_blank" ><i class="fa fa-twitter"></i></a></li>
                            <?php endif; ?>
                            <?php if(get_theme_mod('linkedin_url')): ?>
                            <li><a target="_blank" class="linkedin ukie-icons hover-animate" href="<?php  echo esc_url(get_theme_mod('linkedin_url')); ?>" title="LinkedIn" target="_blank" ><i class="fa fa-linkedin"></i></a></li>
                            <?php endif; ?>
                            <?php if(get_theme_mod('google_plus_url')): ?>
                            <li><a target="_blank" class="google-plus ukie-icons hover-animate" href="<?php echo esc_url(get_theme_mod('google_plus_url')); ?>" title="Google Plus" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                            <?php endif; ?>
                            <?php if(get_theme_mod('wordpress_url')): ?>
                            <li><a target="_blank" class="wp ukie-icons hover-animate" href="<?php  echo esc_url(get_theme_mod('wordpress_url')); ?>" title="WordPress" target="_blank" ><i class="fa fa-wordpress"></i></a></li>
                            <?php endif; ?>


                            <?php if(get_theme_mod('slack_url')): ?>
                            <li><a target="_blank" class="slack ukie-icons hover-animate" href="<?php  echo esc_url(get_theme_mod('slack_url')); ?>" title="Slack" target="_blank" ><i class="fa fa-slack"></i></a></li>
                            <?php endif; ?>

                            <?php if(get_theme_mod('skype_url')): ?>
                            <li><a target="_blank" class="skype ukie-icons hover-animate" href="<?php  echo esc_url(get_theme_mod('skype_url')); ?>" title="Skype" target="_blank" ><i class="fa fa-skype"></i></a></li>
                            <?php endif; ?>
                            
                            <?php if(get_theme_mod('instagram_url')): ?>
                            <li><a target="_blank" class="instagram ukie-icons hover-animate" href="<?php  echo esc_url(get_theme_mod('instagram_url')); ?>" title="Instagram" target="_blank" ><i class="fa fa-instagram"></i></a></li>
                            <?php endif; ?>

                            <?php if(get_theme_mod('upwork_url')): ?>
                            <li><a target="_blank" class="upwork ukie-icons" href="<?php  echo esc_url(get_theme_mod('upwork_url')); ?>" title="Upwork" target="_blank" ><i class="fa fa-upwork"></i></a></li>
                            <?php endif; ?>
                            
                            <?php if(get_theme_mod('github_url')): ?>
                            <li><a target="_blank" class="github ukie-icons" href="<?php  echo esc_url(get_theme_mod('github_url')); ?>" title="Github" target="_blank" ><i class="fa fa-"></i></a></li>
                            <?php endif; ?>

                           

                    </ul>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- End Home-header section -->
    <!-- Start Menu section -->
    <nav class="menu">
        <!-- start container -->
        <div class="container">
            <!-- start row -->
            <div class="row"><div class="menu_cent">
                <div id="main-nav" class="col-xs-12 col-sm-12 col-lg-12">
                    <?php 
                      wp_nav_menu( array(
                            'theme_location'    => 'primary',
                            'container' => '',
                            'menu_class'        =>'perosnal_info_menu nav navbar-nav menu clearfix',
                            'menu_id'           => 'perosnal_info_menu'
                        ));
                    ?>
                    
                </div></div>
            </div>
            <!-- end row -->
           
        </div>
        <!-- end container -->
    </nav>

    <!-- End Menu section -->
    <?php elseif( !is_page_template() and !is_search()): ?>
        <!-- Start Head section -->
        <?php while ( have_posts() ) : the_post(); ?>
        <header class="head">
            <!-- start container -->
            <div class="container">
                <!-- start row -->
                <div class="row">
                    <div class="col-xs-8 col-sm-11 col-lg-11">
                    <img class="logo-page" src="<?php echo esc_url( get_template_directory_uri() ) ?>/inc/img/portfolio.png" alt="portfolio">
                        <!-- Title Page -->
                        <h2 class="title"><?php the_title() ?></h2>
                        
                        <h4 class="sub-title"></h4>
                    </div>
                    <div class="col-xs-4 col-sm-1 col-lg-1 text-right">
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="btn-close hover-animate ajaxcontent-close"><img class="logo-page" src="<?php echo esc_url( get_template_directory_uri() ) ?>/inc/img/close.svg" ></a>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </header>
        <!-- End Head section -->
        <?php endwhile; ?>  
    <?php elseif( is_search()): ?>
        <header class="head">
            <!-- start container -->
            <div class="container">
                <!-- start row -->
                <div class="row">
                    <div class="col-xs-8 col-sm-11 col-lg-11">
                    <img class="logo-page" src="<?php echo esc_url( get_template_directory_uri() ) ?>/inc/img/portfolio.png" alt="portfolio">
                        <!-- Title Page -->
                        <h2 class="title"><?php printf( 'Search Results for: %s', '<span>' . get_search_query() . '</span>' ); ?></h2>
                    </div>
                    <div class="col-xs-4 col-sm-1 col-lg-1 text-right">
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="btn-close hover-animate ajaxcontent-close"><img class="logo-page" src="<?php echo esc_url( get_template_directory_uri() ) ?>/inc/img/close.svg" ></a>
                    </div>

                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </header>
    <?php endif; ?>