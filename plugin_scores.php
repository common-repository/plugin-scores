<?php
/**
 * @package plugin_scores
 * @version 1.7
 */
/*
Plugin Name: plugin scores
Plugin URI: http://plugins.funsite.eu/plugin-scores/
Description: Adds an admin dashboard widget with info on your plugins
Author: Gerhard Hoogterp
Version: 1.7
Author URI: http://plugins.funsite.eu/plugin-scores/
Text Domain: pluginscores
Domain Path: /languages
*/
if ( ! defined( 'ABSPATH' ) ) exit;

if (!class_exists('basic_plugin_class')):
	require(plugin_dir_path(__FILE__).'basics/basic_plugin.class');
endif;

include_once('plugin_scores-plugin.php');
$plugin_scores = new plugin_scores_class();
$plugin_scores->currentPlugin = __FILE__; // bit of a hack to find the plugin info in getPlugins

?>