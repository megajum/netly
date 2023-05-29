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
define( 'DB_NAME', 'new_take' );

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
define( 'AUTH_KEY',         'o-OzgVb$C>*Foi(n}{TV;ycEh@uQ%Qfn.TWd[D->jrq*^T_S)(%Er.NP&pV4A!lX' );
define( 'SECURE_AUTH_KEY',  'uWKo;V$exb(K6Q.`Uut/x>=lt=PN>:*B6?50n.5y+v_Pl^;8$X2(pnxwX#N!,fN`' );
define( 'LOGGED_IN_KEY',    '5k+E^_)=KH0 m!7_|KM]TfB{fzS$ PpGv`AVxQwCb`9.9@&Ceu<}?$,7lrp-d.8{' );
define( 'NONCE_KEY',        '#CDN+|pt{Zgnli|&p]^4`-4~TG41qv1I6w~$jG{iBElEKpqgyLSATmF_vF8Xlqo%' );
define( 'AUTH_SALT',        ';{O5qL5O#%9=H-WMd1WSHlLvbB9Z qQQa`;OW%4RKzF9yyIp=O_EOOle2C&!,m}[' );
define( 'SECURE_AUTH_SALT', 'JXOjFeA|5:K,Z8TZW|XakA,ZC<g6d8RV!iQUou?Mt4T0_}Aa1G%2R~8c|=i<W$=Q' );
define( 'LOGGED_IN_SALT',   'y$HQ?bKRu:UW.RBaA9A+3[IDYo8$]-<p)/@W<(ps^~(K1|c17~eiit7#>^`t7Pp,' );
define( 'NONCE_SALT',       'XuYp_;5H,Ssou> R$hmf]UI0`sJ8<%eD9iNv%XThcXU+9l_[J<nK$`-v1WHT&c]|' );

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
