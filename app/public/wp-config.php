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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'G|I>J*;JJp*=aZ9+a$=vwePhj>_C>UrHl}M-AmIf3{N5`iuy.6{9?qA+Q91ygP|h' );
define( 'SECURE_AUTH_KEY',   'n-(u9J~Bj}IP+SzE#s#RA)w{VW9$aD7F AWM0^%P>Q(;#^g/7`<U*qzk@,8]LhNM' );
define( 'LOGGED_IN_KEY',     'tcM{ =lgjm-|;?cE[-cgT. Plr_x1v]BJjgvpf<rx5C eG%T|v3#-Z;&^cQ~_kf1' );
define( 'NONCE_KEY',         'JxS^>dZa8*Q#V{3%AVu>,|3,h.`A_QINO88LG7)Cm%q:OW9GWiDs1x@~X]GnE^R?' );
define( 'AUTH_SALT',         '+kOBcX; v~(}9qt+wB{p/wWXr9xi}O Z(2cW=S)`?S*pWn(F2.rW>07=t_Ml+H%S' );
define( 'SECURE_AUTH_SALT',  'kBeiDa=g}NICL}X{SPb9D5o.ju`P]3X~cBCS~;y&#b@p!9v0e%D5JcCWBAGcPQN>' );
define( 'LOGGED_IN_SALT',    '}T:D-rO]Rp+cpe*g%g8~V0q[$Y[b=2kSn!RB4*]@gS|x dLCV~667}P*lAC}Hzp<' );
define( 'NONCE_SALT',        'u`lIl@E|O,G{`E5z%e2_}?uB%h/Gx+;7/X_^]U1%@OC3lnGja8w!VN=3Zj#Um*hU' );
define( 'WP_CACHE_KEY_SALT', 'ZiI7/#JaXB^dm!pXaVS4L:%tgDGa2>uEe5q{Fe3Fs/XorQBQiC0Ly8J ?<7*7tqF' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
