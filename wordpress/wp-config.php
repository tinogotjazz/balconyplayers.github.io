<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'balconyp_wordpress');

/** MySQL database username */
define('DB_USER', 'balconyp_blog');

/** MySQL database password */
define('DB_PASSWORD', 'Havanagila1');

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
define('AUTH_KEY',         ']$v9,|Jf+0co:VV+mZh<c-l{m+3V^?{,<k0dC-`eJ-S@5+?LG1HsD^61t6|w3}?~');
define('SECURE_AUTH_KEY',  'sgir/*QB;:-]|2j$I->[:D|3+>Bi<8v!,Fp?~ktW-a8;~7B6 b3rMHALLR{zWhkn');
define('LOGGED_IN_KEY',    '7||-1xkGb&SUY#H,1I3S|xw@G|G.#&n~1JlO:lRmw7[|b3w*0g4r--`>i0yknAUz');
define('NONCE_KEY',        'AMI<=jYLzZH#+C{;=Je~/t=pfY6w9@Jh:;;qYdq-;8T-:J(z5heaT*[|t|ucjt%/');
define('AUTH_SALT',        '~ZKPG^|+c;_;cpksh(Qp5s_Z}4M[><+XH=_@@|wKLl^^}_L%|X*#lTf-l*-<{aZ[');
define('SECURE_AUTH_SALT', ':[p9b9>-e8#059#xKTwBMT0J!*N$Z]|Q`Sw|/($ExX,Z4-V$l-hGF?!G(8x6X?]>');
define('LOGGED_IN_SALT',   'Uxqx{xn}ETmWmXr}S2,Sd|K%`{ARPgL3a!-btrT{T9$K|PxLAKrq2V*:D@k[~&b_');
define('NONCE_SALT',       'U4<p8>+M^*d2P3T~^-hIow*_jd4,A=#|.1N2(|T#6I/,{9V]^>bF> }- DZ8eG|)');

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
