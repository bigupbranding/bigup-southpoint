<?php 
/**
 * @package bigup
 * @subpackage southpoint
 */

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
   	wp_enqueue_script( 'southpoint-scripts', get_stylesheet_directory_uri() . '/js/scripts.js', array(), '1.0.0', true );
}

// google font 
wp_register_style('bigup-google-font', 'http://fonts.googleapis.com/css?family=Lato:300,400,300italic|Lora:400italic');
wp_enqueue_style( 'bigup-google-font');


function bigup_child_customize_register( $wp_customize ) {
//Add Setting
$wp_customize->add_setting( 'actions-4' , array( 'default' => '' ));
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'actions-4', array(
	'label' => __( 'Select a page to feature...', 'bigup' ),
	'section' => 'bigup-actions',
	'type' => 'dropdown-pages',
	'settings' => 'actions-4',
	'priority' => 100,
	'description' => ''
))); 
}
add_action( 'customize_register', 'bigup_child_customize_register' );

 ?>