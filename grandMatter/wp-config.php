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
define('DB_NAME', 'grandmatter');

/** MySQL database username */
define('DB_USER', 'grandmatter');

/** MySQL database password */
define('DB_PASSWORD', 'Bl118634!');

/** MySQL hostname */
define('DB_HOST', 'grandmatter.db.11926304.hostedresource.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_HOME','http://grandmatter.com/');
define('WP_SITEURL','http://grandmatter.com/');


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'W*}12)_qxJx[n>VKI[OEPp/xC,CiI0_$~%~i}x3Kksyt([-8RZ,&LX2)ZTmK%iyp');
define('SECURE_AUTH_KEY',  'ko7z.~}Y.rf%)mH(6.wJ9~<%+2v:z~dVmZ]5:I5k$kja/c&SJS&vb<T.Cz8@LrX9');
define('LOGGED_IN_KEY',    'g0MoX^`TH0qo=cEAn[exS(x+r<V<r/DHz|T&xsQtT9=`UjpBH%qMgy}_Z^*[1C&j');
define('NONCE_KEY',        '<wI=F9Dg%vB`{,jI=a8lGjQ~RYkmoW-W+]uu:mN=14YxmA!2uKDI!xUuiC}~#h%K');
define('AUTH_SALT',        '+D kQ`CoUqELEGpFnWKF_cyX@`~mpSFqtQIxR[TD-peb#G0O_D?nw/^@GpAqs<7;');
define('SECURE_AUTH_SALT', 'U ]XiBYQNXya~g.`W4kDM^}4^]c+~S?bke:WcwlPk&X)?Gy [;8)3@.rzXfQqcJY');
define('LOGGED_IN_SALT',   'f)%j0`{+7{8-g^D!}Y>94)zzB1j qSu2%YmqkZ]7TmDevw,<8R|8H&-<Km>h2 Kt');
define('NONCE_SALT',       ']sqvL)R70_]kq>l?%!G:7a6w~+dbw0a4./9^v;P~zAyF:?NhR($NH{E|#KFz>iko');

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
