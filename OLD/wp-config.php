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
define( 'DB_NAME', 'wordpress_test' );

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
define( 'AUTH_KEY',         'X0+N7s0xi,gL$WP0U%o7.6)(bG};RDbhGf;73r }nJN,vi8s;sQ^5Jt^MIP#_[ZZ' );
define( 'SECURE_AUTH_KEY',  '66=$F376EOS1o3_DN6%^-54pM9!GL@_ H4#DwJpO]3DTb+D._.-cB,HDNmHBmk_a' );
define( 'LOGGED_IN_KEY',    'Ii-ld%5QX;,( sJszrn9:`war.(#Sa^3]BIdxYtv6.Xqxsb,/.r1Ob(-y! >%r92' );
define( 'NONCE_KEY',        'sz,rWe)ilxY]Zt.ne/^fF ~C2NKl,N2A?mt{3S(B4M;XXV4u=n{H;3I?.T_J%XS:' );
define( 'AUTH_SALT',        '%q`j&IUR;h11QfKEi2N^b+hl>`LK}<QB`TmFh<JlWDj@uMxf&kAA ]-7yjBv5iq}' );
define( 'SECURE_AUTH_SALT', '#!5Zyf[{r<zTAcTZT9`x]h=I{U?Gqm;[S!l7DuoYqzlHkI~/jzJ48JY4WPh}A3p{' );
define( 'LOGGED_IN_SALT',   'tkwT4p}<k7)7}y42Z`%DN_f6L$)UW5%^|)%%?sr?cx@3S<3Q_s[NdrJERLZ](5O:' );
define( 'NONCE_SALT',       'L= 5TT?R>~*[!I:VY1XmV6(:k(SEb05*Q.zv5b2 r[T_2G]*#DN.~>&OgQfaXHGD' ); 

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
