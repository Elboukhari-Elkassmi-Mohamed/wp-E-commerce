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
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         '|i{fL$b_OjhZiD^?O;so<FhYr_N1|Q_;A^kzn;vIy;s#O{Ct>}c/KWiw(?c]?nG+' );
define( 'SECURE_AUTH_KEY',  '-J=cg^9 gMW.f[i4fFefr MRI:gC7u-E7G:Qx51 Y<m.HgZ9IC]8{A$/kg0`$@;0' );
define( 'LOGGED_IN_KEY',    'X_v.O$F~1cV9 d]7*8zFMv$V#2<Y:bf:Sh~9lXJsb^ZP}}<tvRmL0fe%7PE7N@q*' );
define( 'NONCE_KEY',        'cyq}* QU5(*W=q~>a.^|),2?Eel= y5!w yjZwxE_57H@H6<p[/o9(&wuFRtF^ri' );
define( 'AUTH_SALT',        '(O%.gvjj~F(djP]9o@nA.1&AwafiqeENT^H%S.TM6f>1w_;yej_jC-4S6#NwCL3(' );
define( 'SECURE_AUTH_SALT', ':C&nijcK7WiqE[Xy@R^zXD<?<&BoL*D`L:C;fR5zDWHg|sQpM[vGU5Q#a&qbcbKp' );
define( 'LOGGED_IN_SALT',   '~LTNz/7.${<=<T_+%02_ND=?Jj_{kIG}cLbBHhz}/mMuQ>tq#fj,oqZ(k<|rFF.k' );
define( 'NONCE_SALT',       ')yUPgG<O)*w_CY%Bv]x5*@Cx9,_ {sF{K=3hS!TH?lBO=T-1qQm<motkL`V/uV4x' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_play';

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
