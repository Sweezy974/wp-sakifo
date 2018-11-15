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
define('DB_NAME', 'wp_sakifo');

/** MySQL database username */
define('DB_USER', 'fred');

/** MySQL database password */
define('DB_PASSWORD', '1234');

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
define('AUTH_KEY',         '9M:W(^(&dpS@jU0()eG^aMSwt^k{zc!tsO/Q$/J_>o|omj5GY*Oy|~+$Qq7l-J=V');
define('SECURE_AUTH_KEY',  '%}!r5p37.XlD7ep l^|aP:AUHkMU|iUKg1GI$pkop0,lbtr>_PAU`V:JtEpXWN.L');
define('LOGGED_IN_KEY',    '_XqCim>(N3w8CI^j>C:K!H=T:%ho)wp@>Ap{^~DLty%P7,BgGECIk^_4rRs7]iGg');
define('NONCE_KEY',        '>R ZRO3Xn-ZoMJRJeXEFTffz1]Hx<3wZ*#4P`CrC%p[3HkQ~aG!y`*^we|q0P1<`');
define('AUTH_SALT',        'B}RG}WqBj:#~`n,bu9I|g/bV{kq/B#ZPEwS81(eT+Fi<v6cfrfh(y<01t|f[VHQy');
define('SECURE_AUTH_SALT', 'Cn)_a8(`-2_&6jrqp+!o=%v3p[aSwUz9T$LkMAQ,O9U*Myn:WlqDCxfRKdp0eFk=');
define('LOGGED_IN_SALT',   'IrY0 ws>mAXto*``ST?,Qg08{Ifz<0r%p/osdW7,@eu(+)_(A6<j=Kqs+9eFM(n8');
define('NONCE_SALT',       'km>1s$W&A#hA*zQRKWA?uKF+|vTcXd+FkrwClv9[LYRTTMJK)@~wSXSB!q`gP`8m');

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
