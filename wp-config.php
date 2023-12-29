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
define( 'DB_NAME', 'lesam' );

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
define( 'AUTH_KEY',         'u8^QJ)TbQG.#.|KvC>J*7g7:>E38r$o,sA{(;+G9-Bg(66LR[WbmB,&bd 2k_n<8' );
define( 'SECURE_AUTH_KEY',  'pk)):Sm$]1kr!#M/.J6cxwP[!8x2eC:G*#/b81k4%[Lf&31T#n+7zG$EP<,*ahke' );
define( 'LOGGED_IN_KEY',    '..G)kl),}S 8&Zk4&M&7AgD]?M#,Zu$H=`Oi`vF<GaWnHlr|w3_fPW=A6PE[1cUU' );
define( 'NONCE_KEY',        '(pwL,h5&#eC0T=taejjqi~uPpV90T?u>i j`-SghH8jJ2hCK7t*5S]75/77EO2/L' );
define( 'AUTH_SALT',        'Ujj%aQ3<Vetlr<]k /]neZaAT$lS2bu8vA_pcNcG}Mwo%gREtk!Y=?v^z)<}amCX' );
define( 'SECURE_AUTH_SALT', 'GR#6R9<(E.e!tzY!d(2Ook6Wha:JpaFXa?y&@?Uty.[2@Tc676^XgH.1Y_EO7vLv' );
define( 'LOGGED_IN_SALT',   'IF`6>mL5=Z$r*.x0ziy42=x+tf.}W)onk>h,8MP}0ORZeHX}B*m)J]9N`tXd9)ai' );
define( 'NONCE_SALT',       'FLosW?*[|<u{YHUYWo7f:jtQ^glP5$FmL4N{u1H1 g$TZQz)fH,CgiJY4OimK[7I' );

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
