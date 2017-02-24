<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'database_name_here');

/** MySQL database username */
define('DB_USER', 'username_here');

/** MySQL database password */
define('DB_PASSWORD', 'password_here');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '3Ts`uFgYw[,1/DgS+C@8R*g |*|-vwS^6</UsXHU}4QL>Qala!V8/]<nJ{lgD^Eq');
define('SECURE_AUTH_KEY',  'K+r?&KC#g=0Q):u.ijC.lb>yezrCE|+VkMK2TS Yp6FR@`3sZ,)/whI=gG@3^ |$');
define('LOGGED_IN_KEY',    '7J3lF}K19E:}CWR>1W9j*vPlqs^<GuA:29,2(ox<|Ed|`+Y-s<)]Ii2NZJuz-`CU');
define('NONCE_KEY',        '7-[%:BnO^w)y0#uN:}a&Hu?ES?4!xAoFLT#7.G!d_MqQSt/T Du=$eo-3Ppwr8st');
define('AUTH_SALT',        '~:sl{(,1L]=n#WUO?uKSdSwryrr~vw*NWC11[$,-X+E>5hRm~}IC- ;KLo5dY1hs');
define('SECURE_AUTH_SALT', '|I8sW_xJ-]DkUQ_K*F|=,Vlbn_>~XEa)Ym$-bDf|x_Im9@9B)h_*cwjDY6#%;@&{');
define('LOGGED_IN_SALT',   '-i}WBxgmO/{PQE>644/>1{%C+3R!)/m%E/2A@c7e|/Y/$TeoFv2jK/ZZ!E!Xp|GS');
define('NONCE_SALT',       'ntwdbdvTp!--[-]ib(]D(+~8F+ah|R?8+ bod]w[ZNiWz8Uyk$KlfB|rayV+LOo3');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
