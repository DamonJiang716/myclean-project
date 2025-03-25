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
define( 'DB_USER', 'jd139097' );

/** Database password */
define( 'DB_PASSWORD', 'Jydw20040716' );

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
define( 'AUTH_KEY',         'A[Z~_v7KJA9JvPy/4/ -G:)jF*;2zCfCfo@zm-!vT+4}F7DLh|Va!Zv6vPO#m%<D' );
define( 'SECURE_AUTH_KEY',  '.~*$>V1B,5bY@j|jrrZQO2yEBD@>VAr:*_iE|8 8}(j<bkJS3HRjg&(FU7qug8@j' );
define( 'LOGGED_IN_KEY',    '(v47p.$Hv*V%G,?k0=n1hLWWn8=!rz+nt]ztF=O&U1mDwGZe>z`{491Z%)&M))_;' );
define( 'NONCE_KEY',        'MLg05@z?oeT)^uHb3$bb+$f:}uJWf/U8M9YS|=i21|54~~0L=Cc]U,3E^eXFg.WR' );
define( 'AUTH_SALT',        'iBtX_+Z)5~Z)?@KT;H^DsqqCa8!#AeWE Ld{%C9*/UOsN:ear-M?sj|OdG3sjg7A' );
define( 'SECURE_AUTH_SALT', 'oF<Of~a[Kx]l!Y};NW/ZJe/Kyyy;d7|2XY!X(/fDgjNVN^1;<gP.2!!o,>5@[py^' );
define( 'LOGGED_IN_SALT',   '%5S!nHL|mMUV^gQ3J4R=A:l@eC<8<S&U;W{o=.kM.b -2p_rFp.oWeXB7YFFO|gD' );
define( 'NONCE_SALT',       '=J,_#r)R5dyNQ;q>$!Tn%yq3W3]IAZ6E?Tw^%*Rm/F+[y>9R,|LXmwIw>P  )4ux' );

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
