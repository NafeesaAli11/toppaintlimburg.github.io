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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'toppaintlimburg' );

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
define( 'AUTH_KEY',         '->/s4z<lV]x*-a/mG/4>V7<Euz.(wwe?H:s&<$`jy^i$l$o-:}2|N.67:D{fs&sG' );
define( 'SECURE_AUTH_KEY',  'AD=__N.}^dge|qs&>PKFlJ@SuJcg?0zy6w~2P+k -l`*S% $<@_X]c,rnzo<V/bV' );
define( 'LOGGED_IN_KEY',    'bdL[!0]|05&*5,?u/aK,jBn#J~J{^@>N%SEE,Gmo_:*nB=Z)YODMv,XgG<t|^XPj' );
define( 'NONCE_KEY',        'tliYrw+ASH>q7Oer-@ufm6Ye{s=;5O4<nSa!#]R}HbX1h(JJl-S1J5Mf9lH}_R>7' );
define( 'AUTH_SALT',        'ndpMj#z=bmYld5vnsQA9;zP{$UcH8J0,^oz2k+ 0wo0s{zDY>v0#vRl#>Z)H2L(F' );
define( 'SECURE_AUTH_SALT', 'S[l,:0za%D6o)d8b?JPzMVheM6lf99#PloBHazBUowJk79&9DT~tue3zy7X{TGiZ' );
define( 'LOGGED_IN_SALT',   'F7(s@+HwghBeR:!_`?(~4VmdW#tvM7,d1/HI}f(kGpGlwY6=L+0:yUCuF4r![FE;' );
define( 'NONCE_SALT',       '+Ep|+0y5]?=zNAQ_@jO}+s5:$7|tHNCd;TcBz2}dh%pRj$=2nIe[G 4t>}}1G6k0' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
