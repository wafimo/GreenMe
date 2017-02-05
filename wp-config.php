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
define('DB_NAME', 'greendb');

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
define('AUTH_KEY',         'BKp`[A_-,jn_p,#wa.-TP31{E+wC8 h-52IsMI!FvPz[c0<2 [%3CYFM>.]cY2!3');
define('SECURE_AUTH_KEY',  'vjwbOqf3~uR16n$slRQ{iO[2^syGoYKR2Oi%|1icaUUKKX%hfsN-^tfY,O:AlG6{');
define('LOGGED_IN_KEY',    'Nlo03y[f.E(ElE/$Tl1Y,+&&esfwE<:B3cQ$gyKz5aQ)O@:i7l6RHsJ+TxQlN_6K');
define('NONCE_KEY',        'sz}lA[e`2vE{.JFCnV]Qj8;X>a8Ysp@gtqtjxOYk3L//9ty*XE*k?IRFQ)w$xw3u');
define('AUTH_SALT',        'h:^$9<>W+&vP^f[1#~+A:IrXuWXjC~$V:&^,;i2naDll|75+)B{4UGpX?Jby3)-I');
define('SECURE_AUTH_SALT', ')om`$}pV-J4OlDv*a.o!jYuOYG^ /W]7YI=na)A)vj<go{QfGRVlk9Ed(^gdX@Q(');
define('LOGGED_IN_SALT',   'qBuu3zd-U8WFKjfq7H?^e|<Ms3xP@IGsV8m48VWZjzYA=$E|~L;.slOGVPctf%Iz');
define('NONCE_SALT',       '[GGO>.2(qv?k>Tf6H=i0X9vn,U-wsMN:bKFUT@PkknkrRV.R:yQkC-E,0^q ?@(d');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'g_';

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
