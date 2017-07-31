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
define('DB_NAME', 'layout');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'XyzcuM87z{xKLWX^zjYdnDp,G#Te0y#nw_wB;5Q<dLMnk1@u@,Ht@r4Bz5/d]xr ');
define('SECURE_AUTH_KEY',  '9mE%6z~h3+hOY.+H[m-X(ZMs.f>Y0VAvN[*%Ks=IK 8E|Qj=_[aMI66%_pWE{x2M');
define('LOGGED_IN_KEY',    '%J4rJ/G+o&I~rIcc1f*1%ujn>Utx)yQjmL3kytH)%)V3~5)3Y)j|&AN*yjAk7nU4');
define('NONCE_KEY',        'M3]d^rWeVY#cH0hj,nyu]z-WwNFhKI$o(>f6Ce2uJd:jp9U& 1?] %fU^#9n8)Ul');
define('AUTH_SALT',        ',{8/wd,v{8O578|RW9Scz MqW&0W:5YXf~|b=$$0;z1,e5{O`6j:m7C,[qV1,a[]');
define('SECURE_AUTH_SALT', '.#qn[],gG0~cjeT(xs0?^?4-/)Ftk?U2s!sArAcJ[/Bz(O#h>V[}[=Ga4_j{wP)z');
define('LOGGED_IN_SALT',   'dK?}6hbcdqRiAkJStzRItnj9[X+kKklYo8oZt-OKS3y%kh;l+n2f+pO^Y/~+cI7E');
define('NONCE_SALT',       'BBjUylxP<QxgdGR4I_Zr8a>P]V5R)xwI3}-&BKc*,~q%7 4,S!/d:,zHqOsf6y=2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'jb_';

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
