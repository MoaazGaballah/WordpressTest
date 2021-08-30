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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'X$sM7Lp[./JDY9^uaizq$bIdnLH<R>1pWF@JA!aPM%jOJZ#!I(oG}qPxoWV{6!~5' );
define( 'SECURE_AUTH_KEY',  'Z8`gx<-1:6u kh#=Nw**J#<CNySY!|ck?r`^tECMo/#?Ig74<)OoNbO0V J6<p-[' );
define( 'LOGGED_IN_KEY',    '{T*],#fTZ*r%W0fH@!dZekRHvl; qTZ)Ydu& teTN~A(K|}7L6tmSAjP>Pr?pGij' );
define( 'NONCE_KEY',        'QEs^_ N$KP<*Odg$0c2` vK}1X3jnE{G.8@1&{es+(hNm5>F*CEkv(an`Iwu#p=j' );
define( 'AUTH_SALT',        'mS:5pcp@(e4)k/,?7n]VS +&?ekswEI%v2/SOYeDlM7U<lQS]$hC,Z0,r(C=FEk1' );
define( 'SECURE_AUTH_SALT', '-@ 0~3wr)}=|JuurR6OJ(~B6`>pQldtO|%5hWXuuXw^>,HloXRTF@nOh8}ySAi9O' );
define( 'LOGGED_IN_SALT',   'z:1p%a8$UDRsgKF?,B+JbQ^3`=,t96G9$?.7H}jmPC^F*~gxq|Hp?1dRf5~#@%^S' );
define( 'NONCE_SALT',       '>g3dCYVDof LSE[jq ,OHv}|[EQ2&RLiMG(r{4A-cd7.X5TLXiXSQ0zU%=n1+,~S' );

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
