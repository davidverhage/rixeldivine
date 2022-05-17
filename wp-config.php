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

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '128M');
@ini_set( 'memory_limit', '256M' );

define( 'WP_MEMORY_LIMIT', '512M' );

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressx' );

/** Database username */
define( 'DB_USER', 'dbmasterWP' );

/** Database password */
define( 'DB_PASSWORD', 'Khaoz!983@Dave' );

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
define( 'AUTH_KEY',         'G7OI<ii|hc)wl.S~N=G;hJAe.aQ*gAtioX?OyfL5&!s;8DIZ-L%YG7AXTl+KWuv,' );
define( 'SECURE_AUTH_KEY',  't*uoN.)McM:kdL7ot]}oSFCEIookuM$4B_P_I9{2*-[n7&l(bS4{=[9U`DT)+Ect' );
define( 'LOGGED_IN_KEY',    '53~%D6?nFe0uO`voy)&x/<aj>SamzGz6LQ<L^tC_;+nzC8.W`,*,frtkR43sm-$o' );
define( 'NONCE_KEY',        '`+4De =*jb S8VZi!IZacnb:?[-52oqg]Vx6C&7Pn0s/qub4Q?p%.xiwI4mK7{$_' );
define( 'AUTH_SALT',        '>Mr1yFJ:5~$Z3Brl.i!#OuN;$-`kTx?9TX)P?dQWm*L*LWunPa/-*j-I}KIvKLMD' );
define( 'SECURE_AUTH_SALT', 'o:vdUXyPA$qM6SG?R^*Pl?PS^H+6HpBi.PKVdLyg}e(6md w=[4{- /&DQ$Kb+x&' );
define( 'LOGGED_IN_SALT',   'dXg-Po[|e&leSw4S`E}56grA1Bp&IcEA5Us.*I,*4E]*:_qBS@oq_gXtTLpiXF%-' );
define( 'NONCE_SALT',       '={m$>-;^g`IMS`_&Finj8V[JQDad>|ZX8 ds5]/)gcC#*.)r[Y!ug.f970O{r2Tv' );

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

define( 'FS_METHOD', 'direct' );



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';