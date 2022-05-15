<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_rixelcore_db' );

/** Database username */
define( 'DB_USER', 'wp_rixelcore_user' );

/** Database password */
define( 'DB_PASSWORD', 'wp_rixelcore_pw' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define('AUTH_KEY',         '75-§%,`LJurupde|QI[5C@H, ALsY.~_-ql{Um@ <ED[$(L3u|gni/`jA3q.(g&B');
define('SECURE_AUTH_KEY',  '|Msnpl1}J`-+fW}2ERoevvf; y]^U2`IPg^]7B]:d.n22.Ehc|{k~1?)$P>;rk$E');
define('LOGGED_IN_KEY',    'U&1wV/[/=@%s[lK=.kbg>!0Z@fp@)I(ujVZ%|<H[aY,wvkT{gbvf`A`IqAq&|E26');
define('NONCE_KEY',        '8698{CdJ§1jhC 5!Kb|7Bz5!mso.@@§b.$l6,Lhm@>3q{v4QC(%[%/|D({Z]a3ui');
define('AUTH_SALT',        '~@}F{YvbdR 0U@[siZ?G?M]9^C.dcAMhSg&;(yBL?0%x(Uj|k6BzD8[N^vPfE§|B');
define('SECURE_AUTH_SALT', 'c0ek +^uJNY§C0$HABI!F?10^rmQgdtrrgjJp)anYE!d7njYu?9cT(!9P~lI^P!n');
define('LOGGED_IN_SALT',   '(`w/Y!9=y&RiA6!,ZN/)N§EOUJM7AxN4x=`iqgonMDGp+dYq&Ag])XXEMW]_}Mmu');
define('NONCE_SALT',       ' QDkcsZvP?!w@,Ow2ndDimX(VhdDo|OFZ0&@,-;jqf{^M6RvfcL@?Q>>%IP5RO&%');

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
