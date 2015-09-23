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
define('DB_NAME', '99xXian');

/** MySQL database username */
define('DB_USER', 'userIshanka');

/** MySQL database password */
define('DB_PASSWORD', '99xt');

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
define('AUTH_KEY',         ';d?a5Q0yR! C4)z+e5+s2$Pv:Y*xVEx0M$dCtgu1 h;5f?nS+hgX%&|eOgF-sX;z');
define('SECURE_AUTH_KEY',  '^L>O[vM?[Al-A#dtd_r0227j.xFwr),kqh#L4+3Sn3>8lD@g0%s9``3ii[vRPdcc');
define('LOGGED_IN_KEY',    '/=B9BFP_VapNRE<QI3tt0Q `h*w}fv/Ds6LfjECn|9f;JbGRm$K3uTKdsZqdDS}%');
define('NONCE_KEY',        '7L)R_,YPn}}TEHv<g 1iN98W9sj#$];MQ 7,n<)Lbc5{a<=;EGQ7O03bx-re+Z&&');
define('AUTH_SALT',        '4|gPnj,OXV;{u&a|m%7OsqEp%poAIX],RFnkcw[|y6Ycc-#ahw!he-yUgW-/K: D');
define('SECURE_AUTH_SALT', 'G2w3db:nem7^yXkbXNO@rHwd#9yLJ3am13T-xNOy7p)+mzT|D*&cbk_NV|IT~@|/');
define('LOGGED_IN_SALT',   'o DpF.W-!PIy)jaHyh@pALOjl=*-I& 0n#AUlC@w|c2A{5mTx_ejE|B9mLF(k+|k');
define('NONCE_SALT',       '}`8l~)6yPkedxPsm9]6F9Zh6K7UM~j4sh5OAdl(F0,zgvuS$Q/H#?+bi+<~g&K_T');

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
