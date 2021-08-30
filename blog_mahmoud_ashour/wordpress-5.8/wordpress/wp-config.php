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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'blog_mahmoud_ashour' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '<PbbK-D<%Q/9N}KRX-Wz#;Fvti <P:yW@&S#9z3-0LTP80fVN`fD%2;P<}YKW.Kv' );
define( 'SECURE_AUTH_KEY',  'AGkZA|Ue&ddJtw7ikj:C0y=5-qd}(*+?Y</!;|UuSZ/nl^M6r]rH)4x/(~%,TDo3' );
define( 'LOGGED_IN_KEY',    'PPIL,H]U#7SQ5Xskvr?Qg)~vRD[h: )@O.xt8;E2F,%Sj$+?</R4*Y,YI9!`)#RT' );
define( 'NONCE_KEY',        ']vJVIaf/H RL?Q &7C>eZw!MCU.ya`-?-ZvqZQCqmqMJE#TB$BU?wvHH9]RrPR%^' );
define( 'AUTH_SALT',        '1C,##2aTB|d%a.U$eo99}{%54}&/|toE<zC5aZ*_^/@X67xEn*l;NLcAU_l8{ajT' );
define( 'SECURE_AUTH_SALT', 'Y&m#>;X+7z|)t2Ng(I,Il+ah~J_/PbPrM5futASie%&6HM^u_mFW[Fu<oO 4fw#@' );
define( 'LOGGED_IN_SALT',   'vBeL?j/|ryB:<IE,W7<)S.K^~B<1e^q%~JNaDFGAmF[~g>{*876tMBon},a(sD}(' );
define( 'NONCE_SALT',       '5nL=,E8A3Fj_WCPp:zAWG}*-E#!4vAgD;F4#JGj>~,`sK<%<#9iCv=#HhMl(0&Xj' );

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
