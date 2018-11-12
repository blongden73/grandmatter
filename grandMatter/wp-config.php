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
define('DB_NAME', 'ben-zbp-u-189063');

/** MySQL database username */
define('DB_USER', 'ben-zbp-u-189063');

/** MySQL database password */
define('DB_PASSWORD', 'bl118634');

/** MySQL hostname */
define('DB_HOST', '10.16.16.3');

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
define('AUTH_KEY',         'X0`-@M/YsIFAha_`]#imH);Kj8C3l;,]Dhd,]Cxg]r}xg;iZRus*K?0[6(jguOIB');
define('SECURE_AUTH_KEY',  '?849< vA@%L{Df$[n?W:8684nwXO;u!3Hb@5WpxOE+yBv8WSQGPqY7}JE( C{Lfx');
define('LOGGED_IN_KEY',    '?bOCxP(&_e4,yh7F-M(.#P+_Hh9OQm4vW8!nK+pN!/(~Yb.B0|;1/FKXIDzs55oS');
define('NONCE_KEY',        'vG<01t~W,0;?Ry>sI*DVe>z7@O@zN<K2$(Dez?9mx:)4/jH/jRy++dG%J{FQd,lg');
define('AUTH_SALT',        'baPI$evj;GRxhb<E!7KsXVP#XrG0d>`$TN Y:+r(m{BwdKR7*C*thg&rt,RXZZte');
define('SECURE_AUTH_SALT', '}!z_:CM8+<#Bme)6XT^G1Lz=Wj>Fx3i*X.&E4(!EeAF6#G!gB+SJFaXV%Y/-s9Q.');
define('LOGGED_IN_SALT',   '__yHjK[acmIWO~Rr}b*%0;tns!S0*)cS-WL_1_v~f(rnr{AK[9+CK5*`TLE3v[:>');
define('NONCE_SALT',       'N:akPdx{bkFtNd:M62Tt?>d^L-QVYdP$ *0I?nxy8g.}w7!!M4;kFQ(-D8p^C^jd');

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
