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
define('AUTH_KEY',         '^.(>O(M*bjh>s0S}&pG=Qh(e/oLd(>H!SMGGkKigrp3GSu61biD>~p)^|5RyPYE)');
define('SECURE_AUTH_KEY',  '2E$:$bNrP],gB@}A6{V>W%_huh-RE.~};ke;REb.L}6Q#7..Cg*$02tM~.61cPGn');
define('LOGGED_IN_KEY',    'E,e^jdI)k(v.d]4RkDfp3l&lJ&az:=GirUF1$bUlNN]Ix*k_:+a#v8%f3R.~u$PR');
define('NONCE_KEY',        'WI{[H~t{+!Qr_,r?T/{[{_ nU _!JU4J:=fy;JwVvix`f!Ob%saW^SICkuUI=vU2');
define('AUTH_SALT',        '.`^a]_JjW8/RAXKv*t<.Wh&.4KRW?~|v?g&_ImPA?kNOHPe|4hB@mlhWf6r[tTa0');
define('SECURE_AUTH_SALT', 'TlCNP1}w2JBWjV (R!wH#/L|nt~YM@bm,-_0.*hK-:(T,r^R2wRX7p3=5v0&^1c@');
define('LOGGED_IN_SALT',   '#_U+Jx}d<CY-}@XJp;Cwn naXc+_EQoF)H:fYK>K kwn[:X9).5,AzDM0H#L7G8*');
define('NONCE_SALT',       'q-*hsk jDi2;JP$KUVB(`E~ctB^p$m^^D>GA8w=jC084$|W{C5ATNC?,/y#Zzo[:');

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
