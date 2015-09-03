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
define('DB_NAME', '99xtblogportal');

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
define('AUTH_KEY',         '~!BcwImnCZiyaOi]N+dm4S3!A-(IEo!|!$rr!RC=~v0d@vR/H%=P<Hl9OD|Rb[l{');
define('SECURE_AUTH_KEY',  's!v,V*<So=pLaEe&lDL%PkmOweQ=d@EKH_MZ_*s}Av>?ISgPKIu7}zALV~9vdPO$');
define('LOGGED_IN_KEY',    'eBuPo+i-Du`:7n3V%^S6<lxVqZYoT;XZj5*B#UrG1_=u8.;{)Oyh{kDk49l|w&8_');
define('NONCE_KEY',        'IUJ/.ua+8w(Z<JTHim&s]U8#wFL0c5uJ!&N%}P#|fmsK.8T:b/-p0>||OTSqD-}/');
define('AUTH_SALT',        ':Gh^I=2vn8:+tN5cK1m8&v|-3RT|TQ8veBL/[yoQW:PTt6y%qNO-D+p(`AP5o9(9');
define('SECURE_AUTH_SALT', '|?nU26[;#-DGg<3KP->y|KL+1|]ys!I!%|C*Gw-:Fp%Ww%HVcvDdtF*SV{${#*<9');
define('LOGGED_IN_SALT',   'HT 65VTrjQ}aU>/fV|S<,a<2SCa`8c<;i@X,*%S7x`g {>kuZEK>ONR3v[%W&J0$');
define('NONCE_SALT',       ')EiD3(3T4s-.`b,5bcUv&k)>M3S!H1IU,Pa3D=*expvyncizL$W`J&[;`lRpamA}');

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
