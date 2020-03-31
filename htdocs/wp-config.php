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
define( 'DB_NAME', 'chantelle' );

/** MySQL database username */
define( 'DB_USER', 'chantelle' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Ilovewebdesign1' );

/** MySQL hostname */
define( 'DB_HOST', '213.171.200.101' );

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
define( 'AUTH_KEY',         'lHPExkfvmGr,g5w&g{(:^p`)X}lXL{S{&@]zGo6/]1&JLE@K-JRJR:v3Md-CoA(8' );
define( 'SECURE_AUTH_KEY',  'n%mBhoSgv.Cqf`X#HrQ7_iCASC;{)P.>//WNvc4CHz=#;.1xD;Uyd=E_6~-*YK,g' );
define( 'LOGGED_IN_KEY',    '%&CSwhb$da;^3fv`YJj5p|OH3w~KV-#u}!V4Of1rD)QkAd[0t9W_[{}>#e;enh&~' );
define( 'NONCE_KEY',        'Wr@rb9iZOU52Sx7Ce`dEOwm7|2KRSK{a?,7T!&N%.eyCL]Mc0=dx;U(X$_sPwss0' );
define( 'AUTH_SALT',        'h])+F8-kByC={ci4(LPIOiW)E~4p3C!_g~qlyLXiq{LR21yHs9T[tK#g$fe<3!7]' );
define( 'SECURE_AUTH_SALT', '.MiUu48T*rr<|g8&4J#_7}[HU]F.}6J(>ZCi5ONW8DWcSpu.~#=wwlKNZiE(:%}Q' );
define( 'LOGGED_IN_SALT',   'SB8l=dzoyagVu`xg&zs[1=qR}:tt*8`Vw(fy/Un$+$18)SNpWYc37m18YH)VB^=g' );
define( 'NONCE_SALT',       '(F}_t}+fn`tD./A~Me!98dk$|L,V9wBs_d;}U?=|HE,}.[m/%(bmj!goqG!3ceN&' );

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
define( 'WP_DEBUG', true );

// Ensure this site can be run on any domain
define('WP_SITEURL', 'http'.(empty($_SERVER['HTTPS'])?'':'s').'://'.$_SERVER['HTTP_HOST'].'/');
define('WP_HOME', 'http'.(empty($_SERVER['HTTPS'])?'':'s').'://'.$_SERVER['HTTP_HOST'].'/');


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
