<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'chowringhee_arena_animation' );

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
define( 'AUTH_KEY',         '~!(@?%8B.uE Xe~u)3|gx|,34o;Tn[(^Dsi#Bmjbo[tLi[z8|WH4(|;H* 8Vc2~<' );
define( 'SECURE_AUTH_KEY',  'jpN}>lErcTq;$VU3 j<tS$$eEC*vuAtaKfpXLah@r,3Y.bl=m%}6)xDbM;>}9 )s' );
define( 'LOGGED_IN_KEY',    'dj05!byL^76F-u]pUyG3hx(L%&pL+D-@R0HIel$P~~0~waQ.M,3h.BjiR8}Ykp%|' );
define( 'NONCE_KEY',        'wv!#@!ibCvV;PKMsQ`R^A{!/R`eHzI}C@T@K(Tu0nkQXe*O^t2X]0Js.[C0Bg(@9' );
define( 'AUTH_SALT',        'P`^)lH)_mj4EtBLYHeBJam&MoBv[Ozl8)b].g)(cT,OnBI=x7:Y DDfx@1y^,RuE' );
define( 'SECURE_AUTH_SALT', 'c8HFk_P3LP`ui%E-Br8ME~n3CfQ13$,i2^51$466W~W?<zKR}[5D}bYcJi9BqBRy' );
define( 'LOGGED_IN_SALT',   'm u7iw0L*rG:g]>)<,5:ein,]bj_8U5ia]d>Y:Qv([]cTLCoMHfEjOnlXOeO5|uw' );
define( 'NONCE_SALT',       '$6j<pF#lc |nk|=.J6Tto;E_D[d91cNX1S:fLpm@5n>~/|K>=g@nq+J*gOQ~3o%2' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
