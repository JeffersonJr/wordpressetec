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
define( 'DB_NAME', 'db_wpetec' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456789' );

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
define( 'AUTH_KEY',         'rWr&Aa.V_cNX7=xq4!toXemK4>qUOd&Dt^EV rYNYsn2ig41s5hf=f1 ma#GFDC+' );
define( 'SECURE_AUTH_KEY',  'e,dm(Q<9nNxOV;v&R][m}ayq.bKD$euEd[hlY%gX@jOK4DZ ()D;zvh:^$sRV5li' );
define( 'LOGGED_IN_KEY',    '.{0KGO:l>tq|&YC0Y1]JMo3F}6WT/+vDY&1/wZM4houZ5J8Ue:KF| YA@P11apo#' );
define( 'NONCE_KEY',        '.LXb>j0R,RR5q/pQb{qn~6yM%:O4<h|a?9YSEg%Ct#Fm6@!ncSwDm%&| i+0a>B}' );
define( 'AUTH_SALT',        'I]i!&){EY61i?3ancTE9(J+AKlSESF&3DUO0Xxah[II~1W}RG0yx.U#m>VDA=Ud<' );
define( 'SECURE_AUTH_SALT', 'e4Tsa8_i+Y$PL8ei+nsb)b!A|0,T1;8[t`k>$$Pwq?%?=|rz{IH;_N)R@7(r~3*_' );
define( 'LOGGED_IN_SALT',   'jv#Ojo{&!Z;wFMBjfK_ @|t1djGb1&Uzf7VRT>;~G:)kl.;$ %Cou(,&@FqzOfjx' );
define( 'NONCE_SALT',       '!,0r|*]Cesr,h;GbHF]#}+|wnkD(2/$J3bDG$S.uf[h~|)gnrx+0jWe=,>sr}-rb' );

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
