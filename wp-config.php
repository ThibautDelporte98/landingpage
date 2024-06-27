<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'landingpagedelp' );

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
define( 'AUTH_KEY',         'F9B%JwpkEoj;I^YD|_5#Z&dbSk7]90c6qd8oFF6(9J(y/b41/2.3,1*-x7k-%$Y2' );
define( 'SECURE_AUTH_KEY',  '~ldLY<wg#ZZe%cc9DENT.};ogKE5tpOQ?m+3J_bvER;OA7wkJTR*^mHm^/G@Dv*|' );
define( 'LOGGED_IN_KEY',    'XO+ azr8X]DS4mn3SD{jevCS_Pa 0MLUWh0;>w1X}{3-HY43pBn5P*NV|j3O =8<' );
define( 'NONCE_KEY',        'g,|EJrJs7P81<5LeR,/G79uS=V{t4/8h[}odwb%FF-29sH- 8|=xjM91IR#cicQn' );
define( 'AUTH_SALT',        'K)dz#85&MG*lvUQKp=Ju<Y)Bk2Ql)&QIT)zP?>X((18D]TYQ]2@jw?gBu0EP wkG' );
define( 'SECURE_AUTH_SALT', 'X/vh/*=2I01!?4DrlJvX&r;7Dcaukkncig(@1`i<%>L{EMcJA[)q,]ZM/Y=:ol1X' );
define( 'LOGGED_IN_SALT',   '4Qji_Me,@>lW<Lmo$TDsz.%B?.naKAf]u%@U3~tb^_A( RIwtj`Hpv+C=4QU/wXc' );
define( 'NONCE_SALT',       '=`>d=fO q9/l?p@~Zd!*a$~I#bw2q6>WzCqM-q)As=Tpph9a h%=+8!IH~P^vbGs' );

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
