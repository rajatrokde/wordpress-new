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
define( 'AUTH_KEY',         'Zj>A]EcO?0T4a;{X?P8Y4r(uumxMALt$^VzN#q#G1<Wy3qTY;o~kV 3)w+T=T2{f' );
define( 'SECURE_AUTH_KEY',  'D?{ -kF_]+;rw,9IZa@/;d=znQVDn{|-KHYh<&d$7`kI<@X}prhi-*ca ECV|vJk' );
define( 'LOGGED_IN_KEY',    '5%[h/Si@3mGy&!qF.s`4zgI2Ib67O^4;g/c{b$W[FW=(ZSDQ~|uI!*;PshJHAuzl' );
define( 'NONCE_KEY',        'Wp36wJ:<=tr4D0?P:B)-=XKKtQ/ZWe*jWMng2aZ7h*K)p`ylCeu {?s/I-O?Qv|+' );
define( 'AUTH_SALT',        '1SGQ*#0?l/RHLMP-B`(]Evbe70zKFDkgv]00.]y}$x=NpI;:9,&*0?J8%z}&e;e[' );
define( 'SECURE_AUTH_SALT', 'XYXDQTVdk4#2FE[35~1Ug$ode+{R738?kkshGTDVj1=~}LcmEV7&A_C|dhGwfG<0' );
define( 'LOGGED_IN_SALT',   '`q^Z+vgoRD3}p+~@+iQ#c:&b![qx=7I;ECq(c/B,Gn7(Uy-Q_olB`oqW.uuYCSX,' );
define( 'NONCE_SALT',       'eMcGY(=74%(^DsfqU0EshWkPHb)dl@$TfRQ&ML[+Gt;79b#DBy+]2F3np}X`Be_a' );

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
