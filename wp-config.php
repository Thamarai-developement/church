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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'church' );

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
define( 'AUTH_KEY',         '<?IF+5:-8tK|r~fTb; .2>JxDj_$!*0u{ 0*Gd8z4k!gV<< 0rJ.J2K8Xf#vt/F0' );
define( 'SECURE_AUTH_KEY',  '4>k{lp+^|Gx5a$vIJzZr3I3rqiO]Z(4!!17s^-AJdYi;DQ1M//L`4cw2!X%iu550' );
define( 'LOGGED_IN_KEY',    't<+k$|7mFkq56.%A8Lwz EUb)E~dh^#&hjzs}R^NhV^Q1Z(N?aLE^4UrPNhV,KgL' );
define( 'NONCE_KEY',        '*MJo0zGnz)gRT;_-ic<`yFiH<Am?N+1`Js8mApE]qSpe;Hpznix}[8`m9vb!F>@,' );
define( 'AUTH_SALT',        'y~IGTGc/FVcxC~odjVDuHJU/sQ`CO>jzSc&+D%,PSE>#,h3FS`!DDnI]!OTE7]RH' );
define( 'SECURE_AUTH_SALT', 'O-%?#n41z7|}_5.Na1^&YRtQvl<pB6x;Of](KCA3w/YzQvc[079[XBDEx+dt{[qS' );
define( 'LOGGED_IN_SALT',   'iyG}b=0g|)OfZo2@5C)Hw1+jeUq0#9f6cDvmP_v}T6Tu17Qb9rYCI*X+@kP2=VDO' );
define( 'NONCE_SALT',       '6J3OB! 5eF!!9qV=a,k3Dnf5>KP~^|LCU>*W>jUazmW;Cjw3.K`TR?qy( F>w2L=' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
