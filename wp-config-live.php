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
define('DB_NAME', 'dttw2');

/** MySQL database username */
define('DB_USER', 'dttw2');

/** MySQL database password */
define('DB_PASSWORD', 'rY6gJQd!#uD7VtmR2m@h6g%H!WRtmVCj');

/** MySQL hostname */
define('DB_HOST', 'dttw2.db.8059865.133.hostedresource.net');

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
define('AUTH_KEY',         'C60J@m77/VJH`:Us8/PEwYUxo.F7_uHD=!Ed!){+G7oew[<ccW{$>@aQB;:>O!EH');
define('SECURE_AUTH_KEY',  'sPb8m@p}.$d.|5Mpq{6Ak-7O1EPnkM&Bcm<~(2Q| LM}4r:ZN,hO!{^2AtbZN=fM');
define('LOGGED_IN_KEY',    'P&l.b->$!un}PMxg4%+-Mp!{JF|YeB:<LTadk=!k#1}=2%O0(#1]QDbrkaF]Z]g=');
define('NONCE_KEY',        ';O0J#hiv@0doV#,CH~qQ4)!>jem9XO`{GA@@(,6ax)E{U#cSxXN[rF9.vls$AQHX');
define('AUTH_SALT',        'Tch3vNl&1()-hD~%5;Phhd]s3/Ah~q~Pa}fWDdk Y1uhRYQ9E&#`5U~E-gZ^>E;}');
define('SECURE_AUTH_SALT', ')?^slxV#-g+]%XC?+=*mQx{VfgX.DaQuvA!eN6}#v ~^@Q%8rK_T$y]a`H|QQE+6');
define('LOGGED_IN_SALT',   '-f(nU_$SsWC&#26F)Tts>$;~0}vn}N+f;pFp(eqI70`,JheXc$.UWb;(YClG%.Ye');
define('NONCE_SALT',       'T?HHlTLpRUktrpbHDA*+wh {4aF5Dpgshp0R1@E:.m_7`l>fFD%_-|Cwk3kAhOH)');

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
