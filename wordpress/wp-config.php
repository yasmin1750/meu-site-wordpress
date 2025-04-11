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
define( 'DB_NAME', 'site_db' );

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
define( 'AUTH_KEY',         'y.m5V9ej9S274u>2%n@-!NnoDi|_NSt.Q<W&~}>Mi#M(xG48uX>`6z1XN1v-hN|`' );
define( 'SECURE_AUTH_KEY',  '~j~M~{{N3:9e`*dHamG3.u82S|-0ycD3mj+[*[@6n4{8v|@i:vD(1d)m[}zd&+c?' );
define( 'LOGGED_IN_KEY',    '2w.1U@~C.N F#>t<%m=!zci0,rCeI#QA8J2Op`Tgc~%bAhES1.!Ww%~,( xi5EVA' );
define( 'NONCE_KEY',        '#hs5XxQ7K<Z*4lq~5E|d~MIo--ldsnwu;I_-Z:O(W=}ertug=:yZWaI-hXb`J^l5' );
define( 'AUTH_SALT',        'yQq.o>Xg!~)Aq`KD=[{OYl0^j;.yyB! >5q-X,xy~ot}x|F}B$X~vN7[#]Pg~A1:' );
define( 'SECURE_AUTH_SALT', 'I.?:ONFr-`:&7R;tLK<Y;~/ZmG]7!` 1_N%Z9N^]B&):aI`o4p5bT.vo$ !T2KJ;' );
define( 'LOGGED_IN_SALT',   'JY@A/@qvgl!MwDN92jwlTY4d$TI@3qJFCP@~)@4iE!?$@3X$G!tx2x]`,`#+d.jG' );
define( 'NONCE_SALT',       'OslOtwm/ DY?n;3M:Vh0CUz45Z@EE-RG,?2bQ_5T{t+q(liPvgr@H8x{;K86KU?;' );

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
