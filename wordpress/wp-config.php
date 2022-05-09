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

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'emy' );

/** Database password */
define( 'DB_PASSWORD', 'emypassword' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',         'v{L.m&}v3YS%NdS[@w^?rmGMJHb0G3 Yp~LWaZ6tAV;B%{b?_Q>h-0GN[DB);P#+' );
define( 'SECURE_AUTH_KEY',  'V{cqEcvS9%9sYVZx;f`*YEKM|1Y+aWWT`^B6_@-gR;9J?0pOq:RQgn^Tx2z}B(v9' );
define( 'LOGGED_IN_KEY',    '4;=Yp0hOZIL4}Y]G.;O48ise#o]&3G9y19~P P6t77yAmg<d3[!z#=>]TJT-{NKs' );
define( 'NONCE_KEY',        '/& lDu)u-Q2z0>.?Xq?^iq>F7juka;eYGA/Fx1e?VdRW_> !fzt}wt*d)UpVmP~B' );
define( 'AUTH_SALT',        '}(#Wuz([m*gH]IPr6uPVL+dJ1XBmw5&@7^M!@7Crp|Rz(l=!iHKHI-kMV2w*D!5y' );
define( 'SECURE_AUTH_SALT', 'q`av)bg?zL(B* oE#=7Z;^}pqv-wU>-Tih$4nps3=727dzO85^AP4g)kI;#Z-82h' );
define( 'LOGGED_IN_SALT',   '][vc3)8z3`GtwzD0Em=F_fcD1OQ<Ut6EO.ysX4W84l^we_%VnCibg%|jM#GxM2,a' );
define( 'NONCE_SALT',       'a,}W]fA1-A6#YSPNz=qK$HB>0e+)AjW0OS*2-L]Nrr;kBJ%;OJLF(hd8{<6 1)hf' );

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
