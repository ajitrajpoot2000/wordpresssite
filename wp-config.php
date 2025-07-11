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
define( 'DB_NAME', 'newtesting' );

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
define( 'AUTH_KEY',         'X-;k7<%{TF=<85U[6xb5L+~~X|31Mcg%)$g}`!cY5o0Lrw$B`>Wn>VLjo]5ZOz#.' );
define( 'SECURE_AUTH_KEY',  ' cyk4j$I-3:@aZc?zft<3`Qv=F`RStm IH_d2k#e4]HP4*|Ejj(Ph5Bj8Gt6}>nH' );
define( 'LOGGED_IN_KEY',    'xG 9Ds/f{|<.}iTbcYsp.vlWmTN5{pMac:qCp2)iIPFu-?mURV5#E-1JPS4Mc&^;' );
define( 'NONCE_KEY',        'A?S@urm6}<T+lM4P8MQg30s*fg5;m.f`M?h8~bUY~p)nj@G7z?Uz3HiqO5p6|e&G' );
define( 'AUTH_SALT',        '1(foAE&+ET &dT!up},Zk&X=RcFrYKfqc(%{TMw6nM{Q)9rnf]P.f>u>NHyE<Q:(' );
define( 'SECURE_AUTH_SALT', 'Z&?@`OIY0CH+`nM+WGEdlB.;B!M.w^2Ond<0=S?x/.,2qS2!Gb)61Y,%pU[MoJU=' );
define( 'LOGGED_IN_SALT',   '|hHLi09,:u}w~m[@>~.sLHBK:9?~3_D^P0e[8rgN`sYf6!/lzV[cfUwWyyLu_OK^' );
define( 'NONCE_SALT',       'QD;H`G`s!{EQY^f-(H8 ^P.$VgL@TnBVHmL8=JIUceeZi1Q3Zw0;*QP|mM:H[80u' );

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
