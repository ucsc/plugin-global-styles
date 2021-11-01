<?php
/**
 * Plugin Name: UCSC Globlal Styles Plugin
 * Plugin URI: https://github.com/ucsc/plugin-global-scripts
 * Description: Dev plugin to add UCSC global styles to header.
 * Version: 0.0.1
 * Author: UC Santa Cruz
 * Author URI: https://github.com/ucsc/
 * Link: http://www.ucsc.edu/
 *
 */

// Plugin Directory 
define( 'UCSTYLES_DIR', dirname( __FILE__ ) );

//Includes:

// UCSC Global Styles
include_once( UCSTYLES_DIR . '/lib/includes/styles.php' );

// Do not update function
// include_once( UCSTYLES_DIR . '/lib/includes/do-not-update.php' );
