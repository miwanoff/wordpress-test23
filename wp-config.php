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
define( 'DB_NAME', 'wordpress-test23' );

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
define( 'AUTH_KEY',         '<=OW!2QZ~b:aKs]qtgcUNmgFN;[r-f,afVg.:(fRV4FP{,1u&.UlQN<5$JU|)2Ry' );
define( 'SECURE_AUTH_KEY',  '|C~G|brv<4%1jK;p7k)%m&==34-CES/KW q4B}{BwNb]Yp#@_hR@}3P,J=Qe8sZ~' );
define( 'LOGGED_IN_KEY',    'fSrVNQy638,RhJPEt|~*zDs77EoHX;Ols1Q:Fb}?a4b[+?)^(BhQnH1=%M-8xuz0' );
define( 'NONCE_KEY',        'kd5l1x&b,-N;MdQk8k)K&(XAYu%+Q|Vl!cS+tvdZaH}6|p8?/%6O#[nvwWvc[aq@' );
define( 'AUTH_SALT',        'n-ur0LN55?^AA#nt>(&NEN43Nhfl]u$>dSCayAqb@4IP:8~s>{MIm8_Ofs_NZE<0' );
define( 'SECURE_AUTH_SALT', 'Zpqm%65|7-P~hm/D`%SfSDf4Jte!i*mPg $As^19;UT)$*9LT3{?xlFcMAs@i0?>' );
define( 'LOGGED_IN_SALT',   '4d`N-X>*#U=H|IJqFd.RzJV*V2**F.4N1[d,dI3.9WU)OJ9~Aj4QrJ(|=(@W2!K$' );
define( 'NONCE_SALT',       'D#D(]:`>B0H)^)KyNMi`d|B=[x-.KEa<MfA>brO,2~rR8GM-]nUQB.z)?wUkbn@5' );

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
