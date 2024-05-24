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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'C:[W@OoH$RYJ],I/..=Ea[p9slJxDl#6=(29NE>xAP`n}]^Tp6I_Kh! {3I7BfM<' );
define( 'SECURE_AUTH_KEY',  'Bx[HhlPPyV[ASvsJn|0{dZL3^9K$-N#D*U{OoG(~.[;._zPfoNMQz]YQkp%aRiSx' );
define( 'LOGGED_IN_KEY',    'lWK6AY.~x!tDH6{)n2xbLmG@T|t8 Q?-lYB`B){ 81KL^.#T$% JqqFH2W41B$~K' );
define( 'NONCE_KEY',        '1TVsz$W_zZikNT 4+*k6345X|-><CB^2xo*[/Bp6(r(RB6!)eqU?Rte$cs5pB6Vl' );
define( 'AUTH_SALT',        '.xXCCk>N]td&(6{&^8,W1Q|T.vz(d]lSkw.805FOqOT4yg}27e^N~RpN1w`FVR*?' );
define( 'SECURE_AUTH_SALT', 'CE0#{8S~sd=1$yqEXFJ73oa3D,bs|{|Z;eVsXM-,R?W7](`eCRor(Ei?!Zl9zb$Q' );
define( 'LOGGED_IN_SALT',   '9x&V<D,#,EdNY^1r`yu6{J-v_&u?YZ$Ex4VgX1B:-=ZgY)&bh00>-DYYAsmaB5nV' );
define( 'NONCE_SALT',       'f8KC?O@AE}k@~$n<>`7zb#}$yJ.VDYBP6NYv;GVhweOGsJb(cz_J5t,Wq!Wk4.c1' );

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
