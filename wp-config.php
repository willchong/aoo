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
define( 'DB_NAME', 'aoo' );

/** MySQL database username */
define( 'DB_USER', 'aoo' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Y3643z266q=A01W' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         ']FM|3ZpX5BuYJ,N}-|tL$[?y@c:K@0Q87E-Bnh|L,5,{P:,y0|-#P-nv2so8oA&[' );
define( 'SECURE_AUTH_KEY',  'AQ@[39^(!0S `tC&IY)6#fhrbU+v)Dbt=5I|WBqF[`e!p^a|l|YrA.|H&^QLS/_6' );
define( 'LOGGED_IN_KEY',    '>w?t4]R|^hRVVj6pT:p)UKi})l`<;1}?%$v--D;au6.C@&ctI12dCon;n~P?boA_' );
define( 'NONCE_KEY',        'Kp$L]J7.oaaZ*e]/o7Usqg;3GBz)$WrfXl@{>Q? 0AEKk-S+zO:@/12?T[+{Wd`O' );
define( 'AUTH_SALT',        'k*r^X{Tuyk4_D6=,]nwE[TDKj)u_j4K53dyP #9T@c4<v$=s:q3-7MV%4P3^ItuJ' );
define( 'SECURE_AUTH_SALT', 'slJJUIH)qOe~&YLO.5LVX%V,V.tkD,U7{.sntqogO<Yk<S#4!uFi.J{gFX%v4{wM' );
define( 'LOGGED_IN_SALT',   '$&Iy9)Hnb,y1{CTBM%[q8yDVncZ?v^??Zhoe.}M}GXX0id-kB>?rV.E0cc[+.Q0R' );
define( 'NONCE_SALT',       ',C5Duktn:j+sVn,x+f#:nLFqfWbJ3Q[vSXXd|!8z}3l[o<N;c;Za<HL|zeV(.cax' );

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
