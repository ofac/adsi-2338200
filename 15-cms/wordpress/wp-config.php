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
define( 'DB_NAME', 'cms2338200' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'xL:,Zqu,sctz^c0q)4wf1Cem+ce QC}wzqu?$pC)4lTX>J$awGw#$@k7e^ut=C>g' );
define( 'SECURE_AUTH_KEY',  'SDm%LQ!.xv+}T93mHSahwT?JJ=j Yckmp}~;-h`1F9#*N6cz|Nc&)@^*Zf[0[0_u' );
define( 'LOGGED_IN_KEY',    'SB|-u{>)L-qLdV(lf]P0i<;,%-B{].m)Z.N.D!gzj}JyvWwRB7uK}Ss4wzIajf=o' );
define( 'NONCE_KEY',        'LQAxRv&t`Q+Fs>mXhWQGd&LD:]7lESO0A@rrpx9!)lV6y%9|8X,x2NkPlFMtf`Mk' );
define( 'AUTH_SALT',        '3VCH-:s3Sdef0mLWpF+qs_p2vQrHf{((F=_?gbXhM}!4Q@eKkiAPoP-S*Vo{h0RK' );
define( 'SECURE_AUTH_SALT', '~mv22XIrKhi$c(uI)50b@9.>KO&^Vp:wJbv,5ar8:yvw:ywv|6?RQ|bQlhsbw^OE' );
define( 'LOGGED_IN_SALT',   'vMW?%y^)^W+e09J&/b/@wle;1at7I-Hr{*~rm@3yq,c`FzBkw,k*3D->H0D28Bow' );
define( 'NONCE_SALT',       'OkDTh6Um.aTf?L~;DpC`d&y6F%{6lV=)fkXd<I.ED)U$t9<T:Ok`;j^=|+<Bp<p.' );

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
