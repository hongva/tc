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
define('DB_NAME', 'today-cambodia');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'YB=Za-c+R R GZV%`?@ijFfJLc2{:O`j$V-A }a40:`!#1Iws/D0tqmNcZF5y$%m');
define('SECURE_AUTH_KEY',  'UySw)|Sl;qd=.w-d?9CgjFf>{A<wJK^{gZXhR2JBBXUQB0?L98+_&,ob,@?%eozn');
define('LOGGED_IN_KEY',    'Er8hCzVbWfo9TH;{F_0B*bBKCrjsz3|5hYyd zD^jz1*n?e{uTJ<F+^Xi<KIB-FG');
define('NONCE_KEY',        'I#3Y1)SgV0@geYM4w/ [i9q$5gF;hgUx9)I$EBmn$v2tERR#}iS$;R>XKEX{|B#g');
define('AUTH_SALT',        ';v,eiZ]!{jkb7 nn^Hd+12vJQ9FTC!cWH}%[tLRB3SO1CD34WH!IP{ nP*)R#]pC');
define('SECURE_AUTH_SALT', '6yD2^^*al?h+@&l8Rzh%5IC[Y%g}p9DK)Gi#oM;k&LceX%#`~%:JfFiO<7qShld?');
define('LOGGED_IN_SALT',   '_lCf8=}[V]7IW}8_zz8@SD!I/`Yk=F8Hg34#1b!*><9n).&fm+50BK#TzE:{U3L]');
define('NONCE_SALT',       'pR%3bc2bN}Qx$/MI`K?f:;iPrf#Tw7.cmsW|9V*_7Xb,Hse*O^C],=4jhJ)Fnx)y');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tc';

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

define('FS_METHOD', 'direct');
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
