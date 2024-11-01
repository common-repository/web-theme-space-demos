<?php
function tsp_demos_setup_get_current_theme_author(){
    $current_theme = wp_get_theme();
    return $current_theme->get('Author');
}
function tsp_demos_setup_get_current_theme_slug(){
    $current_theme = wp_get_theme();
    return $current_theme->stylesheet;
}
function tsp_demos_setup_get_theme_screenshot(){
    $current_theme = wp_get_theme();
    return $current_theme->get_screenshot();
}
function tsp_demos_setup_get_theme_name(){
    $current_theme = wp_get_theme();
    return $current_theme->get('Name');
}

function tsp_demos_setup_get_templates_lists( $theme_slug ){
    switch ($theme_slug):
        case ( "one-page-business"):
		
			$theme_slug = "common";
		
            $demo_templates_lists = array(
			
                'business' =>array(
                    'title' => __( 'Business Demo', 'tsp-demos' ),/*Title*/
                    'is_premium' => false,/*Premium*/
                    'type' => 'normal',/*Optional eg elementor or other page builders*/
                    'author' => __( 'WEB Theme Space', 'tsp-demos' ),/*Author Name*/
                    'keywords' => array( 'woocommerce', 'Business' ),/*Search keyword*/
                    'template_url' => array(
                        'content' => TSP_DEMOS_SETUP_TEMPLATE_URL.$theme_slug.'/business/content.json',
                        'options' => TSP_DEMOS_SETUP_TEMPLATE_URL.$theme_slug.'/business/options.json',
                        'widgets' => TSP_DEMOS_SETUP_TEMPLATE_URL.$theme_slug.'/business/widgets.json'
                    ),
                    'screenshot_url' => TSP_DEMOS_SETUP_TEMPLATE_URL.$theme_slug.'/business/screenshot.png', 
                    'demo_url' => 'https://wpbusinessthemes.com/agency-demo/', 
                    /**/
                    'plugins' => array(
                        array(
                            'name'      => 'WooCommerce',
                            'slug'      => 'woocommerce',
                        ),					
						
                        array(
                            'name'      => 'Elementor Page Builder',
                            'slug'      => 'elementor',
                        ),
                        array(
                            'name'      => 'Product Wishlist',
                            'slug'      => 'yith-woocommerce-wishlist',
                        ),					
						
                        array(
                            'name'      => 'Product Quick View',
                            'slug'      => 'yith-woocommerce-quick-view',
                        ),						
						
                        array(
                            'name'      => 'Product Compare',
                            'slug'      => 'yith-woocommerce-compare',
                        ),						
						                        
						array(
                            'name'      => 'Contact Form 7',
                            'slug'      => 'contact-form-7',
                            'main_file' => 'wp-contact-form-7.php',
                        ),
                    )
                ),
				
               'shop' =>array(
                    'title' => __( 'Business Demo (Elementor)', 'tsp-demos' ),/*Title*/
                    'is_premium' => false,/*Premium*/
                    'type' => 'normal',/*Optional eg elementor or other page builders*/
                    'author' => __( 'WEB Theme Space', 'tsp-demos' ),/*Author Name*/
                    'keywords' => array( 'woocommerce', 'shop', 'business' ),/*Search keyword*/
                    'template_url' => array(
                        'content' => TSP_DEMOS_SETUP_TEMPLATE_URL.$theme_slug.'/shop/content.json',
                        'options' => TSP_DEMOS_SETUP_TEMPLATE_URL.$theme_slug.'/shop/options.json',
                        'widgets' => TSP_DEMOS_SETUP_TEMPLATE_URL.$theme_slug.'/shop/widgets.json'
                    ),
                    'screenshot_url' => TSP_DEMOS_SETUP_TEMPLATE_URL.$theme_slug.'/shop/screenshot.png', 
                    'demo_url' => 'https://wpbusinessthemes.com/shop-demo/', 
                    /**/
                    'plugins' => array(					
						
                        array(
                            'name'      => 'Elementor Page Builder',
                            'slug'      => 'elementor',
                        ),
						
						array(
                            'name'      => 'WooCommerce',
                            'slug'      => 'woocommerce',
                        ),
				
						
                        array(
                            'name'      => 'Product Quick View',
                            'slug'      => 'yith-woocommerce-quick-view',
                        ),						
					
						                        
						array(
                            'name'      => 'Contact Form 7',
                            'slug'      => 'contact-form-7',
                            'main_file' => 'wp-contact-form-7.php',
                        ),
                    )
                ),
				
							
            );

			

            break;
			
			
			
        default:
            $demo_templates_lists = array();
    endswitch;

    return $demo_templates_lists;

}