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
define( 'DB_NAME', 'ecom' );

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
define( 'AUTH_KEY',         'WR:qc~VN$#&|`r8TM&k]DZ}v3O@:qe#c[g>mcniNmwA+0e[LJ+=X8IhNo!2S)*,E' );
define( 'SECURE_AUTH_KEY',  ' FgeU^LWrr<}vAP=Yb;8#uKbW=T=)1QE`j+L2Qr0BqC/@5FtCG%4H2)y;fuk)-]}' );
define( 'LOGGED_IN_KEY',    'YZhKWppYpegg<FSQZP,K}UuigqzukT8OShOw9qgrrs5BYrw{+@ktZqX{Q gPywsL' );
define( 'NONCE_KEY',        'S?l:b i%MW&,X_d1z}XNm(t_sxF^t^Aw1N5DI5-aS[F-H)3kZD4Qgz-`W]X*t#fl' );
define( 'AUTH_SALT',        'xz7RT@/sG|ScDo#LxgSm,VafhLH3O[XLyqsj@L$9kzHV1cqRSh!IE16!%<DohbOp' );
define( 'SECURE_AUTH_SALT', 'p=CN]K,9vq>MB&,kvGcAV9Vjn^<jm4z`(/!0VlA2y*u.;,r ?(S3OpT<T_T^{0~*' );
define( 'LOGGED_IN_SALT',   'SOje~FIx3{L<nT608#zWBWQ{p:jU)!$p|_Vqz#h5){pFumfZHvZpAC`hy==B3WBg' );
define( 'NONCE_SALT',       '_GuG1?NklF&G|2ILj$Uyt)Z*jGl_fq@H;8ik?-sS4;V86jqXoi713wpgEuu4RkxF' );

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
