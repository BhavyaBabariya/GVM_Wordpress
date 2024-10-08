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
define( 'DB_NAME', 'wordpress_pr' );

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
define( 'AUTH_KEY',         '-7onVnqNbU+NX4vQ`Y8 UAg~uN`to[.<>:{79ZLKY#&}*[w^nLKQcBtjg((<JAGu' );
define( 'SECURE_AUTH_KEY',  '$Kr-Y :).QFS=})}|Hu1gyd`nJcZzN}%S4ZgI`NmBWT<2$Y4WG(Q-9XoNM+YA}3D' );
define( 'LOGGED_IN_KEY',    'MfYfaUB1.vFIh9 @j~rk/(b.ORt,>$B 1oYE2M&IiUQqjn#xg(zD4k,~F[4Td<&?' );
define( 'NONCE_KEY',        ';$G}yPlr3~_y~rZa}Bbhjl&[KO[,9#_CW&K#,xrv<MGv.IV7DR/-LW8d]h-!hoSy' );
define( 'AUTH_SALT',        '6y_L}^FXAi@@^N&#Y6GQW};.#] 6@POVr[s36^:6])^)TxFH1F;d@J+?dj}~$!U@' );
define( 'SECURE_AUTH_SALT', '+g+q-3Db4{&`V[8 lGuEy6@w*<m%0au+rc.w+etD(j%U0WCMbtAC?yJbE;D,G7%]' );
define( 'LOGGED_IN_SALT',   'O5R1@Ik(cv<E9Q*Er$NN#uX3{-<*AL9(R?)i|]IcH>wis*G;b[:AExaplE%J)]55' );
define( 'NONCE_SALT',       '<+b-br~$.G0q>$}ouILUqHQZVjHjbn_jgq|Ct21+2]H(6/ALWhy r}C0!vHUzFB{' );

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
