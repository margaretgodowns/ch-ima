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
define('DB_NAME', 'wp_ima');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Kr#SJUBDoVCMyjDFiHy1kFN2Gud`j1(fw)G$4nG-Lj*V98<_kK7CVqQn1 An^E7D');
define('SECURE_AUTH_KEY',  'Bm3TP_#+vyxiEcjV`C?N3&4^qf{|OQ[SUmjh[ozs2RyOkK]>snyY68gJvZ1b`k2K');
define('LOGGED_IN_KEY',    '4]]dgdMjsSAh6Cc>}|{ J0PBXhTv;/~un@WT]4jU[^d|f(}L:eD]F.Xc&s//`M{A');
define('NONCE_KEY',        'Sf7rFtySJ]D*YE,<rYnr9OhmK_gZZ2frdy;ZGi4t4Nl/hwYXU{|YfG/c=F),WKS.');
define('AUTH_SALT',        '(r0~T5tnu`3 mAid{<h+@7wG#:$sK8ybL$d?F;>3!_c;Qq_Sm6+aQMg)xfvs2VD=');
define('SECURE_AUTH_SALT', '4PB_u[8]e9/^h)@wM;iMEa_(b6sGQ~0Y16M43Je_AbgT6 ggdmO%h8X/h%ny1Xtc');
define('LOGGED_IN_SALT',   '`>:0&WlvBOj qrhe8wyRJ5}]:-OIKM^a`((N035zGoTXaVi3zHA|79`$vJ&%VWe~');
define('NONCE_SALT',       'Mi0~e<c2U4%Om<+vDrpeC?rSNSHXduc6NobP&bcZdW]6SZ9^t@{UJ!4`X0f!J|Qi');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
