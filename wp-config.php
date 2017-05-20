<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'inventory');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'root');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'root');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'uGI%KhDHW#;.Vw`xHfC?.x3O`iv4yJr6k6D-<mu9W=e$5TO&3l]|j2l}.pDe/Dr0');
define('SECURE_AUTH_KEY',  ']CIzMTD9cz[g!9SxGHU>OROydfLB%0pEDfH~nF`$_J7@NEo6 YvtYLV}Wu!Zd]}-');
define('LOGGED_IN_KEY',    'aG05?TZMC?ZLTR7Egu6%FJ1&y&H+UahVw7,jThnCg+@b+D{$m#3.} /6d&Ptpa1O');
define('NONCE_KEY',        'X_{,rMHA(tEDy/A7zIpL]#^d!|S1Bm[_Be|#H}=u$nB#r~kKDfQPo@9wS1AsJrUT');
define('AUTH_SALT',        'z-w7-v,}GTUqX|x]ISL+6-Uu|v|k#hNFK4e;$#Y_ S0+`iHOl~XZZi#7,%-QdS<A');
define('SECURE_AUTH_SALT', 'Dv.lI|</:;;(v$LHzM7jdSC&l-gOCb$lHP5PRYiy^Ty09jpBt`}:oUrcOb).3i>9');
define('LOGGED_IN_SALT',   'aR7GZiT-G>res dX9dO*rEp5[wC{j>JEo_6xUlHbx9`bQ#.[wZ7ccw+BFJyn`9qB');
define('NONCE_SALT',       'Hl&AoHo_G|yKS.p|.uRi37Pr6Lufw6|4O&O.|~8_m`|<~wnzP!ykWgMJHb}O@~j&');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
