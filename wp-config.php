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
define( 'DB_NAME', 'tugas' );

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
define( 'AUTH_KEY',         'w?q!to`ZE+hRyolAHXrx~GOS7np2hBBZ*g=3wbxrxI10iqngivD~}S%0E-a>}0V,' );
define( 'SECURE_AUTH_KEY',  '[yWsRo>DB.Fz]gVr0sl[L_67nGK-1}X.lBC5TE7bt3cP**p#v*+WD~h.W5V?}FTl' );
define( 'LOGGED_IN_KEY',    'Xkc7DfZaT/U@ZU@c)Vo9**;7%-I>T>p3&<Z.5XB[/Af#>`vWac4.JVhZD7-czJH|' );
define( 'NONCE_KEY',        'd@/4bs&)o%mOkC6s`1,W294h&2}0I@&o9CxHh#>T7y:%#VKv~hpM.@h=9$[r3>fY' );
define( 'AUTH_SALT',        '&.trSpV4k4L=! ]s>.yfYuf44BrI=~jw,y TFQ1/6Jc<.(D}r:XZdZ2?`L[EQ:08' );
define( 'SECURE_AUTH_SALT', 'c<$lqH0u19on;f^yzcX#k_Qml970hz,r~;m: (q2P<YYBI%=a338vNBu$h}@^T}2' );
define( 'LOGGED_IN_SALT',   '`J9vwp.CO:m0vYm;x2?ZS1Dj-V!{{5VL%sc;mYbg}UTJU(+!?/bU`l#hmS0]&-Q+' );
define( 'NONCE_SALT',       'N~/=n9Ch7ZHk[ZC^ O2E(.&:#M`Yd42dUOmi5:qB52RbwYDicpu*$en*U)@?K)bN' );

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
