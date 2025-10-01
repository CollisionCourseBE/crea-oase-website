<?php
/**
 * Theme Header
 * 
 * This file is the header template for a WordPress theme. It is responsible
 * for generating the <head> section of the HTML document and the beginning
 * of the <body> section, including the site header. This template is 
 * essential for setting up the overall structure, styles, and scripts that
 * are required site-wide.
*/
?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <!-- Meta -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="<?php echo get_the_archive_title().' | '.get_bloginfo('name', 'raw'); ?>">
    <meta name="description" content="<?php echo get_bloginfo('description', 'raw'); ?>">
    <meta name="theme-color" content="#497B26">
    <link rel="author" href="https://www.collisioncourse.be/">
    <link rel="manifest" href="<?php echo get_template_directory_uri().'/.manifest'; ?>" crossorigin="use-credentials">
    <!-- WP header -->
    <?php wp_head(); ?>
    <!-- Vendor -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/styles/vendor/bootstrap/bootstrap.min.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/styles/vendor/owlcarousel/owl.carousel.min.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/styles/vendor/owlcarousel/owl.theme.default.min.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/styles/vendor/swiper/swiper-bundle.min.css'; ?>"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/assets/fonts/fontawesome/css/all.min.css'; ?>">
    <!-- Style -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/styles/css/main.css'; ?>">
    <!-- Title -->
    <title><?php echo get_the_archive_title().' | '.get_bloginfo('name', 'raw'); ?></title>
    <!-- Favicon -->
    <?php
    // Retrieve and include the favicon
    $site_icon_id = get_theme_mod('site_icon');
    if ($site_icon_id) {
        $site_icon_url = wp_get_attachment_url($site_icon_id);
        echo '<link rel="icon" href="' . esc_url($site_icon_url) . '" type="image/x-icon">';
    }
    ?>
</head>
<body <?php body_class(); ?> id="<?php echo 'id-' . get_the_id(); ?>">
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <div class="main-nav-mobile" id="MobileNav">
        <div class="container-fluid main-nav">
            <!-- Mobile Header -->
            <div class="header d-flex align-items-center justify-content-between py-3">
                <div class="logo">
                    <a href="<?php echo home_url(); ?>">
                        <img class="logo" src="<?php echo get_template_directory_uri().'/assets/logo/logo-crea-oase-ori.png'; ?>" alt="<?php echo __( 'Crea-oase logo in green', 'txtd-crea-oase' ); ?>">
                    </a>
                </div>
                <div class="actions">
                    <button class="mobile-menu-close" id="MobileNavClose">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu Navigation -->
            <nav class="mainmenu-nav-mobile">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'nav-main',
                    'container' => false,
                    'menu_class' => 'mainmenu-nav-wp',
                    'depth' => 2
                ));
                ?>
            </nav>
        </div>
    </div>

    <div id="main-wrapper" class="main-wrapper">
        <header class="header">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between justify-content-lg-start">
                    <!-- Logo -->
                    <div class="header-logo">
                        <a href="<?php echo home_url(); ?>">
                            <img class="logo-white" src="<?php echo get_template_directory_uri().'/assets/logo/logo-crea-oase-white.png'; ?>" alt="<?php echo __( 'Crea-Oase logo in white', 'txtd-crea-oase' ); ?>">
                        </a>
                    </div>

                    <!-- Menu -->
                    <div class="header-main-nav">
                        <nav class="mainmenu-nav">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'nav-main',
                                'container' => false,
                                'menu_class' => 'mainmenu-nav-wp d-flex gap-3', // added gap for spacing
                                'depth' => 2
                            ));
                            ?>
                        </nav>

                        <div class="actions">
                            <button class="mobile-menu-open" id="MobileNavOpen">
                                <i class="fa-solid fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <main class="main-content" id="mainContent">
            <section class="hero">
                <div class="container-fluid container-lg">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="swiper homeSwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">Slide 1</div>
                                    <div class="swiper-slide">Slide 2</div>
                                    <div class="swiper-slide">Slide 3</div>
                                    <div class="swiper-slide">Slide 4</div>
                                    <div class="swiper-slide">Slide 5</div>
                                    <div class="swiper-slide">Slide 6</div>
                                    <div class="swiper-slide">Slide 7</div>
                                    <div class="swiper-slide">Slide 8</div>
                                    <div class="swiper-slide">Slide 9</div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="inner-hero">
                                <h1 class="title hero-title">Crea-Oase</h1>
                                <h2 class="subtitle hero-subtitle">Sfeervolle, natuurlijke tuinconcepten</h2>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Nullam molestie, augue eu feugiat vestibulum, diam erat cursus quam,
                                    at commodo risus ligula eu augue. Donec gravida tristique urna, ac dapibus sapien.
                                    Etiam placerat euismod velit ac pharetra ...
                                </p>
                                <div class="wp-block-buttons is-layout-flex wp-block-buttons-is-layout-flex">
                                    <div class="wp-block-button focus">
                                        <a class="wp-block-button__link wp-element-button">test 1</a>
                                    </div>
                                    <div class="wp-block-button">
                                        <a class="wp-block-button__link wp-element-button">test 2</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
        
        
        
