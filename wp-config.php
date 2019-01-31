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
define('DB_NAME', 'eshop');

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
define('AUTH_KEY',         '[ZxqcU6Usk5OVf~Aqpcnf=.4&N?(E_OlAhH+xUL^`FQ c6QRYg(N17>mr8uq+dVe');
define('SECURE_AUTH_KEY',  '2,24px/.VBXmzD-R^g=W$:d9bNk%P;ZoS1^rK=dT1^N_K4QBk`sZlkXZKAq4y(F&');
define('LOGGED_IN_KEY',    '#eo`I<!;,81^[EtgJUQ.1#7BJz]9|=RK<^dc1C~-}_ILW.8f6`Dd9YO|Lar8L~o8');
define('NONCE_KEY',        ' H0=h!x**#Pe.2[Un&ae/au:sg|})dn!7x[*XXAOUI*}AOs+HccfhUi;tFq4B~<`');
define('AUTH_SALT',        'oToqxS]UU(+alo;GQ=sd~(1yB<FI,Qiv?6xM$,`BWrq[] Mq<PF<c[:!G5/q~G+r');
define('SECURE_AUTH_SALT', '#3dbWW,z!r{3y9(5oPj4oTTmR?{Vo{;#pvtRmR6l_26*$${>hF(=NZ:]GFCq$hF,');
define('LOGGED_IN_SALT',   '`a(^ri4k%-6Jy3nhsdDO%dHE+rD(!3K/5>x&u-OXT)0?&bx)-T#;jOvc,icx|//u');
define('NONCE_SALT',       'a?(Sig[o?3GU]$A17e?c0#7:`~,^SsMxI`%EV7&knO;n>K!lWhyvMen@$#55P!Y.');

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
