<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// Use these settings on the local server
if ( file_exists( dirname( __FILE__ ) . '/wp-config-local.php' ) ) {
  include( dirname( __FILE__ ) . '/wp-config-local.php' );
  
// Otherwise use the below settings (on live server)
} else {
 
  // Live Server Database Settings
  define( 'DB_NAME',     'may1330002204587');
  define( 'DB_USER',     'may1330002204587');
  define( 'DB_PASSWORD', 'Maynard12!' );
  define( 'DB_HOST',     'may1330002204587.db.12035906.hostedresource.com'  );
  
  // Overwrites the database to save keep edeting the DB
  define('WP_HOME','http://maynardandthewalnut.com');
  define('WP_SITEURL','http://maynardandthewalnut.com');
  
  // Turn Debug off on live server
  define('WP_DEBUG', false);
}
 
// Never use wp_ always use your own to prevent some hacks
$table_prefix  = 'wp_';
 
// Usual Wordpress stuff - Dont overide the ones you have already
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
define('AUTH_KEY',         'wordpress generated code');
define('SECURE_AUTH_KEY',  'wordpress generated code');
define('LOGGED_IN_KEY',    'wordpress generated code');
define('NONCE_KEY',        'wordpress generated code');
define('AUTH_SALT',        'wordpress generated code');
define('SECURE_AUTH_SALT', 'wordpress generated code');
define('LOGGED_IN_SALT',   'wordpress generated code');
define('NONCE_SALT',       'wordpress generated code');
 
define('WPLANG', '');
 
if ( !defined('ABSPATH') )
  define('ABSPATH', dirname(__FILE__) . '/');
        
require_once(ABSPATH . 'wp-settings.php');