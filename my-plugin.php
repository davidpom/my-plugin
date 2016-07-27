<?php
/*
Plugin Name: My PLugin
Plugin URI: http://pom.es
Description: 
Version: 1.0.0
Author: David
Author URI: http://david.be/
Domain Path: localization/
Text Domain: my-plugin
*/

include_once( plugin_dir_path( __FILE__ ) . 'updater.php');
$updater = new My_Plugin_Updater(__FILE__);
$updater->set_username('davidpom');
$updater->set_repository('my-plugin');
$updater->initialize();