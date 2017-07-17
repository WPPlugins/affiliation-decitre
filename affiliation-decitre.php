<?php
/*
Plugin Name: Affiliation Decitre
Description: A plug-in to really simply manage your Decitre affiliation links
Version: 0.4.3
Author: Carl Conrad
Author URI: https://carlconrad.net
License: GPL2
Text Domain: affiliation-decitre
*/

if ( ! defined( 'ABSPATH' ) ) { 
    exit;
}

require_once( 'include/settings.php' );
require_once( 'include/actions.php' );

if ( is_admin() ){
	add_action( 'admin_menu' , 'affiliation_decitre_options_page' );
	add_action( 'admin_init' , 'register_affiliation_decitre_settings' );
}
else {
	add_shortcode( 'affiliation_decitre_link' , 'affiliation_decitre_link_func' );
	add_shortcode( 'affiliation_decitre_button' , 'affiliation_decitre_button_func' );
}