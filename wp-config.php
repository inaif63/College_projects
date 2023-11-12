<?php
# BEGIN WP Cache by 10Web
define( 'WP_CACHE', true );
define( 'TWO_PLUGIN_DIR_CACHE', 'C:\xampp\htdocs\naif\wp-content\plugins\tenweb-speed-optimizer/' );
# END WP Cache by 10Web
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
define( 'DB_NAME', 'naif' );

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
define( 'AUTH_KEY',         'j^dN(AGtHo:Oz7bpL=9DioV$/hcgiDVxnzWN*8>@(;Qt9#=5qe;Sn(1Z2w?ho)q?' );
define( 'SECURE_AUTH_KEY',  '@jt]G[]9fthxw&mu9` y]Qk^54}|n.7iabzES{y$W-g9{Z7k&*Y*yu,7`.b#91]*' );
define( 'LOGGED_IN_KEY',    '|B}nO?8,a<NnFS3SMOP?]D.{5|xaZ<W{,&Fjz`@:dfwim~fK8RwlJ191&5t^=Z7|' );
define( 'NONCE_KEY',        'H!&YBR}#>lPeT%nHw2XraCjJ8-wg=9]D(S[Jg2(tm,Cuw?k9tV%^9!jVW(^C}R.G' );
define( 'AUTH_SALT',        '*ZVlKHe-$O(c]6v.=#@@g]y-#90(D9! Sx4w}snX.L+}VH*sN>g;[la^pjy2Ol,,' );
define( 'SECURE_AUTH_SALT', '{)ZlywDk|-{{q@ADxurMG5l#>POcI0ai|gD5a2H[m}!(rcCm[*=tkB?]J&7U&Z?Q' );
define( 'LOGGED_IN_SALT',   '$0J/CtES2!943+$YM5t#iMf`]vmxakw5/La^%=49tO~I!+y0S$m Uqfsa`$u3D^y' );
define( 'NONCE_SALT',       '6vHl=cV|cIMZM0QErlWSDG|~RojSo[DOI]9wT|JL i[iKVlW|:SV=<)cGFWe9S@O' );

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
