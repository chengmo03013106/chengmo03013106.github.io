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
define('DB_NAME', 'new_live');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '10023810');

/** MySQL hostname */
define('DB_HOST', '10.18.29.119');

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
define('AUTH_KEY',         'sq0=Xi(0.sH%7HN8S|mT?.7YV`)BUE[,Oocha#rU$)[b[+C<q**vg_W$lWyKSYj|');
define('SECURE_AUTH_KEY',  'F^O#!<Sl:V^|M;r8GhnmZd<`W+-7nwG[V( Nc`R1*C*WE|&w8T2v>c!0vf/i+Ok^');
define('LOGGED_IN_KEY',    '!q4bZbEkdbg$JR,r{u&>v|+V47xiXl}lL5gC/g68iZneO6vx}OH0hGe9wHa1m<.S');
define('NONCE_KEY',        'vIkF^I=Wf`SnzZQ6+Hi-dy$U&ZVYs6s`xqlQ5@&|itd|=5ru*hT~g4/4&EOZm!?O');
define('AUTH_SALT',        'Zqu-8[}$P;)~fX}b-{V RB/* 6fmNK(G8,_yrk,v=4`~XCwQiM%JsiZr|v|9-t6C');
define('SECURE_AUTH_SALT', 'O%N03+&=N>-eSun!wIf:/Km(^$|&)%*TsGBy0m(VR:-5c&RM{3<.pM+Tgc@I2{Js');
define('LOGGED_IN_SALT',   'Mk|%7-.^XQLSJQh3.rpika>_?FxdVXp3$,/u|_A05OvzTm)gyuD*mz+OHmhDxC-k');
define('NONCE_SALT',       'b^.1>-EH3bv7g{=yk1<t~n>:WYl0yJG[wt,Bye9od-%]94#A$$5Gw%d{0 +4Y2=|');

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
