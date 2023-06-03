<?php
define( 'FS_METHOD', 'direct' );
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
define( 'DB_NAME', 'gelinnew' );

/** Database username */
define( 'DB_USER', 'gelinnew' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         '~|PCfu{$_L)DXiHE}K*!AQqwVBa7 LZd5RzBFa@Q1c2+Lzn=r6sk{cQ}i9)H>LRZ' );
define( 'SECURE_AUTH_KEY',  'B+wBMN*7/_v$ *;xJvp$08A2.Op,$<QiptAt]3!COz06 !(P`[5KK^v~EMhC?d1y' );
define( 'LOGGED_IN_KEY',    'YX5|b.R?6K0J9wFGmFIY!Z-Mci~jDg%Dy:@]ey4ASRJTP=VyImp-MSaIpwnzPYPT' );
define( 'NONCE_KEY',        'v!j:+LcuMJ&L,mHW6]lyqyw<Rpt?Q? &i:ah1z>efinSZ~zMyq5Xqi2ssK>3AKXl' );
define( 'AUTH_SALT',        'wKFmEm#~~Lxu(:3g_tO9hGtU:2pD}v0-ar+U*JSYQ/Y8Be:xUGggZAk$(Bpq~K[`' );
define( 'SECURE_AUTH_SALT', 'qKo+as#8`OE~~d{w]k3$rYFs9mBU|I%}n{{r2^0noHT`d/hP].DGRW53]!Z4mb)A' );
define( 'LOGGED_IN_SALT',   'Y25 G94QZ!9rU%NB#wKeF&gi!(Jb2%qNN- Q[qv8p4L&x)sEq8]~{G9C?ZSe_!iB' );
define( 'NONCE_SALT',       '}<aCloK 8534-EpYi6[6kbX `+0T[8L^s<aF2|2Q!P1>KdotS(uv }n-d^rDC2yZ' );

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
