<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_site' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '{k8-A)p$ZUAyFa1YgH[]5-56QAEmUeRMaPrHZx]SP4C/|H,w^sFu:&_164C0K~s2' );
define( 'SECURE_AUTH_KEY',  '8iaCYR:z|fJ4<,x )8vA0&t6)6N T,LrpF$e 1n=/zqaqcBAI]P(f48gji-Y2$gH' );
define( 'LOGGED_IN_KEY',    ':r(JK=::pz]ayF T_UGi,:k`~tAlTnO/ D6)Xn}u9n!x#uC;r}jx3j7U7?]2iw7F' );
define( 'NONCE_KEY',        '.7;Fa+|^QLD%EAwv+moR#74DI4QhjYv0FJI+Mf+Z@(,9|yjlk~JXZC!jONM;gdjL' );
define( 'AUTH_SALT',        'Az@ug*3-` r-C)mrS_Kxj&(F6,XS`mdO5~!!=V051,8XPWULJsCFT}EiI4H3VYmd' );
define( 'SECURE_AUTH_SALT', 'XRwh5(5rDJYzx^L;(Gg_)/0^-NCBLhQ19rw_wv/**a &RE] jgc_6d1ec(|m},ih' );
define( 'LOGGED_IN_SALT',   '<3C(iX~f0k__b%DH(m]Lvvf(~0%&6;)iCmt=s217IZuc>;]L6RB<WmHuQ|1w!SH ' );
define( 'NONCE_SALT',       'r&sNdR[&6{u@Ui)(C;mqxe F.|r?YrRb@O{:oqsKn#.2jw:w3m=|2RC]B+->8Q(a' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_site';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );