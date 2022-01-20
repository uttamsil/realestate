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
define( 'DB_NAME', 'real estate' );

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
define( 'AUTH_KEY',         '*!z&p82,If1#BA`kTI1T6xT`(%E u)QU,nTHg9lhG:0G=9AM8d^Lo4GHB]}nR8:y' );
define( 'SECURE_AUTH_KEY',  'FAJ~y42MVf*RH~LxzxA08:h=6!j|2=pl|]0x=dl/xBHl)y2mF.5uE^)55F`n`K0H' );
define( 'LOGGED_IN_KEY',    '#YX!wg?EO)^0>B!>aUhDk$G#{:W7 g:?XtJ<`{J@^o|0[ogxm_@hK2C0f5+g1q>@' );
define( 'NONCE_KEY',        '`A@G*|7g(QVYA>q<YU,iOcT)>/0t+SYxu6)+t!&t6,&CCBj1DB4.n(0FVqU<<)o7' );
define( 'AUTH_SALT',        'rI ?uRQiv3nkB-0R8vDPkb%k<qk%$eFVF_2/9P8g)G?V,,/61.0uVOIm%R/_3$G_' );
define( 'SECURE_AUTH_SALT', 'v[y{Ys!{_u%!2p%zmEKJQcbg*kp7WxGDVn%&)BNVC+96mD7x*aha/?A$v.Al`oNj' );
define( 'LOGGED_IN_SALT',   '#%sE`~NzrK*5YfUKG-F0{Xcm3Gb,+Uue!7|!1,#l)RO$P0! |;/:KIOo9{+9dm93' );
define( 'NONCE_SALT',       '6pM6OPScY/H<+4<;`tlp>8,{dYZ__X0VgZi1j=Dy-S0Lo4<V;b^cwS.8:U/ JnQw' );

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
