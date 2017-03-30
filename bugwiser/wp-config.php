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
define('DB_NAME', 'bugwiser');

/** MySQL database username */
define('DB_USER', 'bugwiser');

/** MySQL database password */
define('DB_PASSWORD', 'bugwiser');

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
define('AUTH_KEY',         '4DNse9a$Iu/bl]`:hgit|EFMz5@5I0W*[w`Y_g,&0hd.$7d?Byh(~Q2=({X;9QGw');
define('SECURE_AUTH_KEY',  '-!M(SJ$8mq[:AF<[^hC,WQwRhwf|l,*c6#)+C,+Zo6P&RCfyaF=._X80T]0z{j_n');
define('LOGGED_IN_KEY',    'A1aJiAI`M]5)wAV7*M.eQ0Mm5W5r.)Tr?Dx4~N<b$fUka-@{3,J5F{x<O/F:C:NG');
define('NONCE_KEY',        '!ovLpx+sBq $zh^o-wzeZO`,$ACPM~nI+c&e=Xvb:91yk&x{<zY%yg h0$heZLPU');
define('AUTH_SALT',        '9Tb^v8<OO$+Fp3.hV#S@}1*xqP>j&R+aMx#.[E{LO)S&14iesOkK[fFSRqJalKJ)');
define('SECURE_AUTH_SALT', 'd{UwRQpYo; p#fOdxkzb.[Ad$gS7 ENt#66%.K11A=KG?TVK4f?Yw_G$oprWaWu~');
define('LOGGED_IN_SALT',   'k_C.$(e9 E.Qz0{b/=,g8#ZJKR!~745 fZqUHxW6+]XImvi0I+~s{^}e7967tIpW');
define('NONCE_SALT',       'zhtj.i8hI@lr&,qs^^0xZ{@yv7{@L#N]h!<{[_|uJb>19!v41F8ui^ueT0+kh#XS');

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
