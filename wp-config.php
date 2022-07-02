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

define( 'WP_HOME', 'https://app-impuls.com' );

define( 'WP_SITEURL', 'https://app-impuls.com' );

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'app_impuls_world' );

/** Database username */
define( 'DB_USER', 'davknetappimpuls' );

/** Database password */
define( 'DB_PASSWORD', 'Lstd_@&%fdgt45632bcvfgilusteprosKresdtFrgdt456hgt' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'GI~*+7&SE6<iZ,MrJ1nMNC-$8=sC&+jQ2,lyz|`S+I#%p)k^2pe/@q8OFK1kTZD8');
define('SECURE_AUTH_KEY',  'P[M)0f=Uf+,:1Tq+5$M6+m<t+zU_]@AeYK++cdm5h!_1P+^Dq2;|s<Kn+Db&G1x|');
define('LOGGED_IN_KEY',    '!T16-O~#Kf6~=E*V&H}6u X{k ` u)B1789{z5@IlZJ51=fBeC9I^I(s7m?:d0SB');
define('NONCE_KEY',        'vD($@=-`|?4|RQ[i$z3=^)o>*U:svhDkwe&Fg5x<x)#a,BWUPJg#V42T!W4DTr^{');
define('AUTH_SALT',        ';s]ZVUj6hSD~aR3:Gz&kMw03[J0++|%:Pq5{QbSp-C%k##g~(NBq+?yxzQBYP38H');
define('SECURE_AUTH_SALT', '5,iZ(g-NO-r&uI+z2VT86<b*wK#=[~RR56bw=q4,0q,(!8!QC<YD5 AZp|9<-$S-');
define('LOGGED_IN_SALT',   '_qLu~a0X3t#-FxZ|=_GQHMO=nU_D[#9,Ql{^0()^7Y,vzx9&m-$4j;MOY4^%W0Um');
define('NONCE_SALT',       '@YH{oOtlnX+|E-|NCVWUI|G{c^fl/v{6CW}/Ld, yB4pdw-402XX<j@pCp2&4+eO');
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
