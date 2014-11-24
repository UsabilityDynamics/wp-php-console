<?php
/**
 * @link              https://github.com/nekojira/wp-php-console/
 * @since             1.0.0
 * @package           WP_PHP_Console
 * @author            nekojira <fulvio@nekojira.com>
 *
 * @wordpress-plugin
 * Plugin Name:       WP PHP Console
 * Plugin URI:        https://github.com/nekojira/wp-php-console/
 * Description:       An implementation of PHP Console for WordPress. Easily debug and trace PHP errors and warnings from your Chrome dev tools console using a Google Chrome extension.
 * Version:           1.1.0
 * Author:            nekojira
 * Author URI:        https://github.com/nekojira/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-php-console
 * Domain Path:       /languages
 */

if ( ! defined( 'WPINC' ) ) die;

/**
 * Include PhpConsole server library.
 * @link https://github.com/barbushin/php-console
 * Copyright (c) 2011-2013 by Barbushin Sergey <barbushin@gmail.com>.
 */
if( file_exists( plugin_dir_path( __FILE__ ) . 'vendor/autoload.php' ) && !class_exists( 'Phpconsole\Config' ) ) {
  include_once( plugin_dir_path( __FILE__ ) . 'vendor/autoload.php' );
}

if( class_exists( 'Phpconsole\Config' ) && class_exists( 'WP_PHP_Console' ) ) {

  /**
   * Instantiate this plugin.
   */
  $WP_PHP_Console = new WP_PHP_Console();

}
