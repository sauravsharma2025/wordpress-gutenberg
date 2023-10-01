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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '#f8]h]o{jl_I^|M2xyb<;vnXLl)@Q8 2n.OyLm-RF3mZpXY*}?g${&pEi][45]=8' );
define( 'SECURE_AUTH_KEY',  'z5IA26jZy1gKw+2<f>a)hy2i[uw]43.Id.[0uL/H hJ1HP@vIU{8XR7|PZ[GYoUH' );
define( 'LOGGED_IN_KEY',    '~rI@3jYLPh|O~?VSUTReL;^p6$)xnbV,6Hh_[gXavA n#IiIuHJCFWE{`z8Ek(%I' );
define( 'NONCE_KEY',        '2++ 54Cr9(6OT<j,?ij2  YzV3i]aKr)]2Ua9;*|L9Ro|D2uy]~*wEpOi!@E#L.8' );
define( 'AUTH_SALT',        '%N8Nj73/zMCZqoIDVFh#ctq3gPt5rb.x<g_[}PzYCOvmv$TIOr^%++^3M|y;tJR/' );
define( 'SECURE_AUTH_SALT', ';{AvesyY7[hNZYIWfa9`I,Q[%9|q# ,#NL0&<&{z1?72a.+Rk9[7_!9vN54C_LlE' );
define( 'LOGGED_IN_SALT',   'bY~-|,HZeeFF8sr2o^x`(Otwk+2u&hu,%JDtimYs!YHDS+-k=R~rN:WDxs]Mb^!k' );
define( 'NONCE_SALT',       'F8*#L/_o?a_vz Y)Gk#e,QnF2;$e-fg1xFz7:|k&;g3$n:&DW(wPVMJU>H=IV~5,' );

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
