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
define('DB_NAME', 'haisan');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'L.~8 L?:Y*vBU4,H2#[3Ix)u~9jX0}6j%!bI*O!rx&gJPXaf!(2Niu_Q?6E7z`|`');
define('SECURE_AUTH_KEY',  ' }kXu A99`S1un}YqG~%zH<A4-^%~Ic^frZ{Mjr6,.c@92eUxJGE.amp4k7mkGcI');
define('LOGGED_IN_KEY',    '&?US4fmH  3+ira,(0!?A~CD#iab)aq]CDfb,%.CD],An7]Zm -K0ag2~WXqb/Gd');
define('NONCE_KEY',        'Hl?WbL>ChIf>tcY!aB9aiXa%UL*gp]iRo6_Y%E:ck}*5hwZh;DUX){bj;Vst)~L&');
define('AUTH_SALT',        'qvWOQh_bG]Jun15G+V07d];$n4Ubh8HF0<e(%i+hFbWH.qIc}xde<v=Ioc}E,=iV');
define('SECURE_AUTH_SALT', 'Yw6)T%aT]Furo*}q?y6>nH9N[8JxTOwVw hDG$>9_n#S>g#H}_bi}|Bo,#R-QqIr');
define('LOGGED_IN_SALT',   'eI:a^ZCqZ>DG^LXbXQU+uc6IZyV*d1NQ%F{dMcK=7o&MropTe{~vW;_KMMv6_9Ip');
define('NONCE_SALT',       'rYqN?c,XX~S>Fa<.Nl)&(&cz5Xc<*(T+8AK]*f-t:}x&=[>{=]VhVgF0&:$zM_rC');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('FORCE_SSL_ADMIN', true);
define('WP_CACHE', true);