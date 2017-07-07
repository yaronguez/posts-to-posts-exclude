<?php
/**
*
* @link              http://trestian.com
* @since             1.0.0
* @package           p2pexclude
*
* @wordpress-plugin
* Plugin Name:       Posts 2 Posts - Exclude Parents / Children
* Plugin URI:        https://github.com/yaronguez/posts-to-posts-exclude
* Description:       Allow developers to exclude posts that are parents or children of a Posts to Posts link type within a WP Query
* Version:           1.0.0
* Author:            Yaron Guez
* Author URI:        http://trestian.com
* License:           GPL-2.0+
* License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
* Text Domain:       p2pexclude
* Domain Path:       /languages
* Github Plugin URI: https://github.com/yaronguez/posts-to-posts-exclude
* Github Branch: master
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

function run_p2pexclude() {
	/**
	 * The core plugin class
	 */
	require plugin_dir_path( __FILE__ ) . 'classes/class-posts-to-posts-exclude.php';
	$plugin = new Posts_To_Posts_Exclude();
	$plugin->run();

}
add_action('plugins_loaded', 'run_p2pexclude');
