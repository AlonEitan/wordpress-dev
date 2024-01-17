<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_dev' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         't) aDB/D}d#_yd!Jr@JnLLYCbf~Z`}ZA.UlOy@GylUBwN)>`.noDs7hhc9#2-ycc' );
define( 'SECURE_AUTH_KEY',  'CDZ&Ua#A))jaK8-2#6[+[@aA<<^WoV3n  6%,(i(qBJjTV~A8JrE&V3t0W6s.Z6w' );
define( 'LOGGED_IN_KEY',    'xy^ r}9ld,0AZKI79#](Pl9CPnlE9ny3%)0kPU:F1;<T5Adn1)wMNwV{~aR1js/W' );
define( 'NONCE_KEY',        'Z9-]jkXTsAGX0#hvjG=K,~z%+-dwQ]_EE99Qu-`;D3Cx$Rv7G1^p:}_IVB5R1$y]' );
define( 'AUTH_SALT',        'Xtu3x%hK`y,iJ%&txE2A:;!MR+Ph:H7|H+k:/@^G]/(yF.kr[HPO8G`R8J%3+LfO' );
define( 'SECURE_AUTH_SALT', '%9!w%)WMKfZOz<.(2UH?4ol!ltz%=.Uix{D:2aa|O?W@wuRt{Z=F#MO*g-0YLGvK' );
define( 'LOGGED_IN_SALT',   '^5_=Nsv*~f*| <mu5K0_+(1njYxX@}lQ{Yk3OE2*YOj{+8:_5&aYx3tI]4yBx76]' );
define( 'NONCE_SALT',       '?HD;b5O.%3 ^{1R?/GFYkvIS9sO&7st4zFa1,wFoibx5u38=56E8Oo]sVL8~?hnq' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
