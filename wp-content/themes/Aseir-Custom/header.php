<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?>
<!doctype html>
<html id="aseir-custom-html" <?php language_attributes(); ?>>
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-151965980-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-151965980-1');
        </script>
        <!-- End : Global site tag -->

        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2.0">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

        <?php wp_head(); ?>
    </head>

<body id="aseir-custom-body" <?php body_class('aseir-custom-body'); ?>>

<?php do_action( 'storefront_before_site' ); ?>

<div id="page" class="aseir-custom-page hfeed site">
	<?php do_action( 'storefront_before_header' ); ?>

	<header id="masthead"
            class="aseir-custom-header site-header"
            role="banner"
            style="<?php storefront_header_styles(); ?>">
        <section class="aseir-header_section col-full">
            <!-- Logo -->
            <h1 class="aseir-header-logo_h1">
                <a class="aseir-header-logo_link-icon" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <svg version="1.1" id="aseir-logo-icon" class="aseir-logo-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 357.7 248.8" style="enable-background:new 0 0 357.7 248.8;" xml:space="preserve">
                        <style type="text/css">
                            svg#aseir-logo-icon .st0{fill:#D4AF37;}
                            svg#aseir-logo-icon .st1{fill:none;stroke:#D4AF37;stroke-width:2;stroke-miterlimit:10;}
                        </style>
                        <polygon class="st0" points="325.1,248.8 32.6,248.8 113.9,108.1 121.4,108.1 43.8,242.3 313.8,242.3 236.2,108.1 243.8,108.1 "></polygon><g><polygon class="st0" points="357.7,97.9 313,98.4 268.2,98.7 178.8,98.9 89.4,98.7 44.7,98.4 0,97.9 44.7,97.4 89.4,97.2 178.8,96.9 268.2,97.2 313,97.4 "></polygon></g><polyline class="st1" points="123.4,97.9 178.8,2 234.2,97.9 "></polyline>
                    </svg>
                </a>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="aseir-header-logo_link-text" rel="home">
                    <svg version="1.1" id="aseir-logo-text" class="aseir-logo-text" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000.1 74.9" style="enable-background:new 0 0 1000.1 74.9;" xml:space="preserve">
					    <style type="text/css">svg#aseir-logo-text .st0{fill:#FFFFFF;}</style>
                        <path id="M" class="st0" d="M1000.1,63.8c0,0.5-0.1,0.8-0.3,0.8c-2.4,0-4.3,0-5.7-0.1l-7.7-0.1l-8.9,0.1c-1.5,0.1-3.5,0.1-6.1,0.1c-0.2,0-0.3-0.3-0.3-0.8s0.1-0.8,0.3-0.8c3.5,0,6-0.2,7.6-0.6s2.7-1.3,3.3-2.5c0.6-1.3,0.8-3.2,0.7-5.8l-1.4-44.8l-22.9,54.4c-0.2,0.3-0.5,0.5-0.9,0.5c-0.5,0-0.9-0.2,2.2-0.5l-24.7-49.2l-3.9-1.2l-1.3,37.8c-0.1,4.4,0.5,7.5,1.7,9.3s3.4,2.7,6.5,2.7c0.3,0,0.4,0.3,0.4,0.8s-0.1,0.8-0.4,0.8c-1.8,0-3.2,0-4.2-0.1l-5.5-0.1l-5.2,0.1c-1.1,0.1-2.7,0.1-4.7,0.1c-0.2,0-0.3-0.3-0.3-0.8s0.1-0.8,0.3-0.8c3.1,0,5.3-0.9,6.6-2.7c1.3-1.8,2-4.9,2.1-9.3l1.4-41.5c-2.4-2.9-5.4-4.3-8.9-4.3c-0.3,0-0.4-0.3-0.4-0.8s0.1-0.8,0.4-0.8l6.3,0.1l5.7-0.1c1.1,0,2,0.4,2.7,1.2c0.7,0.8,1.8,2.7,3.3,5.6l22,44L980,7c0.3-1,0.9-1.7,1.6-2.3c0.7-0.6,1.5-0.9,2.3-0.9l6.5,0.1l8.5-0.1c0.2,0,0.3,0.3,0.3,0.8s-0.1,0.8-0.3,0.8c-4,0-6.8,0.6-8.5,1.8c-1.7,1.2-2.4,3.5-2.2,7l1.3,40.1c0.2,2.7,0.5,4.6,1,5.9c0.5,1.2,1.4,2,2.7,2.5c1.3,0.4,3.5,0.6,6.6,0.6C1000,63,1000.1,63.3,1000.1,63.8z"/><path id="O" class="st0" d="M841.8,61.9c-4.7-2.9-8.4-6.7-10.9-11.5c-2.6-4.8-3.8-10-3.8-15.7c0-6.8,1.8-12.6,5.3-17.6c3.6-5,8.1-8.7,13.5-11.2s11-3.8,16.6-3.8c6.1,0,11.4,1.5,16,4.4c4.6,3,8.1,6.8,10.6,11.6c2.5,4.8,3.7,9.8,3.7,15c0,5.9-1.6,11.4-4.7,16.5c-3.1,5.1-7.4,9.1-12.7,12.1s-11.1,4.5-17.4,4.5C851.9,66.2,846.5,64.7,841.8,61.9z M878.8,56.4c4.3-4.8,6.4-11.4,6.4-19.9c0-5.8-1-11.1-3.1-16c-2.1-4.8-5.2-8.7-9.2-11.5c-4.1-2.9-9-4.3-14.7-4.3c-7.5,0-13.3,2.4-17.4,7.2c-4.1,4.8-6.2,11.3-6.2,19.7c0,5.9,1.1,11.3,3.2,16.1c2.1,4.9,5.2,8.7,9.3,11.6s8.9,4.3,14.5,4.3C868.7,63.6,874.5,61.2,878.8,56.4z"/><path id="T" class="st0" d="M749.1,6.3c-1.9,0.8-3.2,2.3-4.1,4.4s-1.6,5.3-2.1,9.6c0,0.2-0.2,0.3-0.7,0.3s-0.7-0.1-0.7-0.3c0.3-1.9,0.5-5.1,0.8-9.4c0.3-4.4,0.5-7.7,0.5-10.1c0-0.4,0.3-0.7,0.8-0.7s0.8,0.2,0.8,0.7c0,1.1,0.7,1.8,2,2.1c1.3,0.3,2.9,0.5,4.8,0.5c7.6,0.2,14.2,0.3,19.7,0.3l11.3-0.1c1.6-0.1,3.6-0.1,6.1-0.1c3.1,0,5.4-0.2,6.8-0.6c1.4-0.4,2.4-1.2,2.8-2.5c0.2-0.3,0.5-0.4,0.9-0.4s0.7,0.1,0.7,0.4c-0.5,9.4-0.8,16.1-0.8,20.1c0,0.2-0.2,0.3-0.7,0.3s-0.7-0.1-0.7-0.3c0-4.3-0.3-7.6-1-9.6c-0.7-2.1-1.9-3.5-3.6-4.4c-1.8-0.8-4.5-1.2-8.3-1.2c-2.9,0-5,0.3-6.5,0.8s-2.5,1.4-3.1,2.7s-0.8,3.1-0.8,5.7v39.9c0,2.7,0.3,4.6,0.8,5.9c0.5,1.2,1.6,2,3.2,2.5c1.6,0.4,4.1,0.6,7.6,0.6c0.2,0,0.3,0.3,0.3,0.8s-0.1,0.8-0.3,0.8c-2.7,0-4.8,0-6.3-0.1l-8.9-0.1l-8.5,0.1c-1.6,0.1-3.7,0.1-6.5,0.1c-0.2,0-0.3-0.3-0.3-0.8s0.1-0.8,0.3-0.8c3.4,0,5.9-0.2,7.5-0.6s2.7-1.3,3.3-2.5c0.6-1.3,0.9-3.2,0.9-5.8V14.4c0-2.6-0.2-4.5-0.7-5.7c-0.4-1.2-1.3-2-2.7-2.5c-1.3-0.4-3.5-0.7-6.4-0.7C753.7,5.1,751,5.5,749.1,6.3z"/><path id="S_1_" class="st0" d="M678.5,21.4c1.3,2,3,3.6,5,4.9s4.7,2.9,8.1,4.7c3.5,1.7,6.3,3.3,8.3,4.8c2.1,1.5,3.9,3.3,5.3,5.4c1.5,2.1,2.2,4.7,2.2,7.7c0,4.9-1.9,8.9-5.8,12.2c-3.9,3.3-9.1,5-15.7,5c-5.5,0-10.4-1.5-14.7-4.4c-0.4-0.3-0.7-0.6-0.8-0.9s-0.2-0.9-0.3-1.6l-1.6-12.4c-0.1-0.3,0.1-0.6,0.7-0.6s0.8,0,0.9,0.4c1,5,3.2,9.2,6.8,12.6s7.6,5.1,12,5.1c3.1,0,5.9-0.9,8.2-2.7c2.3-1.8,3.5-4.7,3.5-8.6c0-2.9-0.7-5.3-2.1-7.4c-1.4-2.1-3.1-3.8-5.1-5.3c-2-1.4-4.6-3-7.9-4.8c-3.5-1.9-6.2-3.6-8.2-5s-3.7-3.2-5.1-5.3c-1.4-2.1-2.1-4.6-2.1-7.6c0-4.9,1.8-8.8,5.5-11.5C679.2,3.4,683.7,2,689,2c3.9,0,8,1,12.2,3c0.8,0.4,1.3,0.8,1.5,1s0.4,0.6,0.5,1.1l1,11.1c0,0.3-0.2,0.6-0.7,0.7s-0.8,0-0.8-0.4c-0.6-3.8-2.4-7.2-5.5-10.2c-3-3-6.6-4.5-10.5-4.5c-3.2,0-5.7,1-7.5,3s-2.7,4.6-2.7,7.7C676.5,17.2,677.2,19.5,678.5,21.4z"/><path id="U" class="st0" d="M621.6,9.3c-0.6-1.5-1.5-2.5-2.9-3.1s-3.4-0.9-6.1-0.9c-0.3,0-0.4-0.3-0.4-0.8s0.1-0.8,0.4-0.8l4.9,0.1c2.6,0.2,4.6,0.3,6.1,0.3c1.2,0,3-0.1,5.5-0.3l4.7-0.1c0.2,0,0.3,0.3,0.3,0.8s-0.1,0.8-0.3,0.8c-2.4,0-4.3,0.3-5.5,0.9s-2.1,1.7-2.5,3.1c-0.5,1.5-0.7,3.6-0.7,6.5v24.9c0,8.1-2.3,14.4-6.8,18.9c-4.6,4.5-10.7,6.8-18.3,6.8c-4.9,0-9.3-1-13.2-2.9c-3.9-2-7.1-4.8-9.4-8.4c-2.3-3.6-3.4-8-3.4-13V14.2c0-2.6-0.3-4.5-0.8-5.7s-1.5-2.1-2.8-2.5c-1.3-0.5-3.5-0.7-6.4-0.7c-0.3,0-0.4-0.3-0.4-0.8s0.1-0.8,0.4-0.8l5.7,0.1c3.1,0.2,5.6,0.3,7.3,0.3c2.2,0,4.8-0.1,7.9-0.3l5.5-0.1c0.3,0,0.4,0.3,0.4,0.8s-0.1,0.8-0.4,0.8c-2.9,0-5,0.3-6.4,0.8s-2.3,1.4-2.9,2.7c-0.5,1.3-0.8,3.2-0.8,5.8v24.1c0,8.2,2.1,14.2,6.4,18.1c4.3,3.9,9.6,5.9,16.1,5.9c6.2,0,11-1.8,14.5-5.5s5.2-9.1,5.2-16.1V16C622.5,12.9,622.2,10.7,621.6,9.3z"/><path id="C" class="st0" d="M515.3,3.1c3.8,0.7,6.8,1.6,9.2,2.8c0.6,0.3,1,0.5,1.2,0.8s0.3,0.7,0.4,1.4l1.4,13.4c0,0.3-0.2,0.4-0.7,0.5s-0.8,0-0.8-0.4c-1.2-6.1-3.9-10.6-8.1-13.5c-4.2-2.9-9.6-4.4-16.1-4.4c-4.7,0-8.9,1.2-12.8,3.6c-3.8,2.4-6.8,5.8-9,10.1c-2.2,4.3-3.3,9.1-3.3,14.4c0,5.5,1.1,10.7,3.3,15.7c2.2,5,5.4,9.1,9.8,12.2c4.3,3.2,9.6,4.8,15.6,4.8c5.5,0,10.1-1.5,13.9-4.5c3.8-3,6.4-7.6,7.8-13.7c0-0.3,0.2-0.4,0.6-0.4c0.2,0,0.4,0.1,0.6,0.2c0.2,0.1,0.3,0.2,0.3,0.3l-1.8,13.8c-0.1,0.7-0.2,1.2-0.4,1.4c-0.2,0.3-0.7,0.6-1.4,0.9c-6.7,2.3-13.6,3.5-20.8,3.5c-8.2,0-14.9-1.7-20.2-5c-5.3-3.3-9.1-7.4-11.5-12.4s-3.6-9.9-3.6-15c0-5.9,1.6-11.3,4.7-16.1c3.1-4.9,7.4-8.7,12.9-11.5s11.5-4.2,18.2-4.2C508,2.1,511.6,2.4,515.3,3.1z"/><rect x="421.7" y="27.3" transform="matrix(0.7071 -0.7071 0.7071 0.7071 101.6384 312.3587)" class="st0" width="12.3" height="12.3"/><path id="R" class="st0" d="M403.9,74.1c0,0.5-0.1,0.8-0.3,0.8l-12.9-0.8c-1.6,0-4.4-2.6-8.6-7.8c-4.2-5.2-18.1-21.9-23.9-31.1c-2.3,0.3-4.1,0.5-5.5,0.5c-1.2,0-3.1-0.1-5.7-0.3V54c0,2.7,0.2,4.6,0.7,5.9c0.5,1.2,1.4,2,2.7,2.5c1.3,0.4,3.5,0.6,6.6,0.6c0.3,0,0.4,0.3,0.4,0.8s-0.1,0.8-0.4,0.8c-2.3,0-4.2,0-5.5-0.1l-7.9-0.1l-7.6,0.1c-1.4,0.1-3.3,0.1-5.9,0.1c-0.2,0-0.3-0.3-0.3-0.8s0.1-0.8,0.3-0.8c3,0,5.3-0.2,6.6-0.6c1.4-0.4,2.3-1.3,2.9-2.5c0.5-1.3,0.8-3.2,0.8-5.8V14.2c0-2.6-0.3-4.5-0.8-5.7s-1.5-2.1-2.9-2.5c-1.4-0.5-3.6-0.7-6.5-0.7c-0.2,0-0.3-0.3-0.3-0.8s0.1-0.8,0.3-0.8l5.9,0.1c3.1,0.2,5.6,0.3,7.4,0.3c1.6,0,3.1,0,4.4-0.1s2.4-0.2,3.3-0.3c2.7-0.3,5.2-0.4,7.6-0.4c5.3,0,9.4,1.1,12.2,3.3c2.8,2.2,4.2,5.3,4.2,9.4c0,3.6-1,6.8-2.9,9.8c-2,3-4.6,5.3-7.9,7.2c4.9,8,17.2,24.4,20.6,28.6c3.3,4.3,6.4,7.3,9.3,9.1c2.9,1.8,5.9,2.7,9.2,2.7C403.8,73.3,403.9,73.6,403.9,74.1z M353.7,33.5c5.5,0,9.3-1.2,11.5-3.6s3.3-5.9,3.3-10.5c0-9.6-4.3-14.5-13-14.5c-3.5,0-5.7,0.7-6.8,2.2c-1,1.5-1.6,3.9-1.6,7.3v18.5C348.7,33.3,350.9,33.5,353.7,33.5z"/><path id="I" class="st0" d="M284.7,59.9c0.5,1.2,1.4,2,2.7,2.5c1.3,0.4,3.5,0.6,6.6,0.6c0.3,0,0.4,0.3,0.4,0.8s-0.1,0.8-0.4,0.8c-2.3,0-4.2,0-5.5-0.1l-8.1-0.1l-7.7,0.1c-1.4,0.1-3.3,0.1-5.7,0.1c-0.2,0-0.3-0.3-0.3-0.8s0.1-0.8,0.3-0.8c3,0,5.3-0.2,6.6-0.6c1.4-0.4,2.3-1.3,2.8-2.5c0.5-1.3,0.7-3.2,0.7-5.8V14.2c0-2.6-0.2-4.5-0.7-5.7S275,6.4,273.5,6c-1.4-0.5-3.6-0.7-6.6-0.7c-0.2,0-0.3-0.3-0.3-0.8s0.1-0.8,0.3-0.8l5.7,0.1c3.3,0.2,5.9,0.3,7.7,0.3c2.2,0,4.9-0.1,8.2-0.3l5.3-0.1c0.3,0,0.4,0.3,0.4,0.8s-0.1,0.8-0.4,0.8c-2.9,0-5,0.3-6.4,0.8s-2.3,1.4-2.9,2.7c-0.5,1.3-0.8,3.2-0.8,5.8v39.6C284,56.8,284.2,58.7,284.7,59.9z"/><path id="E" class="st0" d="M229.4,46.9c0.5,0,0.7,0.1,0.7,0.4c-0.6,6.3-0.9,11.4-0.9,15.4c0,0.7-0.1,1.2-0.4,1.5c-0.3,0.3-0.8,0.5-1.6,0.5h-47.4c-0.2,0-0.3-0.3-0.3-0.8s0.1-0.8,0.3-0.8c3,0,5.1-0.2,6.5-0.6s2.3-1.3,2.8-2.5s0.7-3.2,0.7-5.8v-40c0-2.6-0.2-4.5-0.7-5.7s-1.4-2.1-2.8-2.5c-1.4-0.5-3.6-0.7-6.5-0.7c-0.2,0-0.3-0.3-0.3-0.8s0.1-0.8,0.3-0.8h45.1c0.9,0,1.3,0.3,1.3,1l0.1,8.1c0.1,1.7,0.1,3.7,0.1,6.3c0,0.3-0.3,0.4-0.8,0.4s-0.8-0.1-0.8-0.4c0-4.1-1.2-7.4-3.5-9.9s-5.4-3.8-9.2-3.8h-4.4c-3.3,0-5.7,0.2-7.2,0.7s-2.6,1.3-3.1,2.5c-0.6,1.2-0.8,3.1-0.8,5.7v17.9c8.9-0.1,14.8-0.3,18-0.7c3.1-0.3,4.9-0.5,5.2-0.5c0.4,0,0.7,0.9,0.7,2.7c0,1.9-0.2,2.9-0.7,2.9c-0.3,0-2.1-0.3-5.2-0.8c-3.1-0.5-9.1-0.8-18-0.9v18.6c0,2.5,0.3,4.4,0.8,5.7c0.6,1.3,1.6,2.1,3.2,2.6c1.6,0.5,4,0.7,7.2,0.7h7.6c3.4,0,6.3-1.4,8.7-4.2c2.4-2.8,4-6.5,4.7-11C228.7,47,228.9,46.9,229.4,46.9z"/><path id="S" class="st0" d="M115.4,21.4c1.3,2,3,3.6,5,4.9s4.7,2.9,8.1,4.7c3.5,1.7,6.3,3.3,8.3,4.8c2.1,1.5,3.9,3.3,5.3,5.4c1.5,2.1,2.2,4.7,2.2,7.7c0,4.9-1.9,8.9-5.8,12.2c-3.9,3.3-9.1,5-15.7,5c-5.5,0-10.4-1.5-14.7-4.4c-0.4-0.3-0.7-0.6-0.8-0.9c-0.1-0.3-0.2-0.9-0.3-1.6l-1.6-12.4c-0.1-0.3,0.1-0.6,0.7-0.6c0.5-0.1,0.8,0,0.9,0.4c1,5,3.2,9.2,6.8,12.6c3.6,3.4,7.6,5.1,12,5.1c3.1,0,5.9-0.9,8.2-2.7c2.3-1.8,3.5-4.7,3.5-8.6c0-2.9-0.7-5.3-2.1-7.4c-1.4-2.1-3.1-3.8-5.1-5.3c-2-1.4-4.6-3-7.9-4.8c-3.5-1.9-6.2-3.6-8.2-5s-3.7-3.2-5.1-5.3c-1.4-2.1-2.1-4.6-2.1-7.6c0-4.9,1.8-8.8,5.5-11.5c3.6-2.7,8.1-4.1,13.4-4.1c3.9,0,8,1,12.2,3c0.8,0.4,1.3,0.8,1.5,1s0.4,0.6,0.5,1.1l1,11.1c0,0.3-0.2,0.6-0.7,0.7s-0.8,0-0.8-0.4c-0.6-3.8-2.4-7.2-5.5-10.2c-3-3-6.6-4.5-10.5-4.5c-3.2,0-5.7,1-7.5,3s-2.7,4.6-2.7,7.7C113.4,17.2,114.1,19.5,115.4,21.4z"/><path id="A" class="st0" d="M72.9,63.8c0,0.5-0.2,0.8-0.5,0.8c-1.6,0-4.1-0.1-7.6-0.3c-3.3-0.2-5.7-0.3-7.3-0.3c-1.2,0-3,0.1-5.2,0.3c-2.1,0.2-3.7,0.3-4.8,0.3c-0.3,0-0.5-0.3-0.5-0.8s0.2-0.8,0.5-0.8c2.3,0,4.1-0.3,5.3-0.9s1.8-1.7,1.8-3.1s-0.5-3.2-1.6-5.3l-9-19.5H24.8l-5.7,14.4c-1.4,3.6-2.1,6.3-2.1,8.1c0,2.3,0.8,3.9,2.4,4.9c1.6,1,4,1.5,7.2,1.5c0.4,0,0.7,0.3,0.7,0.8s-0.2,0.8-0.7,0.8c-1.3,0-3.1-0.1-5.3-0.3c-2.4-0.2-4.7-0.3-6.8-0.3c-2.2,0-4.7,0.1-7.7,0.3c-2.6,0.2-4.7,0.3-6.3,0.3c-0.3,0-0.5-0.3-0.5-0.8s0.2-0.8,0.5-0.8c2.7,0,4.8-0.4,6.4-1.1s3-2.2,4.3-4.4c1.3-2.2,2.9-5.6,4.8-10.2L34.6,1.7c0.2-0.3,0.4-0.5,0.8-0.5c0.3,0,0.6,0.2,0.7,0.5l21,45.1c2.3,4.9,4.1,8.4,5.4,10.5c1.3,2.2,2.7,3.7,4.2,4.5c1.4,0.8,3.3,1.2,5.7,1.2C72.7,63,72.9,63.3,72.9,63.8z M42.9,32.1L33.7,12l-7.9,20.1H42.9z"/>
                    </svg>
                </a>
            </h1>
            <!-- NAV BTN -->
            <button id="aseir-nav-toggle"
                    class="aseir-header-nav_button"
                    aria-controls="site-navigation"
                    aria-expanded="false"
                    aria-label="Button Toggle Primary Navigation">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class="overlay"></div>
            <!-- NAV Menu -->
            <nav id="aseir-header-nav"
                 class="main-navigation"
                 role="navigation"
                 aria-label="Primary Navigation"
                 aria-expanded="false">
                <ul class="aseir-header-nav_menu">
                    <li class="aseir-header-nav_li">
                        <a class="aseir-header-nav_link"
                           href="<?php echo esc_url( home_url( '/' ) ); ?>"
                           aria-label="Home">
                            Home
                        </a>
                    </li>
                    <li class="aseir-header-nav_li">
                        <a class="aseir-header-nav_link"
                           href="<?php echo esc_url( home_url( '/' ) ); ?>shop"
                           aria-label="Shop">
                            Shop
                        </a>
                    </li>
                    <li class="aseir-header-nav_li">
                        <a class="aseir-header-nav_link"
                           href="<?php echo esc_url( home_url( '/' ) ); ?>news"
                           aria-label="News">
                            News
                        </a>
                    </li>
                    <li class="aseir-header-nav_li">
                        <a class="aseir-header-nav_link"
                           href="<?php echo esc_url( home_url( '/' ) ); ?>faq"
                           aria-label="FAQ">
                            FAQ
                        </a>
                    </li>
                    <li class="aseir-header-nav_li">
                        <a class="aseir-header-nav_link"
                           href="<?php echo esc_url( home_url( '/' ) ); ?>my-account"
                           aria-label="Account">
                            Account
                        </a>
                    </li>
                    <li class="aseir-header-nav_li">
                        <a class="aseir-header-nav_link"
                           href="<?php echo esc_url( home_url( '/' ) ); ?>contact"
                           aria-label="Contact Us">
                            Contact Us
                        </a>
                    </li>
                </ul>
                <ul class="aseir-header-nav_menu-mobile">
                    <li class="aseir-header-nav_li">
                        <a class="aseir-header-nav_link"
                           href="<?php echo esc_url( home_url( '/' ) ); ?>"
                           aria-label="Home">
                            Home
                        </a>
                    </li>
                    <li class="aseir-header-nav_li">
                        <a class="aseir-header-nav_link"
                           href="<?php echo esc_url( home_url( '/' ) ); ?>shop"
                           aria-label="Shop">
                            Shop
                        </a>
                    </li>
                    <li class="aseir-header-nav_li">
                        <a class="aseir-header-nav_link"
                           href="<?php echo esc_url( home_url( '/' ) ); ?>my-account"
                           aria-label="Account">
                            My Account
                        </a>
                    </li>
                    <li class="aseir-header-nav_li">
                        <a class="aseir-header-nav_link"
                           href="<?php echo esc_url( home_url( '/' ) ); ?>"
                           aria-label="Terms and Conditions">
                            Terms and Conditions
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- CART -->
            <ul id="site-header-cart" class="site-header-cart menu">
                <li class="site-header-cart_li-first<?php echo esc_attr( $class ); ?>">
		            <?php storefront_cart_link(); ?>
                </li>
                <li>
		            <?php the_widget( 'WC_Widget_Cart', 'title=' ); ?>
                </li>
            </ul>
        </section>

    <!--
        <ul id="site-header-cart" class="site-header-cart menu">
            <li class="<?php echo esc_attr( $class ); ?>">
				<?php storefront_cart_link(); ?>
            </li>
            <li>
				<?php the_widget( 'WC_Widget_Cart', 'title=' ); ?>
            </li>
        </ul>
    -->
        <!--
        <?php
		/**
		 * Functions hooked into storefront_header action
		 *
		 * @hooked storefront_header_container                 - 0
		 * @hooked storefront_skip_links                       - 5
		 * @hooked storefront_social_icons                     - 10
		 * @hooked storefront_site_branding                    - 20
		 * @hooked storefront_secondary_navigation             - 30
		 * @hooked storefront_product_search                   - 40
		 * @hooked storefront_header_container_close           - 41
		 * @hooked storefront_primary_navigation_wrapper       - 42
		 * @hooked storefront_primary_navigation               - 50
		 * @hooked storefront_header_cart                      - 60
		 * @hooked storefront_primary_navigation_wrapper_close - 68
		 */
		/* do_action( 'storefront_header' ); */
		?>
		-->
	</header><!-- #masthead -->

    <script>
        var navBtn = document.getElementById("aseir-nav-toggle");
        navBtn.addEventListener("click", function(){
            navBtn.classList.toggle('open');
            var navBtnAtt = navBtn.attributes;
            if (navBtnAtt['aria-expanded'].value == "true") {
                navBtn.setAttribute("aria-expanded", "false");
            } else {
                navBtn.setAttribute("aria-expanded", "true");
            }
        });
    </script>

	<?php
	/**
	 * Functions hooked in to storefront_before_content
	 *
	 * @hooked storefront_header_widget_region - 10
	 * @hooked woocommerce_breadcrumb - 10
	 */
	do_action( 'storefront_before_content' );
	?>

	<div id="content" class="aseir-custom-content site-content" tabindex="-1">
		<div class="col-full">

		<?php
		do_action( 'storefront_content_top' );
