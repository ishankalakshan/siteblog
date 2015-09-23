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
define('DB_NAME', '99xtechblog');

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
define('AUTH_KEY',         '|MA[,D.~LgH!]!h}i>OGJfPzGSi7+vI3AHE+1m3ns>$+pUtyU=T-:7Uj?w0p-zX)');
define('SECURE_AUTH_KEY',  '8[KUa;Mp&eF>:@Xy--mJ*8!Is4%|SA`MJ^>!M:_jx0mH0:jh@U^1Jl^K9^[/j9mX');
define('LOGGED_IN_KEY',    'Im:8Tr )n7E&Y?6@1iX%4hF&]-`3-oIqP#dVKP1O/U]{qEFOg1Qpz^@z-$Kzk$X8');
define('NONCE_KEY',        'a^I 7||R1z#/#(*2tv,uNU3:LO`9 .HE:J[#vyQVD>G{RfZ|?2ihWy}O$HO9g;!V');
define('AUTH_SALT',        '@Az0v08c mvl@zP{k6Z%CVRg6j5v,G$l|/b1B}|}Qezp%P$ aYsB;yEdd4Y0@h7P');
define('SECURE_AUTH_SALT', 'AdW4T^LHW]cf!|cm)d*FsdZ}*od2Y9m7anWp-V+~/9q/O7BH-ghY0woY`6F`$Qk]');
define('LOGGED_IN_SALT',   'b4h<4m=#P9%S4(QjLW^J6(O75P|p~ESUn6|^sJLFVgzk[93={m9C&%)_-H>%7PXy');
define('NONCE_SALT',       'RP0?R&b ;m;&8JYhGyRmhw.mqR_IaP=Y*{l;>WX?fGX}tT*3^TXn}~8=xV+;K5c#');

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
