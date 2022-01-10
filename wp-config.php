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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_formularios' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '1zPYlGR]No5-*n(E8+bX?kmj-r8}[quHNMGNUNiWmO*xnV_NWrmSK?Oz)_](*RMJ' );
define( 'SECURE_AUTH_KEY',  'r-HuanC`Q<>a`^LcCB-4e=lAx3og0;tp_lbMd,RD*k^<?t^oHvI|DsJU7E|~ppO6' );
define( 'LOGGED_IN_KEY',    'C9sB+Psui1NidM&2&wF%V#W!I8B|R_8[L0Q0i8`L}F0m$R0c&Mb-!gz^vYC{;!?X' );
define( 'NONCE_KEY',        '|9t7?mox]0gA90g(%[d58`Ez`fVG-)-H<zmd|>D@XINrtcx8`&~IQ mN ?h6:Tzl' );
define( 'AUTH_SALT',        'iUD7dCh,mUD$;|^GZT{ksOE*GZ,=a7F[>h#w01yuE@iW!?/{6SBiNw5$k0?e|Jgp' );
define( 'SECURE_AUTH_SALT', '}D9grJ|{l+fFNJv!c,eZ.a~+vMji0G0lrRQaUEe#RX7;9.Fxi]J9qXz@qx9mC@JH' );
define( 'LOGGED_IN_SALT',   'HtkD^1[dUVLb4*?h!kRcpQ%Sd?q?K63OZnk;gTWQ`r/hkS,7MJ+z+<se4/`{NOU<' );
define( 'NONCE_SALT',       'k,^3yI.h)-F)-rG)1k#})$#5p@*hfI<SNT[gh$Ag#Qzdw|v2D_p`[R~/`y5t`&u!' );

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
