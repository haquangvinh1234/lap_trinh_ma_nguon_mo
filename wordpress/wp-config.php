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
define( 'DB_NAME', 'demo_wordprress' );

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
define( 'AUTH_KEY',         'G)vA(IO9Q< ePhi:mNAWOEG8R;ve@L} t*K69Xu1qVs mca!NG5[+YyP]Qw0M~38' );
define( 'SECURE_AUTH_KEY',  'DIO{HBd^JTSGvS9P_|]RNEU|pmG.1Gl5w6OkDKH)9Y04gpgXP/&vf<+f*y?_d5Y_' );
define( 'LOGGED_IN_KEY',    'Uwa s@Kxw{U@W4];u[H}to03GpD~o9T[;~/1SJyFScc+qc(byX.BA*~q2,1Pdd&A' );
define( 'NONCE_KEY',        '3/(}A[u;2/*Fz~Pu)~6gQL$ODF]EySq)QYd~2$Mqb?(@xj]im~b;sRrJ9 !n,&79' );
define( 'AUTH_SALT',        '2MfpkE}/.>>/xv]K8$tbUVXHeU|56r[[KvEdeqSg3IM[+zBUG#k$/MwCRI_q^J`i' );
define( 'SECURE_AUTH_SALT', 'xj-0l,IXW/WP<xc7nU~E=oi]}TXnwKB)-l^h$^]</vo Pn|&gOzZ.{2d-lMFdH/.' );
define( 'LOGGED_IN_SALT',   'gbXsRN: fO4NB$/}w%n,%fsEB_kA1MK95hTo7R1!HiS[V1N9k>5*ZBTPhLP4Y6Wz' );
define( 'NONCE_SALT',       ',YAzuz@<B.;MI./,)pI$Ror]T}UV>Cn;PFH+AS;?M0xq<TAJp%`f#LQhf)Y~cLne' );

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
