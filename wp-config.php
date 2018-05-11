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
define('DB_NAME', 'leaning-eagle');

/** MySQL database username */
define('DB_USER', 'andrew.string');

/** MySQL database password */
define('DB_PASSWORD', 'buckeye');

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
define('AUTH_KEY',         ',u2#- K7$:%U.oB7f|PYbsJM[*(W)D>,e3X@?uMnLGDg1a63b9~}]3-&0#n{z+7L');
define('SECURE_AUTH_KEY',  'u3lex9YyJzfmkT#,9]6fphG3n=+9e!5)u;S+b 5Cy{^D+yF #ANL|nKYDXrzrA7.');
define('LOGGED_IN_KEY',    'bi~~3h7~#P=ScQnRcUPsiH)rqd|*dn3n0n!eB<[A-z0RCx~Ll#* ai?;U:P.wq[Q');
define('NONCE_KEY',        'tw-dzAG+Y/D<M]tB,WfGjM6rJ3Mz3d]j0?KCvUT7=)0M/~Ex+gM:87TT3Y<6!7:?');
define('AUTH_SALT',        'RV1<.p& (I-q`H?6W!Mt1fKNiWCY7_!qINNqi*;Z^8-</^9]c0X||k+{s0lO~DD#');
define('SECURE_AUTH_SALT', '&hJ^DgWj D?NR2t(`UBV~Nh68wvr35`_ON,55Be3lx1KO[u1r19RlBd~G7|Ai/[M');
define('LOGGED_IN_SALT',   'f|6H0h@vtLGIQuv^CMn)7EUtlv$t00?EWXLP~)PX/4IT!6cV_H^@;EbBBWWBeKcN');
define('NONCE_SALT',       'cB4P1_>,YlvdYR-%)@)4tF!<,z[}?s[Z[q!U.(SV[Q89$)2E]=xUsFDYq$yCra*h');

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
