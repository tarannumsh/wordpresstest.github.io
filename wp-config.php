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
define( 'AUTH_KEY',         'Jy4L~qrI%e`uQ{eg$D)EA8PR;<]S<+q<7vnth#h~XICTu?->f-Q=a]iwfUz9L3Z~' );
define( 'SECURE_AUTH_KEY',  'Vpio]tB<vw--;s%Aqz+[X,O@BXjS7Qy4JceBoZ55.4r1Hy.hmu.C6I{RAU#DoQIS' );
define( 'LOGGED_IN_KEY',    'Dmm31_rd^9_d4{/rE5MUFZ_o@aGle%D4%Mosg)`JC#)WoUI@E?1(3F`})m%&k%4}' );
define( 'NONCE_KEY',        'WvhuF0M^06i%4R}A;+A`;^NfT@D.U:HM:o* U7m7p6/(q4)w%8.X pvWOf#vlxn@' );
define( 'AUTH_SALT',        '6eJ(S[*RBK+Eq_xXNgIL)8K*B.4eSUMq2yj^#N0/1u:cC#:vdafJ>+#8ut[%I.)>' );
define( 'SECURE_AUTH_SALT', '0@fLeG|/oQGJc~f<I<Y%sGGE|:_3t3Wzc8^nq/Tb?%&Qr$HX3p6-g<3y@[CU*hK>' );
define( 'LOGGED_IN_SALT',   'tR_ToAe5i_{+}n7I|1LAZfqv4[f,#h[5WXrU7TKB|/N5TLB/!G8UE{OV@p`<J`|l' );
define( 'NONCE_SALT',       '|lFM3|}v_ O3 OF#axp?857`XfT3dEQQAV,84Kj1I=|H+gvIWAcD@nHxviuL%Opf' );

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
