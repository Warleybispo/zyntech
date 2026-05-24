<?php
define( 'WP_CACHE', true );

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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u173280738_xZYGu' );

/** Database username */
define( 'DB_USER', 'u173280738_4pJMO' );

/** Database password */
define( 'DB_PASSWORD', 'ioDytSPyl5' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'lpk@>%20,B?xSeLedecztCJ=QmcQ*u:{d%Vrkg(Ji=}P10AWg]?c]S?%wILApPK8' );
define( 'SECURE_AUTH_KEY',   'i7=gH~X0Be5qKM4qK_Ly`M|,CF3@)Q&Mp[/ Yd{_FR(I-,&d#969!W8faEF[)8}B' );
define( 'LOGGED_IN_KEY',     'ynJSgttGGh+O0b4|Q0xaF(p]rXl&uMN0+.9&TA=orkJK-ge1b!T8=`uSYVq~g)S(' );
define( 'NONCE_KEY',         '2(tozW&;siK.)pH1i`04Ll p=g6ET>tmX0nJo*%V<0mG;wyzamlXD_`KO5X{^QR@' );
define( 'AUTH_SALT',         ']m`P`a:zZigGlH[|Fq=xDPx<H4D;Qf,O5vZ{=O}Y[k.ZK.dA4u7Vp6I?.n*]-A0^' );
define( 'SECURE_AUTH_SALT',  'SW,s(9%nIK|)O1)u[|qoD5:r@E%5f]5~j854X<7cHD|m~   Z=Iq]%#e|sNF_FJv' );
define( 'LOGGED_IN_SALT',    'Q[l*)}jsac^{4k!wKl2QS~~I6CpV_>rv9[66Yjn2Lp15P&LpZPXKPE~t`d#^DtsM' );
define( 'NONCE_SALT',        '<Dc*}vUNqPYr_bX~Ke(i=;w[m_gL:c}unYySIb}e*T%t},p0`1hC}M]<3% cr/IX' );
define( 'WP_CACHE_KEY_SALT', '^/$/EnqDx1)Pa.HXr|QBEqz)Qp~SLXR#Ozq2$ 2C^KpdiE{lX?q|eQVBZA,ZkoGZ' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '9e87ebc2d1fa1e68ad822b7b365edc32' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
