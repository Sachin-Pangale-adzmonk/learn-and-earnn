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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

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
define( 'AUTH_KEY',          '@DYtZ0W21z5QvIV:Dk/YH%#4lZkJ4ARGcuF d-;`O, +]pnI0BzquE>~jXy;/Z{[' );
define( 'SECURE_AUTH_KEY',   '/~N#0e~ws642UP]5^ j+L=VNxth8PwkGdUZ*+V]y[4<e2TD.pgdafVtD}B=N;5O/' );
define( 'LOGGED_IN_KEY',     'R!,/d0}D7-d~X0>L]isTtc{5?49zn~ZJrB{FO5x`w*)|[{VsKn$Q_TxS]-apFSzU' );
define( 'NONCE_KEY',         'a04[T/X5WeJS,G#F:*`r?:fz|a|S%t#did3dK6riNr$iSa:eJ4qxV9!fEK4aHfv!' );
define( 'AUTH_SALT',         ';%,JUV1ynAvzR;:+A]@ocVH$g7VIKyTZMzk(3hli<K-<_;-|uz2P[h:?)t4|UE?,' );
define( 'SECURE_AUTH_SALT',  '/zKarl?aE1YZv1!sTb?(HBAc3t0m41sFPk5Hra!DpgD(w)y)t@?~lV_r2g<-WdZ_' );
define( 'LOGGED_IN_SALT',    '3!eRKb[M5:^IADR*.Cn5W{NFCI[av~(NYk-SBZ^t##[pA*Mp;s(S#fbRZGKkO8%{' );
define( 'NONCE_SALT',        's%sgJDrGP~G/~^6c~|W0)&i>._[^T@}Ge5OeWWj2ckES;)H8pqLif|jR_bN$Ie(Y' );
define( 'WP_CACHE_KEY_SALT', '6imNx<t9ccSmJ|Ax=G95%VZ5]eavmc{R*N>ERt<inCd%en(u>@6XS+<HTe6>*:;0' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
