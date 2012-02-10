<?php
/*
Plugin Name: WP Duplicate Plugin Prevention
Plugin URI: http://andreashultgren.se/
Description: Removes a plugin from the list of available plugins if it's already installed. This code is supposed to be copied and placed in the main file of your own plugin. Requires php 5.3+.
Version: 1
Author: Andreas Hultgren
Author URI: http://andreashultgren.se/
License: GPL3/MIT
*/

add_filter( 'all_plugins', function ( $plugins ){
	// Plugin vars
	$plugin_data = get_plugin_data( __FILE__ );
	$plugin_name = $plugin_data['Name'];
	$plugin_dir = plugin_basename(__FILE__);
	
	// Loop through all plugins and remove those that have the same name but not the same directory AND is not installed
	foreach( $plugins as $plugin => $data ){
		if( $plugin . '' !== $plugin_dir && $data['Title'] . '' === $plugin_name /* && !is_plugin_active($plugin) */ ){
			unset($plugins[$plugin]);
		}
	}
	return $plugins;
});