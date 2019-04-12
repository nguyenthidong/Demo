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
define( 'DB_NAME', 'dong' );

/** MySQL database username */
define( 'DB_USER', 'dong' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '192.168.190.167' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Q&G{|jh[.tCI!v+2#mV@SwZUqX/?&KmJ$pzVcKf IQHWJ{}.p,0HD^K,ikS`%iiW' );
define( 'SECURE_AUTH_KEY',  'NN?%+}aXG8P[HaSx+Q/G 9qZ}3&V.CY,-18{3iXTYSA9I[jl^B,f`<pBHP.*pX3A' );
define( 'LOGGED_IN_KEY',    'M~]S t%s|jAGKw#Y,mX me_7m/+&+U-77K`<ks5}S>G]@xpaW>0b5DsRj||o! R>' );
define( 'NONCE_KEY',        '(CkHWuSB<0B1XVNX}>[:6KB<h=!v;c/Tu%sXy^B^qK{NdZ[^s6lW_ZO1=xv9a(dQ' );
define( 'AUTH_SALT',        'vyJUKZsRwO@;{ *.w[OY89LTse5$TwlI{oZ8W! hl<~Gd<R+o<uPp=@RY=Xo&d]~' );
define( 'SECURE_AUTH_SALT', '@C``~MRB%,]H)]Sa I54o,+F&TwoEh>> =8`XGC.A;OW-`+lFsub~OvptoCL+ygA' );
define( 'LOGGED_IN_SALT',   '@YHNm)LE5rRS!M3}5g%8AuO]xN3>zHo1e5,3NMnYJ?.{F92DlckJRe8%-XWQK@XA' );
define( 'NONCE_SALT',       ':9!.5lS`1*H67@[fRbh$80hZ#a)aJU0?x3D7?;>YmQo 0Fk%aQUz*CuB]3I[Il+-' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
