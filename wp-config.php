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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '!CH!yHP -x>D9Z^N|95YRo&!%~q<rlpA}!Ub=oX1>cey.F4(p7EM5dCb)a=tUm,Z' );
define( 'SECURE_AUTH_KEY',  'gR:xyN^z8NZBnJ!-8R&rjo0v ]e_)BNK]Z6sDBG6*1EIhWH-|jpon}-,=d0qYdK~' );
define( 'LOGGED_IN_KEY',    'ivRvsyuJFsLq qC0 o0a:h;C:uckZw 9cy3+7wL1eq7RJVYL!Fu-FhK6.<n,PRns' );
define( 'NONCE_KEY',        '{[oKVs36NB@l7&@ce+|cN9mp9?B+Y-K-=Jf11e1R+.l}<U]W5#4*=b7KY>%%3C  ' );
define( 'AUTH_SALT',        'Q?H@u}PpM3TDS/r#R5-Hoef@~[tTW*!d55)mFVZ7c<7&y]J`dUTzTFYf3};W^WM=' );
define( 'SECURE_AUTH_SALT', ')[U@(U$w} H:isJIw+.Z$]}VmGbK3 R/$`1?EfRw/EQJhw2G6)v&dHU>zsBR KpD' );
define( 'LOGGED_IN_SALT',   '3aX,xS?~Mm4j_+gKEr(@LlBN?OA*9|[#!lI(Z+BO4<4&v#Z6wZl9.gM)`c[<jm]C' );
define( 'NONCE_SALT',       'LlR~][jYIjX}sNAiC:CA=WdXQDZ/[kOlgmAbRlHmp~faxhgk2=lrPoz0X8}4;|4~' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'iti_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
