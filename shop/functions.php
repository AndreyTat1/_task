<?php
add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'swiper-bundle',  'https://unpkg.com/swiper/swiper-bundle.min.css');
	wp_enqueue_style( 'fonts',  'https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap');
	wp_enqueue_style( 'OpenSans',  'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap');
	wp_enqueue_style( 'fonts-inter', 'https://rsms.me/inter/inter.css' ); 
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/style.css');
	wp_enqueue_script( 'swiper', get_template_directory_uri() . 'https://unpkg.com/swiper/swiper-bundle.min.js', array(), 'null', true );
	wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/script.js', array('swiper'), 'null', true );
});

add_theme_support( 
	'post-thumbnails'
 );
 add_theme_support( 
	'title-tag'
 );
 add_theme_support( 
	'custom-logo'
 );
 function create_product_labels_taxonomy() {
    register_taxonomy(
        'product_labels',
        'post',
        array(
            'label' => __( 'Product Labels' ),
            'rewrite' => array( 'slug' => 'product-label' ),
            'hierarchical' => false,
        )
    );
}
add_action( 'init', 'create_product_labels_taxonomy' );

?>