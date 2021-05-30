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
define( 'DB_NAME', 'site3' );

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
define( 'AUTH_KEY',         '3sJ.b&Kl08Ls|B{hm%,Tv!XpqesE1(~_?~t+;rATeQ%so1|H>o_P!7v)8b7}=8Qi' );
define( 'SECURE_AUTH_KEY',  'sl7NdFLRcQUvvbG$)wFtRkdtQ{&.-/KMBn~.r$DS5!]M#N33kCru#}qR+i%!3X/Z' );
define( 'LOGGED_IN_KEY',    'n5PozEt9;/<_+Asn#/]G%,y&Q7m<p9EP,/!RyGXik|R1#C.SM*6X(&14N/whdGuI' );
define( 'NONCE_KEY',        '(GUY`2W;r&$RQ p:Gv7^DoTkx6hu&!s1jUxtGdFtuGcD6]S@}>jQcNZ M`uavZDq' );
define( 'AUTH_SALT',        'b2>Yt[qu+=S:Ze=;XO=(GCeJoNbz=FA_u>+;/EYD10b-#[c6jeyxchbQwf=^_Y]<' );
define( 'SECURE_AUTH_SALT', 'Q-U{eYNz82={J@EBwA B@FTkAKW-#tEvfsPwl~{9I6R;>LSWU.3,O@S{Aau`l)u~' );
define( 'LOGGED_IN_SALT',   'q:7VnZzCde}$ s`eu#~&6s2YcZWD.ZU8Ti[c~ELZ;E*Q]B|BkJ>B@x#P6LDV0gJe' );
define( 'NONCE_SALT',       'jht>9jI?A6Kclt(Ynu83gwu?g,dWDtG2aWf}m5M@G_0cJ:`I@;jGh,IX/)POTu+?' );

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
