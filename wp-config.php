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
define( 'DB_NAME', 'handicapping' );

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
define( 'AUTH_KEY',         'iWol!&:ePT!*vcHr2e~CveJCK4l>N[5+1T/I~!/L{$~.DrX1n8w^Sz%zI}i6k@B5' );
define( 'SECURE_AUTH_KEY',  '(|D< nS$=$j3&4D3FDEIso 0Wb<`:zbzKhQlg_l3Jd-Ow.L`@e}ic}fT]TM>Q|$C' );
define( 'LOGGED_IN_KEY',    'RY9Lxc[|B-9>L.In8<&oZlo}>nHdw ~{n{xc/}K/8I[t59PyKpcq_|v+bf;!=&t{' );
define( 'NONCE_KEY',        'o#3`F,sd1=lD H*yLT@SJ9P9Soh>Wl2=XL`gH$^IRU+[BNI4e  M|*0Y>YYYs1`0' );
define( 'AUTH_SALT',        ')=+=DQE~{>wR?Z8|}>B^T%{+,L%b)8N3}sA4R{(:CD*fveYm&B b|I);,)tVr`j5' );
define( 'SECURE_AUTH_SALT', 'N[$mK[yuNF~k#FfVFj4z|bucZ@6E{U[ArAA}w:)f6v8j2L>LqH=?-rZF#qa2rts%' );
define( 'LOGGED_IN_SALT',   'l ~%!w9|QjxFoI]Ex1L<wt[1W?Sqe-_s;4t+$>]b(z~FKjR7PG/,iE,?`%IgM5b ' );
define( 'NONCE_SALT',       'AD `Ico&5X(wdj:>$/s2Pf:t%,74;&Xr#G)%j~l#0}j,uMBF !Tp0>^?oo~G&$xK' );

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
