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
define( 'DB_NAME', 'aramexo' );

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
define( 'AUTH_KEY',         '9JY#OjkL|r!$_[kq`<z!$<aA@H3CbR8[;IaU Ymqbg96aPh`Ek*lmQmx]YH4So/{' );
define( 'SECURE_AUTH_KEY',  '@(+#|-&z}^DX|&H]MFbgZK.EG<2/UDM0;jn9laQ}>Nx%i+chj9$*=}|n]$%7a=)Y' );
define( 'LOGGED_IN_KEY',    'e_[1m~y|l7S1Sf.h[FW?[46jpUuCY{hSV7S@6o&z+]M-yJZ#K%sXoDm/eCB2kF(}' );
define( 'NONCE_KEY',        'ALa`_z(zm`,e8U;M&n7Vj7L@s4M95mR&:@+YU6bA$;p[|BxUTRxJpo#i.1>BJcsT' );
define( 'AUTH_SALT',        '1<p21DNo:(kVu!_jlz<AIpk,||^^;7WYDn-(o(/Ue/*3Mc-,vE8Eq!xFf4wi-D81' );
define( 'SECURE_AUTH_SALT', '(Tr^gb4_}]7X)jizF;T?,0#mLif/N#vd9;~183!fA4#,Eo+hP&E@*lQ2e`.b:@sE' );
define( 'LOGGED_IN_SALT',   'FIu?V)A!D emZ5jX J#)VIL%]c+c/_jfyv@i_wUuSM;])y!xwgqTT@[$Y)O+LJ@j' );
define( 'NONCE_SALT',       '[y;2N_z^v_tX{94=^:;_+zLPgU]KwLdbMoTJ0T0I&v*;)x1m(2RZ+%$AR>|@rQmw' );

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
