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
define( 'DB_NAME', 'dark-2019' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'c4abc4f91b98939ac8d8075313' );

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
define( 'AUTH_KEY',         'Mb3A;c19k]B9CZU7sX?K:o 2?:6f-+Zr_V=c=hqvNFB 1D6/,21&+f-/SBn2F/%3' );
define( 'SECURE_AUTH_KEY',  '<qRFN~rc3>XD`i`gC;({4+kWs,!sM{{~tn;PD- _IgNHs#ND.9(GySi/ES0JEgr^' );
define( 'LOGGED_IN_KEY',    '-o:k/aV~NuNqG8;%J ald7A&l-yL`,g)iKy?0T5lYU+%C`kh*UBaAs=Q6,P`H54k' );
define( 'NONCE_KEY',        ']eRq#/S)FwWh`fqs*y+mrY 3nYUV2UhF&]NW}d?d#6NAgY4:hd0lCGyUde4x*`A:' );
define( 'AUTH_SALT',        '_G2H6m,2[!OC3q4ma+JX`I-9fVGAIc-s]~s^.GsoReLD&V#q+!l)Vyx0F+9XzvjL' );
define( 'SECURE_AUTH_SALT', 'qSKZ`:az18BhdsJ7*EC};X]{uVNSEX%oR!bM!hPM(KZA[l{y_u~IP&Gh,UpCqCc@' );
define( 'LOGGED_IN_SALT',   '3D5eNh}$W{ITRZfDbWAs6g3@]Oj#jvbLwGZ*(uxj|m2Vt9dmt8N6E#;mt:f bL q' );
define( 'NONCE_SALT',       'R2l-d),dI1 [{%ajSWqa0mb./qLXLbo= LNVn.HSdJ-AnKL6a*uq_.1P5X@*>yZe' );

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
