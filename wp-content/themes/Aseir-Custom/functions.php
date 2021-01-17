<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {

    $parent_style = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}

// -- [ ] -- //
add_action( 'customize_register', 'exit_customize', 15 );
function exit_customize( $wp_customize ) {

//	$wp_customize->remove_control( 'fl-header-style');
//
//	$wp_customize->remove_section( 'fl-content-bg' );
//	$wp_customize->remove_control('background_color');
//
//	$wp_customize->remove_section("colors");
//	$wp_customize->remove_section("background_image");
//	$wp_customize->remove_section( "buttons" );
//	$wp_customize->remove_control( "buttons" );
//
//	// Works
//	$wp_customize->remove_control("header_image");
//	$wp_customize->remove_section( 'custom_css' );
//	$wp_customize->remove_control( 'custom_css' );
}

// -- [ Custom Header ] -- Remove WooCommerce
    add_action( 'storefront_header', 'remove_product_search');
    function remove_product_search(){
	    remove_action( 'storefront_header', 'storefront_social_icons', 10 );
	    remove_action( 'storefront_header', 'storefront_site_branding', 20 );
	    remove_action( 'storefront_header', 'storefront_product_search', 40 );
    }
// -- END [ Custom Header ] -- Remove WooCommerce

// -- [ Remove Meta Info from from Shop Page ] -- //
    add_action( 'woocommerce_single_product_summary', 'remove_product_meta');
    function remove_product_meta() {
	    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
    }
// -- END [ Remove Meta Info from from Shop Page ] -- //

// -- [ Remove Breadcrumbs ] -- Remove breadcrumbs for Storefront theme
    add_action( 'init', 'wc_remove_storefront_breadcrumbs');
    function wc_remove_storefront_breadcrumbs() {
        remove_action( 'storefront_before_content', 'woocommerce_breadcrumb', 10 );
    }
// -- END [ Remove Breadcrumbs ] -- Remove breadcrumbs for Storefront theme

// -- [ Custom Footer ] -- Remove WooCommerce
    add_action( 'init', 'custom_remove_footer_credit', 10 );
    function custom_remove_footer_credit () {
        remove_action( 'storefront_footer', 'storefront_credit', 20 );
        add_action( 'storefront_footer', 'custom_storefront_credit', 20 );
    }
    function custom_storefront_credit() {
        ?>
        <div class="site-info">
            © <?php echo get_bloginfo( 'name' ) . ' ' . get_the_date( 'Y' ); ?>
        </div><!-- .site-info -->
        <?php
    }
// -- END [ Custom Footer ] -- Remove WooCommerce

// -- [ Display Amount Saved ] -- Add save percent next to sale item prices.
    function ts_you_save() {
        global $product;
        if( $product->is_type('simple') || $product->is_type('external') || $product->is_type('grouped') ) {
            $regular_price = get_post_meta( $product->get_id(), '_regular_price', true );
            $sale_price = get_post_meta( $product->get_id(), '_sale_price', true );
            if( !empty($sale_price) ) {
                $amount_saved = $regular_price - $sale_price;
                $currency_symbol = get_woocommerce_currency_symbol();
                $percentage = round( ( ( $regular_price - $sale_price ) / $regular_price ) * 100 );
                ?>
                <p class="you-save">
                    You Save: <?php echo number_format($percentage,0, '', '').'%'; ?>
                </p>
                <?php
            }
        }
    }
    add_action( 'woocommerce_single_product_summary', 'ts_you_save', 11 );
// -- END [ Display Amount Saved ] -- Add save percent next to sale item prices.

// -- [ Remove Phone Number From Checkout ] -- //
    add_filter( 'woocommerce_checkout_fields' , 'asier_custom_checkout_fields', 20);
    function asier_custom_checkout_fields( $fields ){
        unset( $fields['billing']['billing_phone']);
        // Make the billing email full width
        $fields['billing']['billing_email']['class'] = array('form-row-wide');
        return $fields;
    }
// -- END [ Remove Phone Number From Checkout ] -- //

// -- [ Remove Storefront Inline styles ] -- //
add_action( 'wp_print_styles', 'remove_custom_inline_css', 100 );
function remove_custom_inline_css(){
	// - storefront-woocommerce-style-inline-css -- //
    // wp_deregister_style('storefront-woocommerce-style');
    // storefront-gutenberg-blocks-inline-css
	//wp_dequeue_style( 'storefront-gutenberg-blocks' );
    /* Remove storefront-style-inline-css */
	wp_deregister_style('storefront-style');
}


// -- [ Remove wp-smiley ] -- //
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

// -- [ Add: "How did you hear about us" field to Checkout page ] -- //
    add_filter( 'woocommerce_checkout_fields', 'aseir_custom_how_did_you_hear_about_us', 30 );
    function aseir_custom_how_did_you_hear_about_us( $fields ) {
        $fields['order']['hear_about_us'] = array(
            'type' => 'select',
            'class' => array( 'form-row-wide' ),
            'label' => 'How did you hear about Aseir Custom?',
            'options' => array(
                'default' => '-- Please Select An Option --',
                'friend' => 'friend',
                'tv' => 'TV',
                'radio' => 'Radio',
                'billboard' => 'Billboard',
                'podcast' => 'Podcast',
                'google' => 'Google',
            )
        );
        return $fields;
    }
// -- END [ Add: "How did you hear about us" field to Checkout page ] -- //

// -- [ Add CSS and JS Links To Specific pages ] -- //
//-- Shop Page -- //
// if( is_page( 331 ) ) {
// wp_enqueue_script('shop-css', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',false);
// }
// -- [ the below code does not work ] -- //
function load_assets() {
	if ( is_page(array( 331, 'Shop', 'Shop Page' )) ) {
		wp_enqueue_style('QQQ','/wp-content/themes/Aseir-Custom/assets/css/shop.css', false );
	}
	wp_enqueue_style('shop-css', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',false);
}
add_action('wp_enqueue_scripts', 'load_assets');
