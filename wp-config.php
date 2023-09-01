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
define( 'DB_NAME', 'mindset' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '#/k-h1-.<7aNWyKX!Lt|.w/`qGQRV3nC_n-8[<RjIN9Lj|rM//k2/4_%3.% QWH3');
define('SECURE_AUTH_KEY',  'h9b`[JCp@DNBT;My.q@u*e;q&$ya=D}/e5QGu_?MiP sJGdY9C|=r!_1Yzhnfh^v');
define('LOGGED_IN_KEY',    'bqOlt$QA5|K03ASA!cKnYp+iy9|ryJKx7U@A|O{{zFjZ2ciA+-_OUXYGVW+;B;S:');
define('NONCE_KEY',        'G/y,*?$DAE`}H[G!yR{JGneK9V,BL}5d,x9_(GSkQbB+l`FB8~=e`7|8]j_Jp5uL');
define('AUTH_SALT',        'w]$W -!DYe8eFMTBE|f!Sc-x?$L&Sf]|]jMQ<||d`_=dX,!ksewqjb6*9k)/VDAh');
define('SECURE_AUTH_SALT', 'n1@4H:Lrc+zAoPeym0zOxLxDy9z{jN/ nmkIu<`PT{v^=UU)9%;p-g;-r7X]50$/');
define('LOGGED_IN_SALT',   'WIXUZ<~sHiwQHZ@)2 b^fYF7/97_urcNd)e.[?Zy?S+Y$to +(JX?z%+O0-.sf&q');
define('NONCE_SALT',       'GU!v|k+}.PL:.3cmd.FiqV}Z1.,%0p++mMgDl1LV6E7ICK&k^[1}{+_sV3{}Mg-.');

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
