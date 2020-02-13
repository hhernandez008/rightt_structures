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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rs' );

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
define( 'AUTH_KEY',         '7y5te$`oZ8z0Xw(C.y$Bu]!-6`CXf(JqDA;cPafIRZfI~,++PPM3O2dq*UT~(_[V' );
define( 'SECURE_AUTH_KEY',  ':7^JU?.d,&BvHHMY90LXQbj%DAcp%J(%A=Qboq*(~I}6G!bM<{?QK~77ZV!?tVnz' );
define( 'LOGGED_IN_KEY',    'd)#2m0mllF[?g]S%=bw1v;m:=TJ*tGS!t?42mj&#jOYp2K0{?>B^`Xr+HOb#=HeQ' );
define( 'NONCE_KEY',        'YGbkt/+8U/UQo,J|%W~./VUB6#H{Gx=:s|i|3Gdz*pT(UFs^YU+rs%/Sd?.EW:D&' );
define( 'AUTH_SALT',        '6a+|A3wWP[9Hd^fXdsLmjvS&c3f422Si)AwNtO% -@5h;x3aM1/`N(&=8T13_yM}' );
define( 'SECURE_AUTH_SALT', '^6Gc^!4%]~;uOcF}_C73ebl;8n80=N[_.E^VE~1_P)k?BgZ~^kQw$@],3P&&f0pD' );
define( 'LOGGED_IN_SALT',   'k96GeNiR/!*c8*s?$GaGN^$vzQ5VW/V:R,59<Q?P6Ci*CmC+*eQ~aa5K`d}d{S{a' );
define( 'NONCE_SALT',       '@aA|F-;]s<NF]Iz@eN@r]I#[rikbwG-r|j4&`I0i >yiu|c*(}8hG3|)4:@N0|_u' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
