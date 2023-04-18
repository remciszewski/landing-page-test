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
define( 'DB_NAME', 'landing-page' );

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
define( 'AUTH_KEY',         'w=*-,pg#TTug7fF1oJ#-9!G-C/J?eo?jgT{~u)>efHbd1>!;e$@:cJbh]&gOBMFD' );
define( 'SECURE_AUTH_KEY',  'h#]Z4j~o*y{A((8,DYjB>;D4@VIH^U8Fptgi*-~@a#!r(q-(/QP8>.FHg~qwTC}v' );
define( 'LOGGED_IN_KEY',    '4(r;=:pT`ofB(XX,qf#7vA{gY:$+~ +jZ2xQS6*4eed!M&/Nu*2u>ZKJ@,{5O&J8' );
define( 'NONCE_KEY',        '+).~DVWhzUkSx<l{)uT<v}x;lh^<OD>hlP=f8CkEPEx<yqd5Q8%BQ1$UBQ&8~MCr' );
define( 'AUTH_SALT',        'q=`xAFws;FoF$+^Y#`Yu.@yI`qqLK$onD1x0 k!)4Ln_&pP,ZOsE|{,GkV>WYuLJ' );
define( 'SECURE_AUTH_SALT', '#KC,S!BZvlVU+^bE0%npd?]~a(m)h9]RqyvmZVACARNWS^e!|Pjo?pM#R5Psn.$F' );
define( 'LOGGED_IN_SALT',   'E8RY_GFz]B>3i]BRE&<xr+}H.m3SJ;o6]sGQwQ`2deJ&tKQu,2=8W`5x4Uom{zn6' );
define( 'NONCE_SALT',       'VZLuo0E5_<u:jH3qp)>cV}ihr&Stvc:r|>jQu&Z!G6U.nfK0?M=ck.~oONfQal<?' );

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
