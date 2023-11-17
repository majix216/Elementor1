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
define( 'DB_NAME', 'elementor1' );

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
define( 'AUTH_KEY',         '?Ua09|g@J/=%q,hiz?100x{NX<r*&JA0x hD/$N9AL27@A~%==op;[_|ls+fl=*.' );
define( 'SECURE_AUTH_KEY',  '9pb#;}:s(Zwr_Q~JtfI-?gc9VMYrYhq4weN]sh|~HK$~x7`tN.UWZ2aNCy3FlCK@' );
define( 'LOGGED_IN_KEY',    'b:A0^5?zi`zUX1a3Ne;2@B-j:BoOg>DKZj!SdokVO [:C5sz0A2E.!:DQ!PZ>k{ ' );
define( 'NONCE_KEY',        'Z8?Tq~(Jn![R/4t/ 4/}X5S-~HMATZ1~hlVI8nealCv.>_ngKU{{J>z;mk,:KGyo' );
define( 'AUTH_SALT',        '6#7jlhLoMS%UnW4Rr;Y5[^fQ4n&3O92lIwd4v:hDS`9X0P/&f)$@d*~QF>^o<usU' );
define( 'SECURE_AUTH_SALT', 'HxCo1!PV!Zf5.*tHxiu@(T.L[yaa_j9I 7 Ks(?$;ND*v+GITiB`BUa*h>m,wpI,' );
define( 'LOGGED_IN_SALT',   '{E<7 HWQ:L,0WL>O(!]^SA%LbB^4![Q,8*9W`vq23q,=>5u5[uLr&/ TkkX!Tm&f' );
define( 'NONCE_SALT',       'BELN0*kMWf5[;m(M[t*Mc9,Gii%:lW!TIC8hc=!PGV:3$5j_c5<8$<H]O#hE9H]+' );

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
