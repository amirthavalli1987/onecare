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
define( 'DB_NAME', 'onecare_db' );

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
define( 'AUTH_KEY',         'GwuUm)~2^Z~uSX0x6!.8*T&|%NioutI8?Z GmEx]i.Qv~14jKJ$k`nKx0D-r_3`>' );
define( 'SECURE_AUTH_KEY',  '~%-eYEVrc!msUZ_2}m`|Y0AjC&dR`p3k-}b .e_K2?j]@>};VP)T*By.B1hA75q_' );
define( 'LOGGED_IN_KEY',    'bC7p:u=$s@@G@igt#+w$dsh+4YQsq&lb[[KP(Jo8R}o5Pf$S8e#r(G$4/?0$e#ag' );
define( 'NONCE_KEY',        'qs#3s@i8sr=oZ<8XdFVN;B>)4.I@b2YUsf#4z){g|3udTHpd20<*?NR@q<aQh}hT' );
define( 'AUTH_SALT',        'iB,nz*seo/978vIdPD]mw6MAcSfGV.ZOzEY${t?_tP91k{H4r86a4UN[r7fk;(8M' );
define( 'SECURE_AUTH_SALT', 'UO9%mu?~@$TH,`zQMKqNW>FzyDcS|vNB7|6I=>cmIM~&ThppkBKhzBPcejT~S`q#' );
define( 'LOGGED_IN_SALT',   'dPBN&_@{Duo-LZDb-#ga|h#[qr/plbO_VM<n8=0u$3j4.]0m/#t2}beV#}qLf{D9' );
define( 'NONCE_SALT',       '*f@bCJnQx3`~[O>o17xIU9M.!Igp9G9X=+^0W#XXJ/b-ft&Z/UzDIFX`98a-+%.8' );

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
