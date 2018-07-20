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
define('DB_NAME', 'new-draup_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'toit@mysql');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '5,d8Qrb!p,GB=pw&Ezl79|Ly-`EPPPb;n#/c8UuMRH@L0eaL&&l?XJ`rM!R{F|3F');
define('SECURE_AUTH_KEY',  'Q20;5FDITnSqNk)w3mY;y,^.Xj)3%gXnXY|1sdNljQyPGm??v1IDnFd)lOeL[mV=');
define('LOGGED_IN_KEY',    '?2faX@Tt$lv5h3w<,b]gpl;FPoupfceo;xB=x6j3wuvwfdQz0Y&_pbFn$]!Z~BB|');
define('NONCE_KEY',        'FFI@m&X%#6IGkg[^y]_G)kXd^#]S>[#EUjlMM!Au%Jmk:RrFOdh(_snj,3zF8E?+');
define('AUTH_SALT',        'jzvP>lMd1OBbRYp)U1.:LYt)igzFAUda>z]<#gBhYPD3GuDC_X7_[ V&Q(*#7@O`');
define('SECURE_AUTH_SALT', 'q$Se/T}uVYClt-7?}J^XS4)1OU>yc2a6kOHyz rjXcQBD1.]G6g<6K*-et s<6XX');
define('LOGGED_IN_SALT',   'wO X5~m/<_<O^R~G^a`O%*ja/.ex:7E*G@V./xj+uGafM2htv6$CtPp#lt<PJr:R');
define('NONCE_SALT',       'jyLQu-USIOv=7?=k7gZ>]2(5:0meG>To8&H$Z~D%d%!Z8sB$?B:3(j}fEpp$b Al');

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
