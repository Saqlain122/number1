<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bruger_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '0``[dJE3k~=5oqFFbt_`|DVd~W5<|Fw%x~@m.%TOdJ#b#()3ClV$Y?E*|>2ktC_K' );
define( 'SECURE_AUTH_KEY',  '~Mz`+9>f)-^--<%h%pw/PWHfe_z&5K}nl4 jp]6Yxq]7i7fxu(fa?qX&u>BfE=;t' );
define( 'LOGGED_IN_KEY',    ',Y0L-#;AFC7O1a5(2!}(b_2C:bj*S~*uj:nhPy&6.1~hv{8@0t5|Fk^UmKka^vST' );
define( 'NONCE_KEY',        '&kUG}e0WXx),T/Rh./|*U<Tb-:7mxX}dqU3;W4fF;% rS`{B|K)P5c$6#b:{>HS+' );
define( 'AUTH_SALT',        'jgEcj.^Lxrc:SLqfHodCQED!8263gphOvV$DLb91_w)0d}Smu^[mJ]v(PR,(AkP}' );
define( 'SECURE_AUTH_SALT', 'M>*^{S@ewyy9 PBy MbqM4p4`Y|0NsPa8K7J6eHwE^A{-6[O*%HrU 6.{J^`sQ+q' );
define( 'LOGGED_IN_SALT',   'R5E_N6G>*s,e,H_q/YTS,)`c^ZTGR7:!8wM-4h9dtJuIXa<wr3;Q8.|u|b.9~]D$' );
define( 'NONCE_SALT',       '(<(FeRvjRm*|]mhm+V)^d;~POxoZeV7$dc^w$|J2L25w03blweFK^P0hx@ )(g4a' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
