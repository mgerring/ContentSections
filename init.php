<?php
/*
Plugin Name: Content Sections
Plugin URI: http://github.com/mgerring/WP-Skeleton-Plugin
Description: Parses a shortcode in your content to produce an anchor link menu and stuff
Version: 0.1
Author: Matthew Gerring
Author URI: http://matthewgerring.com
License: GPLv2
*/

// If you're lazy or in a hurry, you can set everything up this way.
// Later, if you want, you can uncomment this line and do a find/replace
// in your project to hard-code these variables for a marginal
// performance improvement.

$tmp_cfg = array(
	// Set this to whatever you'd like your constant to be prefixed with.
	'plugin_const' 		=> 'CONTENT_SECTIONS',
	// The name of your plugin file (without the .php)
	'plugin_file'		=> 'content-sections',
);	

// The current version of this plugin
if( !defined( $tmp_cfg['plugin_const'].'_VERSION' ) ) define( $tmp_cfg['plugin_const'].'_VERSION', '1.0.0' );
// The directory the plugin resides in
if( !defined( $tmp_cfg['plugin_const'].'_PATH' ) ) define( $tmp_cfg['plugin_const'].'_PATH', dirname( __FILE__ ) );
// The URL path of this plugin
if( !defined( $tmp_cfg['plugin_const'].'_URL' ) ) define( $tmp_cfg['plugin_const'].'_URL', WP_PLUGIN_URL . "/" . plugin_basename( constant($tmp_cfg['plugin_const'].'_PATH') ) );

//Load in your plugin file, which extends the base class.
require_once( constant($tmp_cfg['plugin_const'].'_PATH') . '/' . $tmp_cfg['plugin_file'] . '.php' );

function ContentSections() {
	return content_sections::instance();
}

content_sections::instance( $tmp_cfg['plugin_const'] );

//No reason to keep this around, we're done!
$tmp_cfg = null;