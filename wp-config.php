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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Word23' );

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
define( 'AUTH_KEY',         'k}KB Z1NOU?[D5UZ#4Jy9.7Kur!GfS85~^Zu$/nICRX$nCcui(1DO/S1xZFx^F n' );
define( 'SECURE_AUTH_KEY',  'j7ab,Qe#zDSL%o$pb%Hk&Sf(sx_}Cb#lQM2GFvS}UhJEw< |{XL4iU4i* me5,?F' );
define( 'LOGGED_IN_KEY',    'Fl}]R8$Q~XrxcX8)L/BWqi~a:hm:/CiC07|)5Aw{OIrj3n8&I7b[Sr,-CbK tJ#R' );
define( 'NONCE_KEY',        '[-g^$I/A].WC#:YdkTS.t`DAjoT:A+=-tRNh[vtcqhDvfs-J~g_cow-Ks*oA2sBM' );
define( 'AUTH_SALT',        'vIQ<;8%2L:Yl*b*<K_vt;r~?q?@cN6F~^&3S&sU8`(DH[?mPx({:={&~d;<RR>0`' );
define( 'SECURE_AUTH_SALT', 'Xnb->F|)PI-m&[-%e!T- `w_E k/7Nqw/oOM6?O7LMZ%qvMV%)mmHlBL]L|jdIZ-' );
define( 'LOGGED_IN_SALT',   '~VVtpKQ{pHrD.|O-k}fGu! JTGtz#^!dO$hokvpM@bZ/rDBR*Dprjr[yU_Br#x=V' );
define( 'NONCE_SALT',       'Bcx.ySop%b]mt:[c*B&4$dZ5vRhV9:Hty_>F(`YU>O^#YKcecACr,F3@Rs1*&Y0:' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
