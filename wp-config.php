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
define('DB_NAME', 'opora');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '7gUhyGgk/7~+J>93##_<($azvDu`i0Y=q(rhe{P/1(kn4xbG5!t:;0_CF=|Zs91i');
define('SECURE_AUTH_KEY',  '*4/DVP/aU2RP7e8``.^U]me0_S#RHD3tDSKLy|We|<k(##mG+%ddaQ57tE!Alx/(');
define('LOGGED_IN_KEY',    '2]{t*$_VXW3iGl5>&%+t!{=|JYTnA^uvA+_~/uaw5;S?tc=L|ph$.|(K23^oA6f|');
define('NONCE_KEY',        'h}6a~u33&B0I^X6F~EOr(*}S9#r?#:a]NLxIc94xX!-86z>|VIgkXFq1,GzIwOt(');
define('AUTH_SALT',        'h43Y(|[h@RGc$@+Kl,!dJw.~O>YgfVZX=x&{lDq:J7mcuFAaFLP?otH1#/{U 30h');
define('SECURE_AUTH_SALT', 'kE9id^Q~@p=M]?|0p2V!.Lk%hlpAuUEh!|`?3MV|@<%6pccm@S[be8eE^DOA-|u(');
define('LOGGED_IN_SALT',   '!=ctF|zr)*+@70{Ld1x4umwX^uDO-_Ljv$lMtCp>9+P=q??e@8Ibc +y1u~@A3|c');
define('NONCE_SALT',       ' <a`/F!kQ)4L`pb#_<t3#`@g:9l%H3-|Pm*[R,6P?D:C.i_0J6l#r-]$4nlxJ6XZ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'opora_';

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
