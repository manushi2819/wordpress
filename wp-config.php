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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'zRSqD>4&$9U2x}MW(56v1XNMd)?j||!9.M1uw-_2U2d|xS:}@P%(Wd^v_gcU#m#I' );
define( 'SECURE_AUTH_KEY',  'H5kt)1@m<N}2&(<MF,Zi|_BOg,b{Y9Jp!z$1uA<0<FHR&z>}Z#:nKQ+b7r29*#z^' );
define( 'LOGGED_IN_KEY',    'O-+s/Pup6vuZ_(5z(N$#s9[)1au}3wMX+K!^}Wj*Y6E;XAJJZhyl.T_@+sU&U}.K' );
define( 'NONCE_KEY',        'Q]LS%F?UCiSAP u4T36-J([1 1A(k*H7:25hO+mn|Gv=5F.a{`>71eM;TKm}Q^|?' );
define( 'AUTH_SALT',        '}sWLJ0Khh@yQ{p Xmt9XKV4{c(/78+(d:^.9t<,G.8ALw=@DF?bzDx/o8T7(]LPd' );
define( 'SECURE_AUTH_SALT', 'Jbzm91($@pX3ld@M0|#cvHAzYl@ $jiU`ThJqv:M*pOLPTiaayaM)~`#nvP;%pc^' );
define( 'LOGGED_IN_SALT',   '~-9Cdy^R&cs.O}WXJ=>{Wl]q&QMUHOT1:7qxOC$v?yP_h(n wwN@gwFM?%b>2l=,' );
define( 'NONCE_SALT',       'aTZ|V#ZbcKNtrg@?QfO#bW;3X{=JID(~[ST}qc4S59NV*I@O`Sa&+vM-2~v|RlT_' );

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
