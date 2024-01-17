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
define( 'DB_NAME', 'e2m' );

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
define( 'AUTH_KEY',         '8ZtGp5Czk0_0QmlLG]E|9q.7z$ZtrV?E;4}M{=+,wU{qUFBL+[(ms@+!5T%G6_gN' );
define( 'SECURE_AUTH_KEY',  'R%<YGmrIsBni+9PKr=.Lu!F~3S$qz>zy#Dz5@97.p*sCZ?^^lV6oeWdnR CYP2L`' );
define( 'LOGGED_IN_KEY',    'hq*bn,TbPTp[%~[ClGAk4<LkZ3_^xsGc|5gnXOixoIn~zU@:AEAA0{[B[7:8:u0M' );
define( 'NONCE_KEY',        '8b6k:z`aw}Q:-?p`j6?0OdnhJb#-KT$-s16~oT7{)(Vr7-{7XS>BXUG,)ht]P9B5' );
define( 'AUTH_SALT',        'YQGwZH)j/e7QY0xljHr@RcNA#L|UEUK8HF}(c*E0O@4K&8r{c}3H><Vo9#:]`da$' );
define( 'SECURE_AUTH_SALT', '~BH5q4cr+LX^G_.iSB:a^H|eOwF+|5;7@G!b&7h.~EfYX!vFV|2Y`NWGO9(Xb1}>' );
define( 'LOGGED_IN_SALT',   '0pYccAbMuJh_9wW{%,ex$[@YR^%Arta}aLZ<P^$Kna^Y>SN)WgN_*)AQVBXw+PW]' );
define( 'NONCE_SALT',       '`wf? uJO@UEhQOp:`L /429!n]fHP0L;LI O0]vHCjd|bzleiQNpRiFNIdC%jY,*' );

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
