<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'WordPressBDHugo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'FdrsQV]g_r]vAwPpyI>-pOY%&vwg4#d6e?rgzJ`8YI8>5ClrtV^2^I,Swjoo0{#D' );
define( 'SECURE_AUTH_KEY',  'kGVtq}iv[*[,:&FAnV q`HiHiEqkLh&FK6YI5Jk^uh=b&Jug4hy^wEvHL`P`8i>U' );
define( 'LOGGED_IN_KEY',    '^K4<GHgfD|l~)>H<Z![^&E:O:=Cw*zM#3t~zk:L8YMU#g}vplqALSYsB-hN6FRVc' );
define( 'NONCE_KEY',        '83dX)fF{,c[MgrFzo.nj8:565ORDsEB{QwHmE}h}ng!^6cL%BRz?S@)[<K+VDLgZ' );
define( 'AUTH_SALT',        'E)Od~z1pCq+&xAqjjyx%45_L2YAfy%h|37GgSAa:rxHJXj|0^7[P;D;60.D6Go>X' );
define( 'SECURE_AUTH_SALT', '=ubaDJK{3:ovNE}}!yJ9O<nHrZEPe$s?6i,OC:&VwW^rXLJ[C<K)mE]_igdItvPM' );
define( 'LOGGED_IN_SALT',   '#];bn/;d}8j[Z1WkE<0;_nQz)k/)U7bv^-E#qPF>dUXEH~{|@;e{H!JUY9Oc12!=' );
define( 'NONCE_SALT',       'P$6 FrG C X*_<|?H(=1xTkjea7g(j:w,F HT_&R#$T+D<(9Z+yA4#IWwV)!i(h{' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
