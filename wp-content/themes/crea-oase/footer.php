<?php
/**
 * Theme Footer
 * 
 * This file is the footer template for a WordPress theme.
 * It is responsible for generating the closing sections of the HTML document, including the site footer.
 * This template typically includes closing tags for the main content area,
 * any additional footer widgets or content, and the footer navigation.
 * Additionally, it ensures that all necessary scripts are properly included before the end of the body tag.
 * 
 * The footer template is essential for completing the HTML structure of the page,
 * and often contains elements like copyright information, 
 * social media links, and other site-wide footer content.
 * It ensures that the site maintains a consistent look and feel across all pages.
 */
?>
    <!-- WP Footer -->
    <?php wp_footer(); ?>
    <!-- Scripts -->
    <script src="<?php echo get_template_directory_uri().'/scripts/vendor/jquery/jquery-3.7.1.min.js'; ?>"></script>
    <script src="<?php echo get_template_directory_uri().'/scripts/vendor/modernizr/modernizr.min.js'; ?>"></script>
    <script src="<?php echo get_template_directory_uri().'/scripts/vendor/bootstrap/bootstrap.bundle.min.js'; ?>"></script>
    <script src="<?php echo get_template_directory_uri().'/scripts/vendor/owlcarousel/owl.carousel.min.js'; ?>"></script>
    <script src="<?php echo get_template_directory_uri().'/scripts/vendor/swiper/swiper-bundle.min.js'; ?>"></script>
    <!-- Site Scripts -->
    <script src="<?php echo get_template_directory_uri().'/scripts/main.min.js'; ?>"></script>
</body>
</html>
