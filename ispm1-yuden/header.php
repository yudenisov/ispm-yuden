<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7"  lang="en">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8"  lang="en">
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html  lang="en">
<!--<![endif]-->
<head>
    <!--    <meta charset="utf-8"> -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
    <?php if ( get_header_image() ) : ?>
        <div id="site-header">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                <img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
            </a>
        </div>
    <?php endif; ?>

    <header id="masthead" class="site-header" role="banner">
        <div class="header-main">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 ispm-logo>">
                        <img src="/assets/img/LOGO-800x200.gif" width=400px height=100px alt="Логотип СГТУ им. Ю.А. Гагарина" />
                    </div>
                    <div class="col-sm-12 col-md-6" id="ispm-phone">
                        <h1><a href="tel:+79452998972">8(8452) 99-89-72</a></h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12" id="blank-body">
                        <?php

                        if ( is_front_page() && is_home() ) : ?>
                            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                        <?php else : ?>
                            <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                        <?php endif;

                        $description = get_bloginfo( 'description', 'display' );
                        if ( $description || is_customize_preview() ) : ?>
                            <p class="site-description"><?php echo $description; ?></p>
                        <?php endif;
                        ?>
                    </div>
                </div>
            </div>
            <div class="search-toggle">
                <a href="#search-container" class="screen-reader-text" aria-expanded="false" aria-controls="search-container"><?php _e( 'Search', 'twentyfourteen' ); ?></a>
            </div>

            <div class="header-clear">
                <hr class="header-hr" />
                <div id="ispm-background">
                    <div id="ispm-abitur">
                        <h1>
                            В ПОМОЩЬ<br />
                            АБИТУРИЕНТУ И<br />
                            РОДИТЕЛЯМ
                        </h1>
                    </div>
                    <div class="body-background">
                        <!-- <img src="assets/img/ilovesstu.jpg" /> -->
                    </div>
                </div>
                <hr class="header-hr" />
            </div>


            <!--<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
				<button class="menu-toggle"><?php /*_e( 'Primary Menu', 'twentyfourteen' );*/ ?></button>
				<a class="screen-reader-text skip-link" href="#content"><?php /* _e( 'Skip to content', 'twentyfourteen' );*/ ?></a>
				<?php /*
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'menu_class'     => 'nav-menu',
						'menu_id'        => 'primary-menu',
					)
				); */
            ?>
			</nav> -->
        </div>

        <div id="search-container" class="search-box-wrapper hide">
            <div class="search-box">
                <?php get_search_form(); ?>
            </div>
        </div>
    </header><!-- #masthead -->

    <div id="main" class="site-main">
