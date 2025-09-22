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
