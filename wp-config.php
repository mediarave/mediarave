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
define('DB_NAME', $_SERVER["DB_NAME"]);

/** MySQL database username */
define('DB_USER', $_SERVER["DB_USER"]);


/** MySQL database password */
define('DB_PASSWORD', $_SERVER["DB_PASSWORD"]);

/** MySQL hostname */
define('DB_HOST', $_SERVER["DB_HOST"]);

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
define('AUTH_KEY',         '6*uU[B:;s4)FnN]|C~]u=`L]saM2$5sajHEU%:tB#I[sEQ8{W,KA?Pz`A1f`?z[-');
define('SECURE_AUTH_KEY',  'g;&gs2G!6r)QutFxZz>unkJU2pLNUF!_)Hu6!QA*&n`D7Z@#xZ;Xodn|5EX~1ZSa');
define('LOGGED_IN_KEY',    'DW o$zL4h|^<!(P=N78>,**X5Uv+534[A#n&gf)U70dh?x c+2vwT|>{cMR<8.z0');
define('NONCE_KEY',        'Eo_W^&/p`]!y(FTrc->b{%FMYXrMd?+g XtZ-+SLw~QTs_oaxp84 -)u9EY hi_.');
define('AUTH_SALT',        '.SFwADkh02_R|(i_s^waW@{}AY(4a_-Y>JbIstM*|JDUd |{M6 ;LY=r4@|3;c;J');
define('SECURE_AUTH_SALT', 'Fgyu5 #8oLSU|N@FI|-M`d3BbMk-w9xnEk_@V10zpU,&DxwM:77Xnz#uqjXCq&i#');
define('LOGGED_IN_SALT',   'h16~l,)si3F~[s>gq*Y%pk&{X1g&2-pam_tE>}$:ub(4IK$;iV7B+5NpU*Cs=(0p');
define('NONCE_SALT',       'ClWYm,u:(}9ALGPFU6Z|>V0enN,y*I6uU@yfA$G[_-^IX-o}04vzx7-;8F-s`wi~');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'rave_';

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
