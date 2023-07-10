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
define( 'AUTH_KEY',         'DDK5B{D|o!,iLhbN,4QU&iE5KTO@}ORUW6=r[vcm?{K{R2p:Bj!G*Rw:Nav=5.mL' );
define( 'SECURE_AUTH_KEY',  'Vh?eu2}R$dPE7Yb!A,rK~PTiJX]ai(>5Mu~OO9:_egTepMFP{sUii|V^A(f^?m5f' );
define( 'LOGGED_IN_KEY',    'RFwC*kXTFgze^N}R{ZhnBbFBDOSN@_<UR`m`RIuG^9#ju !jG=Ua.n/NR+9K88Br' );
define( 'NONCE_KEY',        'i08dZY-c?g.3DLH=C%98wD=5#~c8d0->9?u$tN.d{,HygN@p2% q.Jy$*CBL6Y,p' );
define( 'AUTH_SALT',        '0JEPkR%(&%{mx5uBfSVf0~NBk=]VFy4#Q1} }5QMP>)+xbX%}7dr0y#Djs+}h?6X' );
define( 'SECURE_AUTH_SALT', 'E~*J-D#YO@5%B>kI>)V)e#SaYLUl5ek9CcLt^*4Y]!T99*M( ]wh<7B1TKp@I|.<' );
define( 'LOGGED_IN_SALT',   'KS[4u)LJri: :TUK??Y +DTq>y|vE%K9lLbE]DSNfpzqv *JUf*PAC]We4NtlZQH' );
define( 'NONCE_SALT',       ')N=ptZ]a=2v+[;A0y[*?Z]~9@H3x)ZK/>hli)<c!sZRp`$n]v]5}8rn,,N_P]ji>' );

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
