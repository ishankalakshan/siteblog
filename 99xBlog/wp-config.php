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
define('DB_NAME', '99xBlog');

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
define('AUTH_KEY',         '{}S-]-}A|RiYfDO#o%_AjpCB,/7^}J?fZ}|X)s4BQ^H*v)x>BXMxF3@gej0hfs16');
define('SECURE_AUTH_KEY',  'ex[{l`>~=#AQhTjB^Mx!Pf|<=HV8.3;tg{r>}0B_7Ra*][1-&|0qM_rHx*FcJgrS');
define('LOGGED_IN_KEY',    'z;bDJ^=L8o_OdHUe&ba_,f~MQXAG05WEIC:E=5$cGyel}h.G4g>M<k7G-?|v:63`');
define('NONCE_KEY',        '5X=p||czJJuqQRG{q<b+mWQPQqIyhi:dL{:~(15fv2U~_S{r|wxI 5/3ehr0/Hq%');
define('AUTH_SALT',        'iRS=%**kAWGN.viwmkYP*9sTC{[0H8{VxWJi_c:E5OVqhXi@UobsBWOLho#4/c)#');
define('SECURE_AUTH_SALT', 'L+z.*w-Qx0#,0,=ZB>KL@&+iM7tl(Lb2zcW;Vw/V+M1!#@fvEZA6-JIWu5@+B?x#');
define('LOGGED_IN_SALT',   'o~q!/UFLBmX[+1#Fr<gp{MuSWMdxPN=}$a,5f<wA(R[)dsb|-]T;Rd[VcdpE?eok');
define('NONCE_SALT',       'g.bMU|qV7d]0x{g$3$H3k3|a}*o8dcd5*AY [d4[Ic|MiTeJvXZ1$%?dO@6[r;TK');

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
