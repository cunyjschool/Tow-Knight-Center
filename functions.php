<?php

define( 'TOWKNIGHTCENTER_VERSION', '0.1' );

if ( !class_exists( 'towknightcenter' ) ) {
	
class towknightcenter
{

	/**
	 * __construct()
	 */
	function __construct() {
		
		add_action( 'init', array( &$this, 'enqueue_styles' ) );
		
	} // END __construct()
	
	/**
	 * enqueue_styles()
	 */
	function enqueue_styles() {
		
		if ( !is_admin() ) { 
			wp_enqueue_style( 'towknightcenter', get_bloginfo( 'template_directory' ) . '/style.css', false, TOWKNIGHTCENTER_VERSION );
		}
		
	} // END enqueue_styles()
	
} // END class towknightcenter
	
} // END if ( !class_exists( 'towknightcenter' ) )

$towknightcenter = new towknightcenter();






?>