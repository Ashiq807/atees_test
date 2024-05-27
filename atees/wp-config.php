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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'atees' );

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
define( 'AUTH_KEY',         'i6L%^v#Ta.TY6kW83[rqBMtyu-PtP4S0R@#i{_/%!i+#X*:_Uj:y?x2uXX0i6M<,' );
define( 'SECURE_AUTH_KEY',  'l;z)?+,bIe,V*^lAWUzU?U?>Bf!s^nED5Nv8l=-wAn4`^)G =r&W9=bu/V1#jAhJ' );
define( 'LOGGED_IN_KEY',    '|OpQ*t0e|,JG.BlTToK7fKOg{s]#YA=j4@:q p^Ur6{UjK%iANHf3D~D%JI;X@/d' );
define( 'NONCE_KEY',        '^EE@pda7&x.YnXnzO;W/`X;oc_FZe>Is/c_qwLPv})gk!EhL=TTU,OWvF4gr*j*j' );
define( 'AUTH_SALT',        ';f4/[75?al7gWOgb*@fhxHOXPCOr{q{@Z7%=X99yQ?~sV:d6=yM[>s9(TKyH/C_A' );
define( 'SECURE_AUTH_SALT', 'rNr5S*bz7G?eG|W;qRy$=Ofv_H=1rA0<{>s)3IKrW[W7*-w4ZKyDUg:&{NZ6^J52' );
define( 'LOGGED_IN_SALT',   '3178Hr_fItgv`7G90[<Gd}rr>YSgtyX/5)H~;2;L{!9vE!LCbzyna B)LCCNp/op' );
define( 'NONCE_SALT',       '`jA[0 7:#B>}J4vk),@_5q5TSzPf~b3)Jar]T(!b$kn]MUCSGHwuoGH$}!`Z}=Ly' );

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
