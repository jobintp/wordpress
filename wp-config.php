<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '!3Ai|i aRO[uo@rr=qL*Aw|<[7Mj+S,RITS9uKKFN3Ch&#lAcjwj`&V+d;n^ud&;');
define('SECURE_AUTH_KEY',  '.q%;;yS87OzF.hm*Avbwhj0As1|3CkIx$+1Wu+M9+~y^IF@uJkQX0sLCg!}fxslz');
define('LOGGED_IN_KEY',    '6|u?NGMF=CXRJLj*>KL^m=[,wG{/^]9r?`o.tB6IMA|Ts]@x`ej<njJjTG`g|.1-');
define('NONCE_KEY',        '[HMlJgb_<|I(?$ufTkvXK<OQg?=2c=:S7dL:p1G)YQULNJ*Gvkh-0}r]v?#Qqkd,');
define('AUTH_SALT',        '-+[)L(VHPPn]`K=l8!trk(Q-1X:].P[H)+_4z-1FaYc3mb+ BB5g$BN?I<H!%2tx');
define('SECURE_AUTH_SALT', 'Yqg[GO*Xvq#]+wpB?!N8J2[1cxt`|Xz7cu&W|cBTv+U#,G,J?*Q],i&#OweYF-F<');
define('LOGGED_IN_SALT',   'o|a3-=vC*]GLB-B:kG+]u5]Lyo<:@gE@<`tbg&-AzE@^P6MjqY[7?b;8~jHO+}_z');
define('NONCE_SALT',       'n2Z0q!%7HL/pY[N7`YYPHj7I}OqU/z)e2A)$)4LTJ J0[9bbdb,xV2Mc=L<Mc(70');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
