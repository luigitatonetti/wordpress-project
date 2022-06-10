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
define( 'DB_NAME', 'wordpress_s2i' );

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
define( 'AUTH_KEY',         '_MxV)CQy{l.}kFaS._An13PO^Z;pFS[yqwl+`BUf]jwBc?sV1>%rRb *nvbwhJJo' );
define( 'SECURE_AUTH_KEY',  '%&nm%?&cuJ/Ni8r8>WLnd2W>Km y^d1X0,+WvXktoWjnHK%<lf[D3B >:g~3fJ8#' );
define( 'LOGGED_IN_KEY',    ')21j3DTw.X5>o:;d(5Lzxa^w>Gqf]0_F00{,YN28%|QxZ`:F=SYNOp{:3Uk8+sq=' );
define( 'NONCE_KEY',        '7~=]Nb]/t2yKkEJoY,UJ^+rASA]JT{f{(vRVCh=F<5Mz(-xez%{ >EXhDB+5%QNC' );
define( 'AUTH_SALT',        'q95JIu?Q{ rIR(;}a:2LPETFV/X],?Lz#BQ_-SmBXD/YYwJ9,t(8*VV2w30#SFn/' );
define( 'SECURE_AUTH_SALT', 'a 1Ij:V!!Xyt~c_(*8E51}>p659vUWPBNcL(eA3Kz3fP0:N7[s#&]!_^qI6%Ky6d' );
define( 'LOGGED_IN_SALT',   '#=N|8)ho*u/Lf9wq;%3jJsHs!XYIlJSSV<i/k=eFX@hPYwt0E<vXU#jAFlKlO,Kh' );
define( 'NONCE_SALT',       'k=DZ%Fc<j{_*V9g?)tC.>J5=no2d<{G@O rT,Rs!mKRg(byiCs@}8xN@.W*6&.4<' );

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
