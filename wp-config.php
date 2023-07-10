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
//** test commit */
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'client' );

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
define( 'AUTH_KEY',         'uj]9GzL2B)yf*s8~][j*:C1kg0F63p-at[3z@]Zdij-%( F8)XsAR6Tx/dnmJWM>' );
define( 'SECURE_AUTH_KEY',  'luGZmFrX8{ [>Z,r^o&ri(UX7+V& |YA[8Z(oP#pS,v!1Un(l8-N5@b{/gf~ !l=' );
define( 'LOGGED_IN_KEY',    'GD1+Tp!mRxQ:ReX#Nx1=0^zNre/*Iy3Qkf##d|`n>G}:yesP%O.Q3%XG$F+]78*y' );
define( 'NONCE_KEY',        ';#>(O=_Pj]Pf![9Y)>D%430{M):-.xELQ%1Dnr)D?PjnwsL)>>ti#gTtO.vQBc0u' );
define( 'AUTH_SALT',        'D6N/+c,#s$+Qn#adX50h) P%`Iy`}QNPt$KlTLZyF&(-FmLq=]}/ >V7_/bmk5d+' );
define( 'SECURE_AUTH_SALT', '2Ad1[FC#Ice!VNgL^yq/g.T=-(EzvPQ%(8gL2z<C(=j1Vd1O%WYuWFRoLD}7vN30' );
define( 'LOGGED_IN_SALT',   'S#S;54Zbaw=a|Kj6~j[! ,O^hpPYWi|G/OMiFq753Zorc+P<n[vKc+M8X8##VU#<' );
define( 'NONCE_SALT',       'kxHGt7kD%o(~y$j-d3>yEcHxahoC7.ffVQQ$Tv* !U4RS&zB/ExEGut]fEv*W0%$' );

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
