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
define('DB_NAME', 'spa');

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
define('AUTH_KEY',         'N&>yAbr.poOdV#!zCW9iD]_l;(><Bov_U$-Wunhb<~YsKIN05<X^r&FFQlYT4vMW');
define('SECURE_AUTH_KEY',  'J-8>g. ^D.E|<Pv5{<}j4,CM<qVOYfxQBZO!mPOKZvq&KM/7BBF|@f1aj6jE_WYF');
define('LOGGED_IN_KEY',    'CZdu-D+F8{XgP-x07Pq-,)}xn;a$y(hToD!njFUEPN9Av^[z:ew/R8c(zDh!Za`n');
define('NONCE_KEY',        'Gc_F!nobHO(sKVL0}9w_;Wr!ReS>9(3o/)5pVAK%z}1psaq}#.dhkL`]?-U2g-%z');
define('AUTH_SALT',        'w6BOGSh(C.|M`&oE9[>w^59`)~n$z+!2#0rPwoP|6(;Z%Cq,_w`KOoIjMB{Uz2lD');
define('SECURE_AUTH_SALT', 'mAvAOzk@;M_yjdK1*nWhFKsmfS.-^EGTysqb~DQ {{tN5bJCtsJ|7TqVcE*ee5%o');
define('LOGGED_IN_SALT',   '+`dS#Lt>H<0Iz#V2J}l<$TrQebQ*I.DDX-o}3R/vb|L;7uGeTB<!A?AXP1:+92B.');
define('NONCE_SALT',       'VZ%;5&5WLMtwQg|ccn+|~[,W;#P5^au+9*K)SU%Zvl}fl{&V)*9GBpmN02|N@TuJ');

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
