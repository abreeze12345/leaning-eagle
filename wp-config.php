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
define('AUTH_KEY',         '+Rp6>?X#+}>^!dg_^@)44Twz(how#e2B1Z6=&:8IH7zxr1Tmqc#2*SAZvOziK9l`');
define('SECURE_AUTH_KEY',  '>Zj3}W8Ch?B5gPA wv*{>|p^%e- N)%^o5Er$|p#cHcoGl=DU7@c<y:l?SbtRnre');
define('LOGGED_IN_KEY',    'rhldP8`&6.ppjg|ccFV^O*rVXd/b3U5Uh`myjGT;r5@4unXt:aHPG6Z<<giQN}`k');
define('NONCE_KEY',        ']n#jp~o<h,uHh7bI?9LlGZ>6K;y8#JkVg$cSlSG*7|)l^.G>*ioV7251:]QA~+4q');
define('AUTH_SALT',        ':[ty{Zc4yJkzI&(>A ]|QX%GsXSjY/10+J_9~t,[!Nz_d{zx*>/Ei&(n_-@6bdi:');
define('SECURE_AUTH_SALT', '/#d#[Z397pCk@;D#_~pH=mOu9EDrN)o/,EV&(_1^SYz]krEaF0^FGIJZTUuD>cGD');
define('LOGGED_IN_SALT',   'j$m1p)q|S<jN*9/9+Wu>|dplzuH^T2wod;lI)4<iW*$%(5} EOZB|Ecj4V6XSqWa');
define('NONCE_SALT',       '#E[tBECz{Js* Kqk#L{dT?`Cz+.p{seu+vJ[)pxRN,6V@p6{8n%#Ok%$A,a{PGIQ');

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
