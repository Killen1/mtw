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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'mtw');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '?n`>xv)sP,723k|QqZP:+5}]tUI-J-}kXj;#8D_Hi]W#4cW|/[fHd1-uJ6&z/~[8');
define('SECURE_AUTH_KEY',  '.T^JvGGsxvKFT1]RS$p7bF[gR,v~4}=;Z10P-oa|(&7{ffl6I-lvsby7rE>Uw1DK');
define('LOGGED_IN_KEY',    'NX?DKv:ZGee~e9{? gf0m>JPU9YA:t0vVnU0-Uo^C~ADz,#2f&*cTY&4r)[_k%y&');
define('NONCE_KEY',        ',;@&^7yFeYf^-ui9M8_*KQ(3<T[ReEtU)hnTW;D!Hs-]<NN06-$7i0$Ti-V*QOOP');
define('AUTH_SALT',        'FP!gt9kruUwU9?Bs@3L@HkIr%z`sp,Vb%dUB7f(f%ip<-k4z^8]o|*c(px(ar1!0');
define('SECURE_AUTH_SALT', 'GETy)OqV|& [m`CZ^c,qR(C}ou{ryn4`;cc6`Bc]2A9oG)6aVT9bX$1Y-o32QS-)');
define('LOGGED_IN_SALT',   '1[ ~X]4z-XGWm.[9|K7%D:*e9nt%?P9$:c#_A1%,2LzQ2<[KYS-9MiXO34Vj^ImE');
define('NONCE_SALT',       '4=B|It<P-$|+a:MPhvZ5hPM((&HQFn9fg|EXyC@*uE+7(Klr-51Qh.Ir8>.PP4!D');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);
define('WP_DEBUG_DISPLAY', false);
define('WP_DEBUG_LOG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
