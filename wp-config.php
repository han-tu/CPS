<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'han' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '`&Wfd-+X?xo+ZijQTgy -REix]RGzrZ`Zm, qR@%D|-x]kfc8#y&WAf3i&p*XRkG' );
define( 'SECURE_AUTH_KEY',  'UNR$|YlMVH&Gv=B}NYOZ!g9G_t=ykF_uayDXiE&q{WP26V:#Z^?q%hfuHP82^ig3' );
define( 'LOGGED_IN_KEY',    'Awoo^E2Aic/hRyf3$U*#{vn<n;YeJCi|>cRw+3;GX7Ft2NP@Ix2uqD}u2|1GQ=iI' );
define( 'NONCE_KEY',        'r0am)XskId36}LauK2K|}8sk6-,}h{Hn?~727syB&3fVidx-,*jb/;vB3;tlj)EP' );
define( 'AUTH_SALT',        'A-yo7ydrX^lq&Q=@d** kmwZQjD!]AqS PCEGB|+)%,%n-]!S%3|#w?Ey@xT|d_A' );
define( 'SECURE_AUTH_SALT', '4#7toz nSGd){SNfK`{_h_XSh&KqI4O>t.0U=wTmq&/12=5/on(_W@4d]%C7)WWk' );
define( 'LOGGED_IN_SALT',   'u:^z&1C,4bA%^b1<H%LTwW/$7d_@>QMdbif<J8YwB4pd2;9)nC)nqNfB{*OCPC$R' );
define( 'NONCE_SALT',       'KaIoVny(&mqVkn]=kxgEJ0zn9EgPITqDt|p1`v|Wh0^ r%3:yevSP4F[=ABm^yn%' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
