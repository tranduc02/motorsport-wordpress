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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'motorsport' );

/** Database password */
define( 'DB_PASSWORD', 'motorsport' );

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
define( 'AUTH_KEY',         '`#Ztv~<CAH$5[(BKW}33]N27s%s?VScp?us}Lk<Ud}i(XRWr>GUpV^2|W9L9]79{' );
define( 'SECURE_AUTH_KEY',  'H(nic_5])hXVR298Wf,|:#il{Y%.@m8c&^Ivr!bEmPugB~j;9H7>f?=.UJx%([4F' );
define( 'LOGGED_IN_KEY',    'jUt</=b=k@:5OY9vPy)5DF|~#7gEdNVfZ`UH:k,>e9XF}09@F#m5~q)u[V.rY~Hd' );
define( 'NONCE_KEY',        'hI<9ZnK31##x0*U#u/u 2K+GwG+c8M.<[?G^yTGK>:/@d;?hK2m)[}w%Va5U.zB&' );
define( 'AUTH_SALT',        'R^f6.=/XObx+Z%M}<SnbxA4^U:bP!@xJ>z~|hs{.13qmPG/Vwt(xmk2~<FR5@^m`' );
define( 'SECURE_AUTH_SALT', 'dbv63Z3p7+BnvKDtDP9`d3Y>Pe7i(j6?,Ee=Y+z@ZSujczj%;2]7R:BoFFy6ahc_' );
define( 'LOGGED_IN_SALT',   'H;l-Q%qay%Q;NJpKEH@C>X0$`XChH8RNA-aQ{X&$xWt,6WDIT=_-8o(w_hJcw/C+' );
define( 'NONCE_SALT',       '7C?k1@%d*R8boPy$?0&DNE$^a3 z8}9`;Z&Ry$Eb&M4B|9K0;4gcr&zg[b#%Q?Aj' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
