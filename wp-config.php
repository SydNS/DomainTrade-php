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
define( 'DB_NAME', 'IsaacTegu' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'aB]=1?<QP@4Q)Gk*/D1Xq{^aMaA3%K&6R3l&c4lYLkL#P1Vae~b&1#p`lncAfS9p' );
define( 'SECURE_AUTH_KEY',  ']*!*CGs817}z0J:Tbfa0WaQsOgh1JWU$`@odN@Usb9OsECWNQVq@:?uA]suD?6aT' );
define( 'LOGGED_IN_KEY',    '#!v5F#1t~6-di <^*qrF>X.]8yV2~I$*RK[EmV:]zzk/9<UwLe`vP[]n/e.BSpW^' );
define( 'NONCE_KEY',        '3pmW,2DU$<Nl]zp[PPFTKl0k4^[ic{qC,:EQ%>^Kj#?6`V*;gGpw$j}j|YsS{_09' );
define( 'AUTH_SALT',        '%E>fV>/A-GXAxIMf)eUKi.>>G;/mcDyDg9i5eqN)?aeYgPWuP>j8<TeooFm[FxY=' );
define( 'SECURE_AUTH_SALT', 'mnw@b/W6f/%Z !E{AdS_@7I_0dVM=]KE?&Kl?u)O<wam#z36@Y7lB=]IwCfC@uF]' );
define( 'LOGGED_IN_SALT',   ',Y@95a>V7Ub;*,#-TpJ*o{./kRN.g@?< U9Tjd/5k O)i+D[:/!vt(WD`#I{;Tpj' );
define( 'NONCE_SALT',       '7NZZ_BV||-N|d]Kg<TiI_h_hlUe[$!l4maS}`%)O6^ai!9NG&|#lI0q#-LxQ,sw0' );

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
