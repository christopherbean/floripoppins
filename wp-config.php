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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'floripoppins' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '-MTy0h7CR/@3DizM2&JhPgQ$.dZM7U(1*tMX22F31i4ho:zlX2$VJ}KG^TE.ZTKA' );
define( 'SECURE_AUTH_KEY',  '=nC@-RK=s$E$Yb]CtDU2Zvbs9?TO&$]L)F/vBvZt[2t]BVu5p}H2Cn6Yp&D+*.5P' );
define( 'LOGGED_IN_KEY',    'V]@(7U?BL8<stG[.@.~2NzOP!xq|U5`F.UrO.#/v/0)5e1UBHoaV=;WjRU~by]f/' );
define( 'NONCE_KEY',        'tITB_mx#64 ||Z-LVd,]nE60eP#8`/AzKH+b2^matt(s<,koGk[f##DY 3DBV$xd' );
define( 'AUTH_SALT',        'q110 0~[@sV]rmrWB_1,y2Wtq:tE+nKN6@gZY5[uc~k0j:Ik,=_xkL`*Jc7<LX+3' );
define( 'SECURE_AUTH_SALT', '.fJzqR M`tj[GyH[yI|i$TfH.i3BbZo?l:3SRmCYh0UcPSo= KE9VsWUa6nGR>@[' );
define( 'LOGGED_IN_SALT',   'H<PCzxV)cZA2F84w|?N<.bm|TzM`z&zS)7L#&f}/9Tob:Ocs~@#PpVaq/iBxMFiY' );
define( 'NONCE_SALT',       'O}mbf0Lw5zk|`d`6W3}~%xQW).ImHCs&P`KfK}2Hko:3w6X<6H6qDPYk:+XEzr{F' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
