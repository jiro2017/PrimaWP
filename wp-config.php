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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'PrimaWP' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'mysql' );

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
define( 'AUTH_KEY',         'yPg=KM0w6d6BT0Z1|+rak.VD$Oq^*Hq`^0/f>7)g7RL8|ok$vYh,qX)M`r?L`c(d' );
define( 'SECURE_AUTH_KEY',  'm?ju&N !>M;b;&S0v|wwZVWw03%f)?]poby*0dr;^Fz4R.LDbNEO7!VFj+HMzJP;' );
define( 'LOGGED_IN_KEY',    'WeL1D?[V_].+!Zw4,oUT.$ov)CGC4n]lm6kKcb3[Ovf6.L0flTE1o-(SN1lsb)lq' );
define( 'NONCE_KEY',        '^|2Za&d|sYSkB69@H;]dPo*GEjfYfW;zRiB/!p{x^rp%Tdip$ko}9Q?o)h,`$2Q2' );
define( 'AUTH_SALT',        'v{qr=]saw@Y+h.5S~vx,*++H3~>7iE!KgKQ.<w%wR9d _Hs2.hX(v*OlhOFvkJ.1' );
define( 'SECURE_AUTH_SALT', '? gf{*:/+aTC00(<pUQ2=7t$0]JQ)6gdoLQ/=nX!g9YQ5=j6&c%FJl_9_rYZQw}x' );
define( 'LOGGED_IN_SALT',   ',~iqc?aY!yY0d#-xrBgFH|)Qthi#kk;fGVE;x9$J+aV[54+<TErI->hzOb35g)ub' );
define( 'NONCE_SALT',       '85}k; u.0Z)W8NkC:xg^7^,RG9mht9L?RnjjnLEHzXSR$ZR.tvwQa+&;z;#qO9*t' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
