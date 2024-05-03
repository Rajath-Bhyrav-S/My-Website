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
define( 'AUTH_KEY',         '?U)ldROp&P+6$0OW!w(}0g=e7;m435%m1U4tfJ&uGN0*`w}x_Pwi5(z}mO2^ q27' );
define( 'SECURE_AUTH_KEY',  '[Su eML80>BON^t.P2f#0n=TeQfwsFT5hL|/F,aFAHpZuF4%X+E` qdTG_qi3Fpt' );
define( 'LOGGED_IN_KEY',    'xv]%w-8# udl k^RkF^4kmsV)D5|f1Y@Th?r#8a[9ZkN3^++zwx~ga``L0E]9Qm*' );
define( 'NONCE_KEY',        '9mqS ACvK,|`U{O+GQ:?4U%Kc=+|eVS N j[w,{`)+h%Cr%4Z.#HKCB]#ND7SAQ#' );
define( 'AUTH_SALT',        'ws[)jN39nV@*..kC!9~/L%#/o~[_.E]93<^VPs!t5h,sh>r50UnJL5YJv*g&&~UC' );
define( 'SECURE_AUTH_SALT', 'k0kC&eo(p_zNGD9Yx-XlZ#>4p3MZVGE$eE ,G0.]QDV:W5pNGqg*AAru%77hf;Ev' );
define( 'LOGGED_IN_SALT',   'I#>z7mho_[$YP5,Z{9U4%NwCp-~azQYf+!A}:maO1G%|=2iEs>PJFofaq/gkRG_w' );
define( 'NONCE_SALT',       'Ulmhkb1v:kGziX?#fqT8KT}*uA2fyGNo*{Ok%ty.%<(>~qH^b7zxYI>7Sm*]n3[5' );

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
