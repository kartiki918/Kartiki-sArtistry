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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
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
define( 'AUTH_KEY',         '7EvaN3{|3gqr$iSzw]JyoI|QqJIMTgf/ju*.@XgJ9$?|oey7Y-h6zf0PY`n3~(BE' );
define( 'SECURE_AUTH_KEY',  'CROiLd>,~oi[,IBV<!l*+B(k@d~k]P35hUz.4}t0Xlp}fD4X]H,;C/r#.HxQ]W/X' );
define( 'LOGGED_IN_KEY',    'q9r;H{wNAzhx!l(_XQ5o!3iE{=^!vn=+aqnXjnlnM2@Vo;<5(vW+?|aON-*wxd3P' );
define( 'NONCE_KEY',        'nTTF+>#08A0Dn:O;L_mX4==hNIkeyGBZ!AmVcjs|mwqq8|gIj +m]wUMQX#t=+?.' );
define( 'AUTH_SALT',        '<{Q|J;U#-IC:C/2(4Y{jq3`94f-rgy>&n9;Bm`=<SrCftr?aD&+N3`P[E++wAC6[' );
define( 'SECURE_AUTH_SALT', 'Ml+}3^EOl`v~v|w/F nHM4qjg8zH:Z<_Ft)(^35*JhjL34aP,oJVUe:>J)mArF9C' );
define( 'LOGGED_IN_SALT',   'F1h$Y:yBD{jcd{9GA$}F&JV#eCS,n9AZgh~#~O#33jvL3vjf2X/{$s=yWW08!YZG' );
define( 'NONCE_SALT',       '^Q1-nPaj2{q1pL~q^c?>8glsj!pt2Jk7VBcG>_4z/m]a_2g{UI`k}V#f1iJK;ZN>' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
