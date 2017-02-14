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
define('DB_NAME', 'database_name_here');

/** MySQL database username */
define('DB_USER', 'username_here');

/** MySQL database password */
define('DB_PASSWORD', 'password_here');

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
define('AUTH_KEY',         'ZI=c*n=U3nx; y3+w9FSJ9v*q2HS%?eCL|W~rl<Vk|X-`F~[<%huDcdAT8e~.>Y9');
define('SECURE_AUTH_KEY',  'Gb[$2WgdG+8-wih&rrH|*<Nr-jrTB9rKAE-)TA0ahq=~=)=-b^h0_0vq]8. VU?[');
define('LOGGED_IN_KEY',    '41pW>-|V:ECOkIUnd]l6f.~iEj?.e<]WB<>#W>FT`y#u9Izo/!Yaxe1*=trgS<Y[');
define('NONCE_KEY',        'n}]E-%h4r^!9xY kQ}}`C.-~qwL(>:gF}$xjgXDr2rXbquOr7u`ECN?)vV?;wy/}');
define('AUTH_SALT',        '#$J*Fna2.g&5i2GN|S$Y6W<7ald}N2F9:W*#9r87>3su{wX|y:M;sr;z/5<+f>bF');
define('SECURE_AUTH_SALT', '*wamdH@QO;p i9Qu NIQ_AOVp7rWFZj8Zc|wH(ek8JYuk);{-@lBWzw6r0f&=rts');
define('LOGGED_IN_SALT',   'x ;9xj2FVxr5Kb)]>md7H>EA))@%iuy Cro3-]JIH*hO5+d*<C[lFXgd7Gf24n0Y');
define('NONCE_SALT',       'PVv,tF:MQZSrY.I6urcoA!mx]rwy^ya:JsuQvn1 TRp80bZ9Y#,;)-|PTJ8iXvW6');

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
